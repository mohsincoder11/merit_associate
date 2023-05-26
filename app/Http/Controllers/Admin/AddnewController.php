<?php
// Add New Controller 08-05-23
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\EmpDoc;
use App\Models\Admin\Add_news;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\Location;
use App\Models\Masters\Products;
use App\Models\Masters\EmployeeRegistration;
use App\Models\Masters\Area;
use App\Models\User;
use DB;
// use App\Models\Status;
use Illuminate\Http\Request;
//use auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Masters\Status;
use Auth;

class AddnewController extends Controller
{
    public function index_add_new(request $request)
    {
          // echo json_encode($request->all());
          // exit();
   
        $add_new_all=Add_news::leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.role_name_id','=','add_news.field_executive_id')
  ->leftjoin('employee_registraions as emp2','emp2.role_name_id','=','add_news.assistant_valuer_id')
  ->leftjoin('employee_registraions as emp3','emp3.role_name_id','=','add_news.technical_manager_id')
  ->leftjoin('employee_registraions as emp4','emp4.role_name_id','=','add_news.technical_head_id')
  ->leftjoin('status','status.id','=','add_news.status')
   ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive','status.statu',
        'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
          ->orderby('add_news.id','desc')
          ->get();


          //   echo json_encode( $add_new_all);
          // exit();

//joins for dispalying data on onging tab in table
          $ongoing=Add_news::where('static_status','ongoing')
          ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
  ->leftjoin('status','status.id','=','add_news.status')
   ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive','status.statu',
        'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
          ->orderby('add_news.id','desc')
          ->get();


         



//joins for dispalying data on onging tab in table
          $completed=Add_news::where('status','completed')
          ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive',
        'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
          ->orderby('add_news.id','desc')
          ->get();


          //joins for dispalying data on onging tab in table
          $cancelled=Add_news::where('status','cancelled')
          ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive',
        'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
          ->orderby('add_news.id','desc')
          ->get();


          $pending=Add_news::where('status','pending')
          ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive',
        'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
          ->orderby('add_news.id','desc')
          ->get();

      

          $area_all=Area::join('locations','locations.id','=','areas.location_id')
          ->select('areas.*','locations.locations')
            ->orderby('areas.id','desc')
            ->get();
            // $location=Location::all();
    
            $loc=Location::orderby('id','desc')->get();
            //$data1=Area::find($area_all);
          
            $addnew_forlocation=Add_news::all();
            // dd($addnew_forlocation);

        // $emp=EmployeeRegistration::all();
        $location=Location::all();
        $associatesbank=AssociatesBank::all();
        $product=Products::all();
        $area=Area::all();

        $status = Status:: where('role_name_id',Auth::user()->role_name_id)
        ->get();
// echo json_encode($status);
// exit();
        return view('Admin.add-new-val',compact('add_new_all','addnew_forlocation','location','associatesbank','product','area','loc','area_all','ongoing','completed','cancelled','pending','status'));
       
    }


    // public function add_new()
    // {
     
    //   $area_all=Area::join('locations','locations.id','=','areas.location_id')
    //   ->select('areas.*','locations.locations')
    //     ->orderby('areas.id','desc')
    //     ->get();
    //     // $location=Location::all();

    //     $data=Location::orderby('id','desc')->get();
    //     return view('add-new-val',compact('data','area_all'));
    // }



