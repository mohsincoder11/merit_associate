<?php

namespace App\Http\Controllers\Masters;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Masters\Status;
use App\Models\Setting\UserRole;

class StatusController extends Controller
{
    public function index_status()
    {
      // dd(1);
        $status_all=Status::join('user_roles','user_roles.id','=','status.role_name_id')
      ->select('status.*','user_roles.role_name')
        ->orderby('status.id','desc')
        ->get();
       
       
      $all_name=UserRole::orderby('order_no','asc')
      ->get();
        // echo json_encode($all_name);
        // exit();

        return view('Masters.status',compact('status_all','all_name'));
    }

    public function insert_status(request $request)
    {
       $store= new Status;
       $store->role_name_id=$request->get('role_name_id');
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
      $status_all=Status::join('user_roles','user_roles.id','=','status.role_name_id')
      ->select('status.*','user_roles.role_name')
        ->orderby('status.id','desc')
        ->get();
      // echo json_encode($dstatus_allata1);
      // exit();
    return view('Masters.edit_status',['edit_data'=>$data1,'status_all'=>$status_all]);
    }

    public function update(Request $request)
  {
    //dd($request->all());
 $data =Status::find($request->id);
 $data->role_name_id=$request->get('role_name_id'); 
 $data->statu=$request->get('statu');
 $data->save();
 return redirect(route('status'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}



}
