<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\AssociatesBank;
use App\Http\Controllers\Masters\AddAssociateBankController;

class AddAssociateBankController extends Controller
{



  public function index_table()
  {
    return view('Masters.tabledesign');
  }

    public function index_associate_bank()
    {
        $data=AssociatesBank::orderby('id','desc')->get();
        return view('add_associates_bank',compact('data'));
    }



    public function insert_associate_bank(request $request)
    {

      $validated=$request->validate([
        //'contact' => 'required',
        'mobile' => 'required|min:10|max:10',
    ]);

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
    return view('edit_associates_bank',['edit_data'=>$data1,'data'=>$data]);
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

}
