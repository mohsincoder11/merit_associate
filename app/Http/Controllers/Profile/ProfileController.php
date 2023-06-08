<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Masters\EmployeeRegistration;
use App\Models\User;
use Hash;

class ProfileController extends Controller
{
   public function profile()
   {
    $data = EmployeeRegistration::where('user_id',auth()->user()->id)->first();
    return view('Profile.profile',compact('data'));
   }

   public function edit_profile(Request $request)
   {
    $data = EmployeeRegistration::where('user_id',auth()->user()->id)->first();

   // dd($request->all());
    if ($request->hasFile('photo')) { 
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/photos'), $filename);
    $data->photo = $filename;

    }

    $data->user_name=$request->get('user_name');
    $data->password=Hash::make($request->password);

    // echo json_encode($data);
    // exit();

    $data->save();



    $user= User :: where('id',auth()->user()->id)->first();
    $user->user_name=$data->user_name;
    $user->password=Hash::make($request->password);

//  echo json_encode($user);
//     exit();

   
    $user->save();





return redirect()->back();
   }
}
