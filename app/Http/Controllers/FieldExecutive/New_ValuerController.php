<?php
//New Valuer Controller   08-05-23
namespace App\Http\Controllers\FieldExecutive;

use App\Http\Controllers\Controller;
use App\Models\Admin\Add_news;
use App\Models\FieldExecutive\New_Valuer;
use App\Models\Masters\Property;
use App\Models\Masters\Category;
use App\Models\Masters\EmployeeRegistration;
use App\Models\Masters\Location;
use App\Models\Masters\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\Products;
use App\Models\Masters\Area;
use auth;
use App\Models\User;
use DB;
use App\Models\Masters\Status;
use Illuminate\Support\Facades\Validator;



class New_ValuerController extends Controller
{
    public function index( $id)
    {
        
        $new = New_Valuer :: where('new_status','1')
        ->leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->rightjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
        ->get();

        // echo json_encode($new);
        // exit();

       


//join for accordain
    //     $add_new_all=Add_news::leftjoin('locations','locations.id','=','add_news.location_id')
    //       ->leftjoin('areas','areas.id','=','add_news.area_id')
    //       ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
    //       ->leftjoin('products','products.id','=','add_news.product_id')
    // ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
    // ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
    // ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
    // ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
    //  ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive',
    //       'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
    //         ->orderby('add_news.id','desc')
    //         ->get();
    
        $edit_data=Add_news::find($id);
        $property_type = Property :: all();
        $category = Category :: all();
        $tag = Tags :: all();
        $tags= Tags :: all();
        $location = Location :: all();
        $location1= Location :: all();

        $associatesbank=AssociatesBank::all();
        $product=Products::all();
        $area=Area::all();
        $emp=EmployeeRegistration::all();
        $data=Add_news::orderby('id','desc')->get();


        
// echo json_encode(Auth::user());
// exit(); 
        $ongoing=New_Valuer::where('status','ongoing')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
 ->select('new_valuer.*','locations.locations')
        ->orderby('new_valuer.id','desc')
        ->get();

        $com=New_Valuer::where('status','completed')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
 ->select('new_valuer.*','locations.locations')
        ->orderby('new_valuer.id','desc')
        ->get();

        $cancelled=New_Valuer::where('status','cancelled')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
 ->select('new_valuer.*','locations.locations')
        ->orderby('new_valuer.id','desc')
        ->get();

        $pending=New_Valuer::where('status','pending')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
 ->select('new_valuer.*','locations.locations')
        ->orderby('new_valuer.id','desc')
        ->get();


        $status = Status:: where('role_name_id',25)
        ->get();


        $status_FE = Status:: where('role_name_id',Auth::user()->role_name_id)
        ->get();

        $new_edit = Add_news::find($id);
        // echo json_encode($new_edit);
        // exit();
        
        //$all_user = EmployeeRegistration :: 
        //where('area_id',$new_edit->area_id)
        $all_user = User ::where('id',$new_edit->field_executive_id)
        ->orwhere('id',$new_edit->assistant_valuer_id)
        ->orwhere('id',$new_edit->technical_manager_id)
        ->orwhere('id',$new_edit->technical_head_id)
        ->select('users.id','users.name','users.role_name_id')
        ->get();

        $new_location = Location:: where('locations.id', $edit_data->location_id)
          ->join('areas','areas.location_id','=','locations.id')
          ->select('areas.*')
         ->get();

// echo json_encode($new_edit->area_id);
// exit();

          
        // $new_edit = Add_news :: leftjoin('propertys','propertys.id','=','.property_type_id') 
        // ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        // ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        // ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        // ->select('add_news.*','categorys.category','tags.tag','locations.locations','propertys.property')
        // ->get();



        
        $add_new = Add_news:: leftjoin('employee_registraions','employee_registraions.id','=','add_news.field_executive_id')
        ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->select('add_news.*','employee_registraions.role_name_id','locations.locations')
        ->get();

        $role=DB::table('user_roles')
        ->select('role_name','id')
        ->orderby('order_no','asc')
        ->get();
        
        $status = Status:: where('role_name_id',25)
        ->get();

        $loc=Location::orderby('id','desc')->get();

// echo json_encode($status);
// exit();
        return view('FieldExecutive.new_valuation',compact('new','data','emp','area','product','associatesbank','edit_data','property_type','tag','category','location','new_edit','add_new','ongoing','com','cancelled','pending','location1','tags','status','all_user','new_location','role','status_FE','loc'));
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $image_name_array=[];
        if (isset($request->image_files) && !empty($request->image_files) 
        && count($request->image_files)>0){
            foreach ($request->image_files as $key => $image) {
            $extension= explode('/', mime_content_type($image))[1];
            $data = base64_decode(substr($image, strpos($image, ',') + 1));
            $imgname='fe'.rand(000,999).$key . time() . '.' .$extension;
            file_put_contents(public_path('images/FE-valuation') . '/' . $imgname, $data);
            $image_name_array[]=$imgname;
        }
    }
       
        $insert = New_Valuer::create([

            'name' => $request->name,
           'valuation_id'=> $request->valuation_id,
            'contact_no'  => $request-> contact_no,
            'property_type_id'  => $request-> property_type_id,
            //'property_address'  => $request-> property_address,
            //'address'  => $request-> address,
            'house_no'  => $request-> house_no,
            'road_name'  => $request-> road_name,
            'building_name'  => $request-> building_name,
            'wing_no'  => $request-> wing_no,
            'colony'  => $request-> colony,
            'village_city'  => $request-> village_city,
            'tehsil'  => $request-> tehsil,
            'district'  => $request-> district,
            'pin_code'  => $request-> pin_code,
            'landmark'  => $request-> landmark,
            'meter_no'  => $request-> meter_no,
            'plot_area'  => $request-> plot_area,
            'up_area'  => $request-> up_area,
            'GF'  => $request->  GF,
            'FF'  => $request-> FF,
            'SF'  => $request-> SF,
            'TF'  => $request-> TF,
            'occupancy_status'  => $request->occupancy_status, 
            'occupied_by'  => $request-> occupied_by,
            'four_borders'  => $request-> four_borders,
            'whether_boundaries_matching'  => $request-> whether_boundaries_matching,
            'rate_range'  => $request-> rate_range,
            'plot_range'  => $request-> plot_range,
            'road_type'  => $request-> road_type,
            'road_width_in_feet'  => $request-> road_width_in_feet,
            'type_of_structure'  => $request-> type_of_structure,
            'remark_on_boundaries_matching'  => $request-> remark_on_boundaries_matching,
            'lat'  => $request-> lat,
            'long'  => $request-> long,
            'construction_stage'  => $request-> construction_stage,
            'side_marginal_distance_in_feet'  => $request-> side_marginal_distance_in_feet,
            'discription_of_property'  => $request-> discription_of_property,
            'person_met_at_site'  => $request-> person_met_at_site,
            'relation_with_owner'  => $request-> relation_with_owner,
            'remark_on_property'  => $request-> remark_on_property,
            'deviation'  => $request-> deviation,
            'rate_referenace'  => $request-> rate_referenace,
            'date_of_visit'  => $request-> date_of_visit,
            'name_of_FE_visited_the_property_id'  => $request-> name_of_FE_visited_the_property,
            'location_id'  => $request-> location_id,
            'category_id'  => $request-> category_id,
            'tag_id'  => $request-> tag_id,
            'image'  => $image_name_array,
            'status'=>'ongoing',
            'reason'=>$request->reason,
            'last_updated_by'=>$request->last_updated_by,
            'new_status' => '1'
        ]);

        // echo json_encode($insert);
        // exit();


        return Redirect()->route('FE.ongoingmodel')->with(['success'=>'Data succesfully Submitted.']);

        
    }


