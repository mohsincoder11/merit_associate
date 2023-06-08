<?php

namespace App\Http\Controllers\Masters;
use App\Http\Controllers\Controller;
use App\Models\Admin\Add_news;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\Masters\AssociatesBank;

class AddAssociateBankController extends Controller
{

  public function index_table()
  {
    return view('Masters.tabledesign');
  }
    public function index_associate_bank()
    {
        $data=AssociatesBank::orderby('id','desc')->get();
        return view('Masters.add_associates_bank',compact('data'));
    }

    public function insert_associate_bank(request $request)
    {

    //   $request->validate([
    //     'contact' => 'required',
    //     'mobile' => 'required|min:10|max:10|unique',
    //     'email'=>'unique',
    //     'userid'=>'unique',
    //     'password'=>'unique',
       
        
    // ]);


    // $validator = Validator::make(
    //   $request->all(),
    //   [
    //       'contact' => ['required'],
    //       'mobile' => ['required'|'min:10'|'max:10'],
    //       'email' => ['required'|'unique'],
    //       'userid' => ['required'|'unique'],
    //       'password' => ['required'|'unique'],

    //   ],
    //               [
    //               'contact.required' => ' please enter contact',
    //               'mobile.required' => 'number must be widthin 10 digits..',
    //               'email.required' => 'email must be unique.',
    //               'userid.required' => 'userid must be unique.',
    //               'password.required' => 'password should content special character.',

    //               ]
    //           ); 
  
    //           if ($validator->fails()) {
    //               $error = '';
    //               $messages = $validator->messages();
    //               foreach ($messages->all() as $message) {
    //                   $error .= $message . "<br>";
    //               }
    //               return redirect()->back()->with(['error'=>$error]);
              
    //               }

       $data= new AssociatesBank;
       $data->bankname=$request->get('bankname');
       $data->contactperson=$request->get('contactperson');
       $data->mobile=$request->get('mobile');
       $data->email=$request->get('email');
       $data->bankbranch=$request->get('bankbranch');
       $data->bankaddress=$request->get('bankaddress');
       $data->gst_no=$request->get('gst_no');
       $data->city=$request->get('city');
       $data->state=$request->get('state');
       $data->pincode=$request->get('pincode');
       $data->userid=$request->get('userid');
       $data->password=Hash::make($request->password);
       $data->save();
       return redirect()->back()->with(['success' => true, 'message' => 'Data Successfully Submitted!']);
    }

    public function delete_assocaite_bank($id)  
    {  
      $data=AssociatesBank::find($id);  
        $data->delete();  
        return redirect()->back()->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit_assocaite_bank(request $request)
    {
   // echo json_encode($request->all());
      $data1=AssociatesBank::find($request->id);
      $data=AssociatesBank::orderby('id','desc')->get();
      // echo json_encode($data1);
      // exit();
    return view('Masters.edit_associates_bank',['edit_data'=>$data1,'data'=>$data]);
    }


    public function update_associate_bank(Request $request)
    {
      //dd($request->all());
   $data =AssociatesBank::find($request->id);
   //echo json_encode($data);
       // exit();
     
       $data->bankname=$request->get('bankname');
       $data->contactperson=$request->get('contactperson');
       $data->mobile=$request->get('mobile');
       $data->email=$request->get('email');
       $data->bankbranch=$request->get('bankbranch');
       $data->bankaddress=$request->get('bankaddress');
       $data->gst_no=$request->get('gst_no');
       $data->city=$request->get('city');
       $data->state=$request->get('state');
       $data->pincode=$request->get('pincode');
       $data->userid=$request->get('userid');
       $data->password=Hash::make($request->password);
   $data->save();
   return redirect(route('associatesbank'))->with(['success' => true, 'message' => 'Data Updated Successfully ']);
  }


  public function bank_dashboard()
    {

      $bank_data = Add_news :: where('add_news.associatesbanks_id',Auth::guard('associatesbanks')->user()->id)
      ->leftjoin('locations','locations.id','=','add_news.location_id')
      ->leftjoin('areas','areas.id','=','add_news.area_id')
      ->leftjoin('products','products.id','=','add_news.product_id')
      ->leftjoin('employee_registraions as emp1','emp1.user_id','=','add_news.field_executive_id')
      ->leftjoin('employee_registraions as emp2','emp2.user_id','=','add_news.assistant_valuer_id')
      ->leftjoin('employee_registraions as emp3','emp3.user_id','=','add_news.technical_manager_id')
      ->leftjoin('employee_registraions as emp4','emp4.user_id','=','add_news.technical_head_id')
      ->leftjoin('status','status.id','=','add_news.status')
      ->select('add_news.*','locations.locations','products.products','areas.area','emp1.name as field_executive','status.statu',
      'emp2.name as  assistant_valuer','emp3.name as technical_manager','emp4.name as technical_head')
      ->get();

      //echo json_encode($bank_data);
 //exit();


        return view('Bank_panel.bank_dashboard',compact('bank_data'));
    }

   

}
