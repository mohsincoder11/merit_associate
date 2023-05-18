<?php

namespace App\Http\Controllers\Login;
use App\Models\Login\Login;
use Hash;
use Auth;
use App\Models\Setting\UserRole;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }



    public function dashboard()
    {
        return view('Login.Dashboard');
    }



    public function insert(Request $request)
    {
        $store= new Login;
       $store->user_id=$request->get('user_id');
    //    $store->email=$request->get('email');
       $store->password=Hash::make($request->password);
       $store->save();
       return redirect(route('login'));
    }

    public function authenticate(Request $request)
    {
        //User::find(10)->update(['password'=>Hash::make(12345)]);
        // dd($request->all());
        if (Auth::attempt(['user_name' =>$request->user_name, 'password' => $request->password]))
        {
            

        //     echo json_encode(Auth::user());
         $user_role=UserRole::find(Auth::user()->role_name_id);
        // echo json_encode($user_role);

        //     exit();

            if($user_role->role_name=="Operator")
            {
               
                return redirect()->route('addnew');
            }

                else if($user_role->role_name=="Field Executive" )
                {
        
                    return redirect()->route('FE.ongoingmodel');
                }
            
                else if($user_role->role_name=="Assistant Valuer" )
                 {
                 
                    return redirect()->route('AV.ongoingmodel');
                }
                
               else if($user_role->role_name=="Technical Manager" )
               {
                return redirect()->route('technicalmanager_report');
                }
                
               else if($user_role->role_name=="Technical Head" )
               {
                return redirect()->route('technicalhead_report');
               }
          
            return redirect()->route('dashboard');

        }
            else
            {
                return redirect()->route('login');

            }
            
        
    }



    // public function authenticate(Request $request)
    // {
    //     // dd($request->all());
    //     if (Auth::attempt(['user_name' =>$request->user_name, 'password' => $request->password, ]))
    //     {
            
          

    //     }   
    //     else
    //     {

    //         return redirect()->route('login');
    //     }
    // }

    public function log_out()
    {
       Auth::logout();
      
      return redirect()->route('login');
    }

}

