<?php
// Technical Head Controller  08-05-23
namespace App\Http\Controllers\TechnicalHead;
use App\Models\FieldExecutive\New_Valuer;
use App\Models\Masters\Property;
use App\Models\Masters\Category;
use App\Models\Masters\Tags;
use App\Models\Masters\Location;
use App\Models\Admin\Add_news;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\Products;
use App\Models\Masters\Area;
use App\Models\Masters\EmployeeRegistration;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masters\Status;
use Auth;
use App\Models\AssistantValuer\Assistant_Valuer;
use App\Models\TechnicalManager\Technical_Manager;
use App\Models\TechnicalHead\Technical_Head;
use DB;

class ValuationHeadController extends Controller
{
    public function index_report()
    {
      $new_valuer_all = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
      ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
      ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
      ->leftjoin('locations','locations.id','=','new_valuer.location_id')
      //->leftjoin('status','status.id','=','new_valuer.status')
      ->leftjoin('technical_head','technical_head.valuation_id','=','new_valuer.valuation_id')
      ->leftjoin('status as technical_status','technical_status.id','=','technical_head.status')
      ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property','technical_head.id as technical_head_id',
      'technical_status.statu as technical_head_status')
      ->get();

      //  echo json_encode($new_valuer_all );
      //  exit();
      return view('TechnicalHead.valutaion_head_report',compact('new_valuer_all'));
    }

    public function index($id)
    {

      $new_edit = New_Valuer::find($id); 
      // echo json_encode($new_edit);
      // exit();
      $property_type = Property :: all();
        $category = Category :: all();
        $category1= Category :: all();
        $category2= Category :: all();

        $property_type1 = Property :: all();
        $property_type2 = Property :: all();
        $property_type3 = Property :: all();

        $tag = Tags :: all();
        $tag1 = Tags :: all();
        $tag2 = Tags :: all();
        $tag3 = Tags :: all();

        $location4 = Location :: all();
        $category2 = Category :: all();
        $location = Location :: all();
        $location2 = Location :: all();
        $location3 = Location :: all();
        $location1 = Location :: all();

 //admin
       // $edit_data=Add_news::find($id);

       $edit_data=Add_news::where('new_valuer.id',$id)
       ->join('new_valuer','new_valuer.valuation_id','=','add_news.valuation_id')
       ->select('add_news.*','new_valuer.valuation_id')
       ->first();

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

      //  echo json_encode($edit_data);
      //  exit();

        $property_type = Property :: all();
        $category3 = Category :: all();
        $tag = Tags :: all();
        $location3 = Location :: all();
        $associatesbank=AssociatesBank::all();
        $product=Products::all();
        $area=Area::all();
        $emp=EmployeeRegistration::all();
        $data=Add_news::orderby('id','desc')->get();
        //


        $new_valuer_all = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
       ->leftjoin('technical_head','technical_head.valuation_id','=','new_valuer.valuation_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property','technical_head.id as technical_head_id')
        ->get();

        $role=DB::table('user_roles')
        ->select('role_name','id')
        ->orderby('order_no','asc')
        ->get();
       
        $tags = Tags :: all();

        $status = Status:: where('role_name_id',25)
        ->get();
        //   echo json_encode($status);
        // exit();

        $status_FE = Status:: where('role_name_id',27)
        ->get();

        $status_AV = Status:: where('role_name_id',29)
        ->get();

        $status_TM = Status:: where('role_name_id',30)
        ->get();

        
        $status_TD = Status:: where('role_name_id',Auth::user()->role_name_id)
        ->get();

        // echo json_encode($status_TD);
        // exit();


        $loc=Location::orderby('id','desc')->get();

        //$edit_data = Add_news::find($id);

        $av_table = Assistant_Valuer::where('assistant_valuer.valuation_id',$edit_data->valuation_id)->first(); 

        $tm_table = Technical_Manager::where('technical_manager.valuation_id',$edit_data->valuation_id)->first(); 

        $td_table = Technical_Head::where('technical_head.valuation_id',$edit_data->valuation_id)->first();
           
        return view('TechnicalHead.valuation_head',compact('category1','category2','property_type1','tag1','tag2','new_valuer_all','new_edit','property_type','category','tags','location4','edit_data','property_type','category3','associatesbank','product','area','emp','data','location3','location','property_type2','location2','tag3','property_type3','new_location','all_user','role','location1','status','status_FE','status_AV','status_TM','loc','av_table','tm_table','status_TD','td_table'));
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
      
      //  echo json_encode(Auth::user()->role_name_id);    
      //  exit();

      if(Auth::user()->role_name_id==30){
        return redirect()->route('Av.new',$request->id)->with(['success' => true, 'message' => 'Data Successfully Updated !']);
      
       }
       else{
       return redirect()->route('technicalhead_report')->with(['success' => true, 'message' => 'Data Successfully Updated !']);
       }
    }



    public function create_td(Request $request)
{
   
  //dd($request->all());
$update = new Technical_Head();

        $update -> valuation_id  = $request-> valuation_id;
        $update -> file_name  = $request-> file_name;
        $update -> status = $request->status;
     
        $update ->reason = $request->reason;

        $image_name_array=[];
        if (isset($request->image_filess) && !empty($request->image_filess) 
        && count($request->image_filess)>0) {
            foreach ($request->image_filess as $key => $image) {
            $extension= explode('/', mime_content_type($image))[1];
            $data = base64_decode(substr($image, strpos($image, ',') + 1));
            $imgname='av'.rand(000,999).$key . time() . '.' .$extension;
            file_put_contents(public_path('images/TD-valuation') . '/' . $imgname, $data);
            $image_name_array[]=$imgname;
        }

        $update -> file  = $image_name_array;

    }

  //  echo json_encode($update);    
  //  exit();

        $update->save();
  
 

   return redirect()->route('technicalhead_report')->with(['success'=>'Data succesfully submitted.']);
}

