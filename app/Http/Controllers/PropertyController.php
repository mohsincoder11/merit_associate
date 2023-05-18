<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    public function index_property()
    {
        $data=Property::orderby('id','desc')->get();
        return view('property',compact('data'));
    }

    public function insert_property(request $request)
    {
    //    echo json_encode($request->all());
    //    exit();

    //   $validated=$request->validate([
    //     'property' => 'required'|'unique',
        
    // ]);

       $data= new Property;
       $data->property=$request->get('property');
       $data->save();
       return redirect()->back()->with(['success' => true, 'message' => 'Data Successfully Submitted!']);
    }

    public function delete_property($id)  
    {  
      $data=Property::find($id);  
        $data->delete();  
        return redirect()->back()->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit_property(request $request)
    {
   // echo json_encode($request->all());
      $data1=Property::find($request->id);
      $data=Property::orderby('id','desc')->get();
      // echo json_encode($data1);
      // exit();
    return view('edit_property',['edit_data'=>$data1,'data'=>$data]);
    }

    public function update_property(Request $request)
    {
      //dd($request->all());
   $data =Property::find($request->id);
   //echo json_encode($data);
       // exit();
       $data->property=$request->get('property');
      
   $data->save();
   return redirect(route('property'))->with(['success' => true, 'message' => 'Data Updated Successfully ']);
  }



}
