<?php
// Assistant Valuer Controller  08-05-23
namespace App\Http\Controllers\AssistantValuer;
use App\Http\Controllers\Controller;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\Area;
use App\Models\Masters\Products;
use Illuminate\Http\Request;
use App\Models\FieldExecutive\New_Valuer;
use App\Models\Masters\Property;
use App\Models\Masters\Category;
use App\Models\Masters\EmployeeRegistration;
use App\Models\Masters\Location;
use App\Models\Masters\Tags;
use App\Models\Admin\Add_news;
use App\Models\User;
use DB;

class AssitNewValuationController extends Controller
{
    public function index(Request $request)
    {
    
        $new = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
        ->first();

        // echo json_encode($new);
        // exit();

        $edit_data=Add_news::where('new_valuer.id',$request->id)
        ->join('new_valuer','new_valuer.valuation_id','=','add_news.valuation_id')
        ->select('add_news.*','new_valuer.valuation_id')
        ->first();
          //find($request->id);
      //where('valuation_id',$new->valuation_id)->first();

        // echo json_encode($request->id);
        // exit();

        $all_user = User ::
        where('id',$edit_data->field_executive_id)
        ->orwhere('id',$edit_data->assistant_valuer_id)
        ->orwhere('id',$edit_data->technical_manager_id)
        ->orwhere('id',$edit_data->technical_head_id)
        ->select('users.id','users.name','users.role_name_id')
        ->get();

        $new_location = Location:: where('locations.id', $edit_data->location_id)
        ->join('areas','areas.location_id','=','locations.id')
        ->select('locations.locations','areas.area')
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
        $tag = Tags :: all();
        
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


       

        $new_edit = New_Valuer::find($request->id); 
       

        $add_new = Add_news:: leftjoin('employee_registraions','employee_registraions.id','=','add_news.field_executive_id')
        ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->select('add_news.*','employee_registraions.role_name_id','locations.locations')
        ->first();

        $product=Products::all();
        $product=Products::all();

       


        return view('AssistantValuer.assit_new_valuation',compact('new','data'  ,'area','emp','product','edit_data','associatesbank','property_type','tag','category','location','new_edit','add_new','category1','tag2','property_type1','property_type2','location1','location2','all_user','new_location','role'));

    }

    public function create(Request $request)
    {
        $image_name_array=[];
        if (isset($request->image_files) and !empty($request->image_files)) {
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
            'contact_no'  => $request-> contact_no,
            'property_type_id'  => $request-> property_type_id,
            'property_address'  => $request-> property_address,
            'address'  => $request-> address,
            'road_name'  => $request-> road_name,
            'colony'  => $request-> colony,
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
            'status'=>$request->status,
            'reason'=>$request->reason
        ]);

        return Redirect()->route('FE.ongoingmodel')->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }


    public function delete(Request $request)
    {
        $valuation = New_Valuer::where('id', $request->id)
            ->delete();
        return redirect()->back()->with(['success' => true, 'message' => 'Data Successfully Deleted !']);
    }



    public function edit($id)
    {

        $associatesbank=AssociatesBank::all();
        $product=Products::all();
        $area=Area::all();
        $emp=EmployeeRegistration::all();
        $data=Add_news::orderby('id','desc')->get();

      $new_edit = New_Valuer::find($id); 
      
        
        // $new = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        // ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        // ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        // ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        // ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
        // ->first();
  
        $new_edit = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->leftjoin('employee_registraions','employee_registraions.id','=','new_valuer.name_of_FE_visited_the_property_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property','employee_registraions.role_name_id')
        ->where('new_valuer.id',$id)
        ->first();

        // echo json_encode($new_edit);
        // exit();


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
        return view('AssistantValuer.assit_new_valuation',compact('property_type','data','tag','category','location','new_edit'));
       
        
    }

    public function update(Request $request)
    {
       
      //dd($request->all());
    $update = New_Valuer::where('id', $request->id)->first();
    
    
            $update -> file_name  = $request-> file_name;
            $update ->status = $request->status;
         
            $update ->reason = $request->reason;

            $image_name_array=[];
            if (isset($request->image_filess) && !empty($request->image_filess) 
            && count($request->image_filess)>0) {
                foreach ($request->image_filess as $key => $image) {
                $extension= explode('/', mime_content_type($image))[1];
                $data = base64_decode(substr($image, strpos($image, ',') + 1));
                $imgname='av'.rand(000,999).$key . time() . '.' .$extension;
                file_put_contents(public_path('images/AV-valuation') . '/' . $imgname, $data);
                $image_name_array[]=$imgname;
            }

            $update -> file  = $image_name_array;

        }

            $update->save();
      
    //    echo json_encode($update->file);    
    //    exit();

       return redirect()->route('AV.ongoingmodel')->with(['success' => true, 'message' => 'Data Successfully Updated !']);
    }


}
