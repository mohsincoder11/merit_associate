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

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValuationHeadController extends Controller
{
    public function index_report()
    {
      $new_valuer_all = New_Valuer :: leftjoin('propertys','propertys.id','=','new_valuer.property_type_id') 
      ->leftjoin('categorys','categorys.id','=','new_valuer.category_id') 
      ->leftjoin('tags','tags.id','=','new_valuer.tag_id')
      ->leftjoin('locations','locations.id','=','new_valuer.location_id')
      ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
      ->get();

      // echo json_encode($new_valuer_all );
      // exit();
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

 //admin
       // $edit_data=Add_news::find($id);

       $edit_data=Add_news::where('new_valuer.id',$id)
       ->join('new_valuer','new_valuer.valuation_id','=','add_news.valuation_id')
       ->select('add_news.*','new_valuer.valuation_id')
       ->first();


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
        ->select('new_valuer.*','categorys.category','tags.tag','locations.locations','propertys.property')
        ->get();

       
        $tag = Tags :: all();
        return view('TechnicalHead.valuation_head',compact('category1','category2','property_type1','tag1','tag2','new_valuer_all','new_edit','property_type','category','tag','location4','edit_data','property_type','category3','associatesbank','product','area','emp','data','location3','location','property_type2','location2','tag3','property_type3'));
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
      
      //  echo json_encode($update->file);    
      //  exit();

       return redirect()->route('technicalhead_report')->with(['success' => true, 'message' => 'Data Successfully Updated !']);
    }


  
}
