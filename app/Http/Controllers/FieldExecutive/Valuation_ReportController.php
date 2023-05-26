<?php

namespace App\Http\Controllers\FieldExecutive;

use App\Http\Controllers\Controller;
use App\Models\FieldExecutive\New_Valuer;
use Illuminate\Http\Request;
use App\Models\Admin\EmpDoc;
use App\Models\Admin\Add_news;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\Location;
use App\Models\Masters\Products;
use App\Models\Masters\EmployeeRegistration;
use App\Models\Masters\Area;
use DB;
use auth;

class Valuation_ReportController extends Controller
{


    public function index_model(request $request)
   {
    $add_new = Add_news ::
      when(Auth::user()->role_name_id!=26, function ($q)  { 
        //this condition will apply when user is not admin. admin has role 26
        return $q->where('field_executive_id', Auth::id());
    })
    ->leftjoin('new_valuer','new_valuer.valuation_id','=','add_news.valuation_id')

    ->leftjoin('locations','locations.id','=','add_news.location_id')
    ->leftjoin('status','status.id','=','add_news.status')
    ->select('add_news.*','locations.locations','status.statu','new_valuer.id as new_valuer_id')
    ->get();

         //echo json_encode($add_new[1]);
       //  exit();
          $area_all=Area::join('locations','locations.id','=','areas.location_id')
          ->select('areas.*','locations.locations')
            ->orderby('areas.id','desc')
            ->get();
            // $location=Location::all();
    
            $data=Location::orderby('id','desc')->get();
           // $data1=Area::find($area_all);

        // $emp=EmployeeRegistration::all();
        $location=Location::all();
        $associatesbank=AssociatesBank::all();
        $product=Products::all();
        $area=Area::all();
        return view('FieldExecutive.valuation_report',compact('location','associatesbank','product','area','data','area_all','add_new'));
       
    }