    public function insert(request $request)
 {


  $validator = Validator::make(
    $request->all(),
    [
        'contact_no' => 'required|max:10',
        // 'valuation_id'=>['unique:users,email'],
         'valuation_id'=>'unique:add_news,valuation_id'
    ],
      [
                'contact_no.required' => 'Please enter contact number.',
                // 'email'=>'must be contain special character',
                 'valuation_id'=>'please enter unique valuation id'
            
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
              if($request->contact_no == $request->alt_cont_no)
              {
                $error = ' mobile no and alternet no should be different';
                return redirect()->back()->with(['error'=>$error]);
              }

//dd($request->all());

$image_name_array=[];
if (isset($request->image) && !empty($request->image)) 
{
    foreach ($request->image as $key => $image) {
    $extension= explode('/', mime_content_type($image))[1];
    $data = base64_decode(substr($image, strpos($image, ',') + 1));
    $imgname='ne'.rand(000,999).$key . time() . '.' .$extension;
    file_put_contents(public_path('images/New-valuation') . '/' . $imgname, $data);
    $image_name_array[]=$imgname;
}
}

       $data= new Add_news;
       $data->firstname=$request->get('firstname');
       $data->middelname=$request->get('middlename');
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
       $data->document_name=$request->get('document_name');
       $data->image= $image_name_array;
       $data->static_status = 'ongoing';
      // echo json_encode($data);
      // exit();
    
    $data->save();
  

    return back()->with(['success'=>'Data succesfully sumbmitted.']);

        
}
 
public function area(Request $request)
        {
            // dd($request->all());
        $drschem=DB::table('areas')
        // ->leftjoin('locations','locations.id','=','add_news.location_id')
        // ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->where([
            'areas.location_id'=>$request->area,
        ])
        ->select('areas.id','areas.area')
        ->get();
        // echo json_encode($drschem);
        // exit();
        return response()->json($drschem);
        }



//logic for the name of field executive, assistant valuer, technical head, tech manager
        public function emp_name(Request $request)
        {

        $drschem=DB::table('users')
         ->join('employee_registraions','employee_registraions.user_id','=','users.id')
        ->where([
            'employee_registraions.location_id'=>$request->field,
        ])
        ->select('users.id','users.name','users.role_name_id')
        ->get();

        // echo json_encode($drschem);
        // dd($request->all());
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
          $data=EmpDoc::where('addnew_id',$request->id)->delete();   
            return redirect(route('addnew'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
        } 
    

        public function edit(request $request)
        {
          $add_new_all=Add_news::leftjoin('locations','locations.id','=','add_news.location_id')
          ->leftjoin('areas','areas.id','=','add_news.area_id')
          ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
          ->leftjoin('products','products.id','=','add_news.product_id')
    ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
    ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
    ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
    ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
  ->leftjoin('status','status.id','=','add_news.status')

     ->select('add_news.*','locations.locations','associatesbanks.bankname','products.products','areas.area','emp1.name as field_executive','status.statu',
          'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
            ->orderby('add_news.id','desc')
            ->get();
 
          $location=Location::all();
          $associatesbank=AssociatesBank::all();
          $product=Products::all();
          $area=Area::all();
          $emp=EmployeeRegistration::all();

          $edit_data=Add_news::where('add_news.id',$request->id)
          // ->select('add_news.*')
          ->first();
        // echo json_encode($edit_data);
        // exit();


          $all_user = User ::
          where('id',$edit_data->field_executive_id)
          ->orwhere('id',$edit_data->assistant_valuer_id)
          ->orwhere('id',$edit_data->technical_manager_id)
          ->orwhere('id',$edit_data->technical_head_id)
          ->select('users.id','users.name','users.role_name_id')
          ->get();
  
          // echo json_encode($$all_user);
          // exit();

          $new_location = Location:: where('locations.id', $edit_data->location_id)
          ->join('areas','areas.location_id','=','locations.id')
          ->select('areas.*')
         ->get();
  
        //  echo json_encode($new_location);
        //  exit();

         $loc=Location::orderby('id','desc')->get();
         
         $status = Status:: where('role_name_id',Auth::user()->role_name_id)
        ->get();
        //  $role=DB::table('user_roles')
        //  ->select('role_name','id')
        //  ->orderby('order_no','asc')
        //  ->get();
  
          // echo json_encode($status);
          // exit();
        return view('Admin.edit_new',['location'=>$location,'associatesbank'=>$associatesbank,'product'=>$product,'area'=>$area,'add_new_all'=>$add_new_all,'emp'=>$emp,'new_location'=>$new_location,'all_user'=>$all_user,'edit_data'=>$edit_data,'loc'=>$loc,'status'=>$status]);
        }

        
   public function update(Request $request)
  {
 $data =Add_news::find($request->id); //name to diff rakha karo

     $image_name_array=[]; //yaha blank array define kiya
     if($request->old_image){ //yah check kiya old images hi kya
     $image_name_array=$request->old_image;//agar hai to black array me use push karege

     }
     if (isset($request->image)  && !empty($request->image) 
     && count($request->image)>0) { //new file rahegi tab ye code chalegea
               foreach ($request->image as $key => $image) {
         $extension= explode('/', mime_content_type($image))[1];
         $base_encode = base64_decode(substr($image, strpos($image, ',') + 1));
          //yaha bhi $data tha override nahi hoga kya wo
         $imgname='nv'.rand(000,999).$key . time() . '.' .$extension;
         file_put_contents(public_path('images/New-valuation') . '/' . $imgname, $base_encode);
         array_push($image_name_array,$imgname); //agar new images fle upload karege tab usi array me new file push hogi, so wo new file + old files aise hoga
     }
    }
   
    $data->image = $image_name_array;
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
    $data->document_name=$request->get('document_name');
    // echo json_encode($data);
    // exit();


     $data->save();
    // dd($data);


 return redirect()->back()->with(['success'=>'Data succesfully updated.']);

  }

  public function update_new(Request $request)
  {
 $data =Add_news::find($request->id); //name to diff rakha karo

 $image_name_array=[]; //yaha blank array define kiya
     if($request->old_image){ //yah check kiya old images hi kya
     $image_name_array=$request->old_image;//agar hai to black array me use push karege

     }
     if (isset($request->image)  && !empty($request->image) 
     && count($request->image)>0) { //new file rahegi tab ye code chalegea
               foreach ($request->image as $key => $image) {
         $extension= explode('/', mime_content_type($image))[1];
         $base_encode = base64_decode(substr($image, strpos($image, ',') + 1));
          //yaha bhi $data tha override nahi hoga kya wo
         $imgname='nv'.rand(000,999).$key . time() . '.' .$extension;
         file_put_contents(public_path('images/New-valuation') . '/' . $imgname, $base_encode);
         array_push($image_name_array,$imgname); //agar new images fle upload karege tab usi array me new file push hogi, so wo new file + old files aise hoga
     }
    }

    $data->image = $image_name_array;
  
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
    $data->document_name=$request->get('document_name');
    $data->static_status = 'ongoing';
    // echo json_encode($data);
    // exit();

     $data->save();

 return redirect()->route('addnew')->with(['success'=>'Data succesfully updated.']);

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
  // ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  // ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  // ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   
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

// echo json_encode($onview);
// exit();
  return response()->json(['onview'=>$onview,'value_adddoc'=>$value_adddoc]);//shedule script me jo var read kiya hai sme ressult.shedule hai

}


// function for displaying data on Completed model

public function  model_completed(Request $request)
{

  $onview=DB::table('add_news')
  ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  // ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  // ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  // ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   
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


// function for displaying data on cancelled model

public function  model_cancelled(Request $request)
{

  $onview=DB::table('add_news')
  ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  // ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  // ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  // ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   
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





// function for displaying data on pending model

public function  model_pending(Request $request)
{

  $onview=DB::table('add_news')
  ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.id','=','add_news.area_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->leftjoin('products','products.id','=','add_news.product_id')
  ->leftjoin('employee_registraions as emp1','emp1.id','=','add_news.field_executive_id')
  // ->leftjoin('employee_registraions as emp2','emp2.id','=','add_news.assistant_valuer_id')
  // ->leftjoin('employee_registraions as emp3','emp3.id','=','add_news.technical_manager_id')
  // ->leftjoin('employee_registraions as emp4','emp4.id','=','add_news.technical_head_id')
   
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
       
function get_area_by_id(Request $request)
    {
        $data = Area::where('location_id', $request->id)->orderby('area', 'asc')->get();
        return response()->json($data);
        // echo json_encode($data);
        // exit();
    }

}


   
    
  