    public function delete(Request $request)
    {
        $valuation = New_Valuer::where('id', $request->id)
            ->delete();
        return redirect()->back()->with(['success' => true, 'message' => 'Data Successfully Deleted !']);
    }



    public function edit($id)
    {
        //$edit_new = New_Valuer::find($id);
    // dd($edit_new);
        $edit_new = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->leftjoin('employee_registraions','employee_registraions.id','=','new_valuer.name_of_FE_visited_the_property_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property','employee_registraions.role_name_id')
        ->where('new_valuer.id',$id)
        ->first();
// echo json_encode($edit_new);
// exit();
$status = Status:: where('role_name_id',25)
->get();

        $property_type = Property :: all();
        $category = Category :: all();
        $tag = Tags :: all();
        $location = Location :: all();
        $employee_registraions = EmployeeRegistration :: all();

        // $new_edit = Add_news::find($id); 
        // $add_new = Add_news:: leftjoin('employee_registraions','employee_registraions.id','=','add_news.field_executive_id')
        // ->leftjoin('locations','locations.id','=','add_news.location_id')
        // ->select('add_news.*','employee_registraions.role','locations.locations')
        // ->get();
        return view('FieldExecutive.edit_new_valuation',compact('status','property_type','tag','category','location','edit_new'));
       
        
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'contact_no' => 'required|max:10',
                // 'valuation_id'=>['unique:users,email'],
               //  'valuation_id'=>'unique:new_valuer,valuation_id'
            ],
              [
                        'contact_no.required' => 'Please enter contact number.',
                        // 'email'=>'must be contain special character',
                         //'valuation_id'=>'please enter unique valuation id'
                    
                        ]
                    ); 
        
                    if ($validator->fails()) {
                      $error = '';
                      $messages = $validator->messages();
                      foreach ($messages->all() as $message) {
                          $error .= $message . "<br>";
                      }
                      return redirect()->back()->with(['error'=>$error]);
                  
                      }
        
       
    $update = New_Valuer::where('id', $request->id)->first();
    
            $update -> name = $request->name;
           // $update ->valuation_id= $request->valuation_id;
            $update -> contact_no  = $request-> contact_no;
            $update -> property_type_id  = $request-> property_type_id;
            //$update -> property_address  = $request-> property_address;
            //$update -> address  = $request-> address;
            $update -> house_no  = $request-> house_no;
            $update -> road_name  = $request-> road_name;
            $update -> building_name  = $request-> building_name;
            $update -> wing_no  = $request-> wing_no;
            $update -> colony  = $request-> colony;
            $update -> village_city  = $request-> village_city;
            $update -> tehsil  = $request-> tehsil;
            $update -> district  = $request-> district;
            $update -> pin_code  = $request-> pin_code;
            $update -> landmark  = $request-> landmark;
            $update -> meter_no = $request-> meter_no;
            $update -> plot_area  = $request-> plot_area;
            $update -> up_area  = $request-> up_area;
            $update -> GF  = $request->  GF;
            $update -> FF  = $request-> FF;
            $update -> SF  = $request-> SF;
            $update -> TF  = $request-> TF;
            $update -> occupancy_status  = $request->occupancy_status; 
            $update -> occupied_by = $request-> occupied_by;
            $update -> four_borders = $request-> four_borders;
            $update -> whether_boundaries_matching  = $request-> whether_boundaries_matching;
            $update -> rate_range = $request-> rate_range;
            $update -> plot_range  = $request-> plot_range;
            $update -> road_type  = $request-> road_type;
            $update -> road_width_in_feet  = $request-> road_width_in_feet;
            $update -> type_of_structure  = $request-> type_of_structure;
            $update -> remark_on_boundaries_matching  = $request-> remark_on_boundaries_matching;
            $update -> lat  = $request-> lat;
            $update -> long  = $request-> long;
            $update -> construction_stage  = $request-> construction_stage;
            $update -> side_marginal_distance_in_feet  = $request-> side_marginal_distance_in_feet;
            $update -> discription_of_property  = $request-> discription_of_property;
            $update -> person_met_at_site  = $request-> person_met_at_site;
            $update -> relation_with_owner  = $request-> relation_with_owner;
            $update -> remark_on_property  = $request-> remark_on_property;
            $update -> deviation  = $request-> deviation;
            $update -> rate_referenace  = $request-> rate_referenace;
            $update -> date_of_visit  = $request-> date_of_visit;
            $update -> name_of_FE_visited_the_property_id = $request-> name_of_FE_visited_the_property;
            $update -> location_id  = $request-> location_id;
            $update -> category_id  = $request-> category_id;
            $update -> tag_id  = $request-> tag_id;
            $update ->last_updated_by=$request->last_updated_by;
            $update -> reason = $request-> reason;

            $image_name_array=[];
           // $image_name=$update->image;

            if (isset($request->image_files) && !empty($request->image_files)) {
                foreach ($request->image_files as $key => $image) {
                $extension= explode('/', mime_content_type($image))[1];
                $data = base64_decode(substr($image, strpos($image, ',') + 1));
                $imgname='fe'.rand(000,999).$key . time() . '.' .$extension;
                file_put_contents(public_path('images/FE-valuation') . '/' . $imgname, $data);
                $image_name_array[]=$imgname;
               //array_push($image_name_array,$image_name);
            }

            $update -> image  = $image_name_array;

        }
    