    public function insert(request $request)
    {
// dd($request->all());
        $data= new Add_news;
       $data->firstname=$request->get('firstname');
       $data->middelname=$request->get('middelname');
       $data->lastname=$request->get('lastname');
       $data->valuation_id=$request->get('valuation_id');
       $data->associatesbanks_id=$request->get('associatesbanks_id');
       $data->product_id=$request->get('product_id');
       $data->location_id=$request->get('location_id');
       $data->area_id=$request->get('area_id');
       $data->field_executive_id=$request->get('field_executive_id');
       $data->assistant_valuer_id=$request->get('assistant_valuer_id');
       $data->technical_manager_id=$request->get('technical_manager_id');
       $data->technical_head_id=$request->get('technical_head_id');
       $data->contact_no=$request->get('contact_no');
       $data->alt_cont_no=$request->get('alt_cont_no');
       $data->address=$request->get('address');
       $data->city=$request->get('city');
       $data->state=$request->get('state');
       $data->pincode=$request->get('pincode');
       $data->longitude=$request->get('longitude');
       $data->latitute=$request->get('latitute');
       $data->tags=$request->get('tags');
       $data->date=$request->get('date');
       $data->comment=$request->get('comment');
       $data->status=$request->get('status');
      
    //    $data->area_id=implode(',',$request->get('area_id'));
    $data->save();
  
    
  
      $empdocuments=new EmpDoc;
$i=0;
  if($request->hasfile('upd'))
  {
     foreach($request->file('upd') as $key => $file)
     {
      $file = $file;
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $file->move(public_path('images/upd'), $filename);
      $empdocuments->upd= $filename;
      $empdocuments->docname=$request->docname[$i];
    $empdocuments->doc_id=$data->id;
    $empdocuments->upd=$request->upd[$i];
    $empdocuments->save();
    $i++;

     }
  }

    // e($data);
    // exit();
 return redirect(route('addnew'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);       
}




        public function area(Request $request)
        {
            // dd($request->all());
        $drschem=DB::table('areas')
        ->where([
            'areas.location_id'=>$request->area,
        ])
        ->select('areas.id','areas.area')
        ->get();
        return response()->json($drschem);
        }





//logic for the name of field executive, assistant valuer, technical head, tech manager
        public function emp_name(Request $request)
        {
        $drschem=DB::table('employee_registraions')
        // ->leftjoin('locations','locations.id','=','add_news.location_id')
        // ->leftjoin('areas','areas.id','=','add_news.area_id')
        
        ->where([
            'employee_registraions.area_id'=>$request->field,
           
        ])

        ->select('employee_registraions.name','employee_registraions.id','employee_registraions.role')
        ->get();
        //dd($request->all());
        return response()->json($drschem);
        }





//insert area into area table
        public function insert_area(request $request)
        {
           $store= new Area;
           $store->location_id=$request->get('location_id');
           $store->area=$request->get('area');
           $store->save();
           return redirect(route('addnew'));
    
        }





        public function delete(Request $request)  
        {  
          $data=Add_news::where('id',$request->id)->delete();   
          $data=EmpDoc::where('doc_id',$request->id)->delete();   
            return redirect(route('addnew'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
        } 
    




        public function edit(request $request)
        {
          $add_new_all=Add_news::leftjoin('locations','locations.id','=','add_news.location_id')
          ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
          ->leftjoin('products','products.id','=','add_news.product_id')
    ->leftjoin('employee_registraions','employee_registraions.id','=','add_news.field_executive_id')
          ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','employee_registraions.name')
            ->orderby('add_news.id','desc')
            ->get();
       // echo json_encode($request->all());
          $data1=Add_news::find($request->id);
          $data=Add_news::orderby('id','desc')->get();
          $location=Location::all();
          $associatesbank=AssociatesBank::all();
          $product=Products::all();
          $area=Area::all();
          // echo json_encode($data1);
          // exit();
        return view('Admin.edit_add_new',['edit_data'=>$data1,'data'=>$data,'location'=>$location,'associatesbank'=>$associatesbank,'product'=>$product,'area'=>$area,'add_new_all'=>$add_new_all]);
        }




        
        public function update(Request $request)
        {
          //dd($request->all());
      $data =Add_news::find($request->id);
      //echo json_encode($data);
          // exit();
          $data= new Add_news;
          $data->firstname=$request->get('firstname');
          $data->middelname=$request->get('middelname');
          $data->lastname=$request->get('lastname');
          $data->valuation_id=$request->get('valuation_id');
          $data->associatesbanks_id=$request->get('associatesbanks_id');
          $data->product_id=$request->get('product_id');
          $data->location_id=$request->get('location_id');
          $data->area_id=$request->get('area_id');
          $data->field_executive_id=$request->get('field_executive_id');
          $data->assistant_valuer_id=$request->get('assistant_valuer_id');
          $data->technical_manager_id=$request->get('technical_manager_id');
          $data->technical_head_id=$request->get('technical_head_id');
          
          $data->contact_no=$request->get('contact_no');
          $data->alt_cont_no=$request->get('alt_cont_no');
          $data->address=$request->get('address');
          $data->city=$request->get('city');
          $data->state=$request->get('state');
          $data->pincode=$request->get('pincode');
          $data->longitude=$request->get('longitude');
          $data->latitute=$request->get('latitute');
          $data->tags=$request->get('tags');
          $data->date=$request->get('date');
          $data->comment=$request->get('comment');
          $data->status=$request->get('status');
        //    $data->area_id=implode(',',$request->get('area_id'));
        $data->save();

        

          $empdocuments=new EmpDoc;
      $i=0;
      if($request->hasfile('upd'))
      {
        foreach($request->file('upd') as $key => $file)
        {
          $file = $file;
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path('images/upd'), $filename);
          $empdocuments->upd= $filename;
          $empdocuments->doc_id=$data->id;
        $empdocuments->upd=$request->upd[$i];
        $empdocuments->save();
        $i++;

        }
      }
      return redirect(route('addnew'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
    }




//modal pe data lane ke liye  humne ajax call kiya 
public function  model_ongoing(Request $request)
{

  $onview=DB::table('add_news')
        ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
        ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')

   
  ->where([
      'add_news.id'=>$request->id
  ])
  ->select('add_news.*','locations.locations','locations.id','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive')
  ->first();//agar hume sirf ek hi value dikhani hai to first
  
  $value_adddoc=DB::table('addnewdocuments')
  ->where([
    'addnewdocuments.addnew_id'=>$request->id
])
->orderby('addnewdocuments.id','asc')
->get();
  return response()->json(['onview'=>$onview,'value_adddoc'=>$value_adddoc]);//shedule script me jo var read kiya hai sme ressult.shedule hai

}

     
}


