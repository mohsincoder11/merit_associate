<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Route;

class RolesAndPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $admin=['addnew','addnewinsert','addnewdelete','addnewedit','addnewupdate','addnewarea','ongoingmodel','ongoingmodelvalue'];
       $field_executive_route=['FE.new','FE.create','FE.ongoingmodel','FE.delete','FE.edit','FE.update','FE.ongoingmodel','FE.ongoingmodelvalue'];
       $assistant_valuer=['Av.new','AV.ongoingmodel','assist_edit','assit_update'];
       $tech_manager=['technicalmanager_report','technicalmanager_edit','tech_manager_update'];
       $tech_head=['technicalhead_report','technicalhead_edit','tech_head_update'];

      if(auth()->check()){

        $user_data=Auth::user();
        // echo json_encode($user_data);
        // exit();
        
        $current_route=Route::currentRouteName();
        // dd($current_route);
      if($user_data->role_name_id==2 && in_array($current_route,$field_executive_route)){
        // if(in_array($current_route,$field_executive_route)){
            return $next($request);
        }
        else if($user_data->role_name_id==3 && in_array($current_route,$admin)){

            return $next($request);
        }
         else if($user_data->role_name_id==4 && in_array($current_route,$assistant_valuer)){
         
            return $next($request);
        }
       else if($user_data->role_name_id==5 && in_array($current_route,$tech_manager)){
            return $next($request);
        }
       else if($user_data->role_name_id==6 && in_array($current_route,$tech_head)){
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }








        
      }
    //    else{
    //     return redirect()->route('login');
    // }
     
    }
    }

