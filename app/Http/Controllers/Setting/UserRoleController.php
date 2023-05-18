<?php

namespace App\Http\Controllers\Setting;
use App\Models\Setting\UserRole;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Setting\User_Permission;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function index()
    {
       $user_permission = User_Permission :: 
        join('users','users.id','=','user_permission.user_id')
      //  ->join('user_roles','user_roles.id','=','user_permission.role_id')
       ->select('user_permission.*','users.name')
       ->get();
  // echo json_encode($user_permission);
  //      exit();
        $all_user=User::all();
       $user_role_all=UserRole::orderby('order_no','asc')
       ->select('user_roles.*')
       ->get();
        return view('Setting.user_role',compact('all_user','user_role_all','user_permission'));
    }

    public function insert(request $request)
    {
      //dd($request->all());
  $store= User_Permission::updateorcreate(
  [ 
   'user_id'=>$request->get('user_name'),
  ],
  [
  'user_id'=>$request->get('user_name'),
  'role_id'=>$request->get('role_id'),
  ]
  );



      //  $store= new User_Permission();
      //  $store->user_id=$request->get('user_name');
      //  $store->role_id=$request->get('role_id');
      //  $store->save();

      //  echo json_encode($store);
      //  exit();
       return redirect(route('user_role'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete(Request $request)  
    {  
      $data=User_Permission::where('id',$request->id)->delete();   
        return redirect(route('user_role'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=User_Permission::find($request->id);
      $all_user=User::all();
       $user_role_all=UserRole::orderby('order_no','asc')
       ->select('user_roles.*')
       ->get();

     
    //   $ass_data=AssociatesBank::all();
      // echo json_encode($data1);
      // exit();
    return view('Setting.edit_user_role',['edit_data'=>$data1,'user_role_all'=>$user_role_all,'all_user'=>$all_user]);
    }

    public function update(Request $request)
    {
      //dd($request->all());
   $store =User_Permission::find($request->id);
   //echo json_encode($data);
       // exit();
       $store->user_id=$request->get('user_name');
       $store->role_id=$request->get('role_id');
       $store->save();

   return redirect(route('user_role'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
  }

}
