<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index_status()
    {
        $status_all=Status::orderby('id','desc')->get();
        return view('status',compact('status_all'));
    }

    public function insert_status(request $request)
    {
       $store= new Status;
       $store->role=$request->get('role');
       $store->statu=$request->get('statu');
       $store->save();
       return redirect(route('status'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete(Request $request)  
    {  
      $data=Status::where('id',$request->id)->delete();   
        return redirect(route('status'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=Status::find($request->id);
      $status_all=Status::orderby('id','desc')->get();
      // echo json_encode($dstatus_allata1);
      // exit();
    return view('edit_status',['edit_data'=>$data1,'status_all'=>$status_all]);
    }

    public function update(Request $request)
  {
    //dd($request->all());
 $data =Status::find($request->id);
 $data->role=$request->get('role'); 
 $data->statu=$request->get('statu');
 $data->save();
 return redirect(route('status'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}



}
