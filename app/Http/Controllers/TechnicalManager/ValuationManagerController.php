<?php
// Technical Manager Controller  08-05-23
namespace App\Http\Controllers\TechnicalManager;
use App\Models\FieldExecutive\New_Valuer;
use App\Models\Masters\Property;
use App\Models\Masters\Category;
use App\Models\Masters\Tags;
use App\Models\Masters\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Add_news;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\EmployeeRegistration;
use App\Models\Masters\Area;
use App\Models\Masters\Products;
use DB;
use App\Models\User;


class ValuationManagerController extends Controller
{


  public function index_report()
  {
    $new_valuer_all = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
    ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
    ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
    ->leftjoin('locations','locations.id','=','new_valuer.location_id')
    ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
    ->get();

    // echo json_encode($new_valuer_all);
    // exit();
    return view('TechnicalManager.valuation_manager_report',compact('new_valuer_all'));
  }


    public function index($id,Request $request)
    {

      $new_edit = New_Valuer::find($id); 
      // echo json_encode($new_edit);
      // exit();
      $property_type = Property :: all();
        $category = Category :: all();
        $tag = Tags :: all();
        $location = Location :: all();
      $property_type1 = Property :: all();
      $property_type2 = Property :: all();
      $property_type3 = Property :: all();



      $location2 = Location :: all();


       // $edit_data=Add_news::find($id);

        $edit_data=Add_news::where('new_valuer.id',$request->id)
        ->join('new_valuer','new_valuer.valuation_id','=','add_news.valuation_id')
        ->select('add_news.*','new_valuer.valuation_id')
        ->first();

        // echo json_encode( $edit_data);
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

        
        // $property_type1 = Property :: all();
        $category1 = Category :: all();
        $category2 = Category :: all();
        $category3 = Category :: all();
        $tag2 = Tags :: all();
        $tag3 = Tags :: all();

        


        $tag1 = Tags :: all();
        $location1 = Location :: all();
        $location2 = Location :: all();
        $location3 = Location :: all();


        $associatesbank=AssociatesBank::all();
        $product=Products::all();
        $area=Area::all();
        $emp=EmployeeRegistration::all();
        $data=Add_news::orderby('id','desc')->get();



        $new_valuer_all = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
        ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
        ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
        ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
        ->get();

       

        
        return view('TechnicalManager.valuation-manager',compact('new_valuer_all','new_edit','property_type','category','tag','location','edit_data','property_type1','category1','tag1','location1','associatesbank','product','area','emp','data','location2','category2','category3','property_type2','tag2','tag3','property_type3','location2','location3','all_user','new_location'));
    }


    public function update(Request $request)
    {
     
 
//dd($request->all());
$update = New_Valuer::where('id', $request->id)->first();
    

$first_file = $update -> file_name;
$update -> file_name  = $request-> file_name;
// echo json_encode($first_file);
// exit();
$file_merge = array_merge($first_file,$update -> file_name);
$update -> file_name =$file_merge;

//$update -> file_name  = $request-> file_name;

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
$first_array=$update -> file;
$array_merge = array_merge($first_array, $image_name_array);
$update -> file  = $array_merge;

}

$update->save();

// echo json_encode($update);    
// exit();


       return redirect()->route('technicalmanager_report')->with(['success' => true, 'message' => 'Data Successfully Updated !']);
    }


//function for displaying data on technical manager model

 public function  model_technical_manager(Request $request)
{

  $onview=DB::table('new_valuer')
  ->leftjoin('locations','locations.id','=','new_valuer.location_id')
        // ->leftjoin('areas','areas.id','=','new_valuer.area_id')
        // ->leftjoin('associatesbanks','associatesbanks.id','=','new_valuer.associatesbanks_id')
        // ->leftjoin('products','products.id','=','new_valuer.product_id')
    //   ->leftjoin('employee_registraions as emp1','emp1.id','=','new_valuer.field_executive_id')
  // ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  // ->leftjoin('employeevalue_addnew_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  // ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   
  ->where([
      'new_valuer.id'=>$request->id
  ])
  ->select('new_valuer.*','locations.locations')
  ->first();
  
  //agar hume sirf ek hi value dikhani hai to first
  
  $value_addnew=DB::table('add_news')
  ->where([
    'add_news.newvaluer_id'=>$request->id
])
->orderby('add_news.id','asc')
->get();
  return response()->json(['onview'=>$onview,'value_addnew'=>$value_addnew]);//shedule script me jo var read kiya hai sme ressult.shedule hai

}

public function tech_update(Request $request)
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

   return redirect()->route('technicalmanager_report')->with(['success' => true, 'message' => 'Data Successfully Updated !']);
}


}