// echo json_encode($update);
// exit();
            $update->save();
      

       // dd($update);
       if(Auth::user()->role_name_id==29){
        return redirect()->route('Av.new',$request->id)->with(['success'=>'Data succesfully updated.']);
       }
       elseif(Auth::user()->role_name_id==30)
       {
        return redirect()->route('technicalmanager_edit',$request->id)->with(['success'=>'Data succesfully updated.']);
       }
       elseif(Auth::user()->role_name_id==31)
       {
        return redirect()->route('technicalhead_edit',$request->id)->with(['success'=>'Data succesfully updated.']);
       }
       else{
        return redirect()->route('FE.ongoingmodel')->with(['success'=>'Data succesfully updated.']);
       }
    }

    // public function new_valuation_report()
    // {
    //     $new = New_Valuer :: where('new_status','1')
    //     ->leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
    //     ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
    //     ->rightjoin('tags','tags.id','=','new_valuer.tag_id')
    //     ->leftjoin('locations','locations.id','=','new_valuer.location_id')
    //     ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
    //     ->get();

    //     echo json_encode($new);
    //     exit();

    //     return view('FieldExecutive.new_valuation_report',compact('new'));

    // }

    public function new_valuation_report($id)
    {
    
        
        // echo json_encode($new);
        // exit();

        $edit_data = Add_news::find($id);
        $new = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
        ->where('new_valuer.valuation_id',$edit_data->valuation_id)
        ->first();

            //$all_user = EmployeeRegistration :: 
        //where('area_id',$new_edit->area_id)
        $all_user = User ::
        where('id',$edit_data->field_executive_id)
        ->orwhere('id',$edit_data->assistant_valuer_id)
        ->orwhere('id',$edit_data->technical_manager_id)
        ->orwhere('id',$edit_data->technical_head_id)
        ->select('users.id','users.name','users.role_name_id')
        ->get();

        $new_location = Location:: where('locations.id', $edit_data->location_id)
        ->join('areas','areas.location_id','=','locations.id')
        ->select('areas.*')
       ->get();

       
       $role=DB::table('user_roles')
       ->select('role_name','id')
       ->orderby('order_no','asc')
       ->get();

        
        $associatesbank=AssociatesBank::all();
        $property_type = Property :: all();
        $property_type1 = Property :: all();
        $property_type2 = Property :: all();


        $category = Category :: all();
        $tags = Tags :: all();
        
        $location = Location :: all();
        $location1 = Location :: all();
        $location2 = Location :: all();


        $product=Products::all();
        $area=Area::all();
        $emp=EmployeeRegistration::all();
        $data=Add_news::orderby('id','desc')->get();

        //accordin admin


        //assitant Valuer
        $category1 = Category :: all();
        $tag2 = Tags :: all();
        //
        // echo json_encode($tag2);
        // exit();

       

        $new_edit = New_Valuer::where('new_valuer.valuation_id',$edit_data->valuation_id)->first(); 
        // echo json_encode($new_edit);
        // exit();

        $add_new = Add_news:: leftjoin('employee_registraions','employee_registraions.id','=','add_news.field_executive_id')
        ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->select('add_news.*','employee_registraions.role_name_id','locations.locations')
        ->first();

        $product=Products::all();
        $product=Products::all();

        $status_FE = Status:: where('role_name_id',Auth::user()->role_name_id)
        ->get();
       
        $status = Status:: where('role_name_id',25)
        ->get();

        $loc=Location::orderby('id','desc')->get();


        return view('FieldExecutive.new_valuation_report',compact('new','data'  ,'area','emp','product','edit_data','associatesbank','property_type','tags','category','location','new_edit','add_new','category1','tag2','property_type1','property_type2','location1','location2','all_user','new_location','role','status_FE','status','loc'));

    }


}