public function update_td(Request $request)
{
   
  //dd($request->all());
$update = Technical_Head::where('valuation_id',$request->valuation_id)->first();
//      echo json_encode($update);    
//    exit();

       // $update -> valuation_id  = $request-> valuation_id;
        $update -> file_name  = $request-> file_name;
        $update -> status = $request->status;
     
        $update ->reason = $request->reason;

        $image_name_array=[];
        if (isset($request->image_filess) && !empty($request->image_filess) 
        && count($request->image_filess)>0) {
            foreach ($request->image_filess as $key => $image) {
            $extension= explode('/', mime_content_type($image))[1];
            $data = base64_decode(substr($image, strpos($image, ',') + 1));
            $imgname='av'.rand(000,999).$key . time() . '.' .$extension;
            file_put_contents(public_path('images/TM-valuation') . '/' . $imgname, $data);
            $image_name_array[]=$imgname;
        }

        $update -> file  = $image_name_array;

    }

        $update->save();
  
  //  echo json_encode($update);    
  //  exit();

   return redirect()->route('technicalhead_report')->with(['success'=>'Data succesfully updated.']);
}


public function td_valuation_view(Request $request)
    {
    
        
        // echo json_encode($new);
        // exit();

        $edit_data=Add_news::where('new_valuer.id',$request->id)
        ->join('new_valuer','new_valuer.valuation_id','=','add_news.valuation_id')
        ->select('add_news.*','new_valuer.valuation_id')
        ->first();

        //   echo json_encode($edit_data);
        // exit();


        $new = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
       // ->where('new_valuer.valuation_id',$edit_data->valuation_id)
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

        $av_table = Assistant_Valuer::where('assistant_valuer.valuation_id',$edit_data->valuation_id)->first(); 


        $tm_table = Technical_Manager::where('technical_manager.valuation_id',$edit_data->valuation_id)->first(); 
// echo json_encode($tm_table);
//         exit();

         $td_table = Technical_Head::where('technical_head.valuation_id',$edit_data->valuation_id)->first();

        $add_new = Add_news:: leftjoin('employee_registraions','employee_registraions.id','=','add_news.field_executive_id')
        ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->select('add_news.*','employee_registraions.role_name_id','locations.locations')
        ->first();

        $product=Products::all();
        $product=Products::all();

        $status_AV = Status:: where('role_name_id',29)
        ->get();
       
        $status = Status:: where('role_name_id',25)
        ->get();

        $status_FE = Status:: where('role_name_id',27)
        ->get();

        $status_TM = Status:: where('role_name_id',30)
        ->get();

        $status_TD = Status:: where('role_name_id',Auth::user()->role_name_id)
        ->get();

       
        $loc=Location::orderby('id','desc')->get();

        return view('TechnicalHead.tech_head_edit',compact('new','data'  ,'area','emp','product','edit_data','associatesbank','property_type','tags','category','location','new_edit','add_new','category1','tag2','property_type1','property_type2','location1','location2','all_user','new_location','role','status_FE','status','status_AV','status_TD','loc','av_table','status_TM','tm_table','td_table'));

    }
}
