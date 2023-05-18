<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\EmployeeRegistration;
use  App\Models\Location;
use  App\Models\Area;
use App\Models\Setting\UserRole;

class EmployeeRegistraionController extends Controller
{
    public function index_emp_registraion()
    {
        $emp=EmployeeRegistration::leftjoin('locations','locations.id','=','employee_registraions.location_id')
        ->leftjoin('areas','areas.id','=','employee_registraions.area_id')
        ->leftjoin('user_roles','user_roles.id','=','employee_registraions.role_name_id')
        ->select('employee_registraions.*','locations.locations','areas.area')
          ->orderby('employee_registraions.id','desc')
          ->get();
        $location=Location::all();
        $areas=Area::all();
        $role1=UserRole::all();
        echo_json_encode($role1);
        exit();



        return view ('employee_registration',compact('location','emp','areas','role1'));
    }


    public function insert_emp_regist(request $request)
    {
    //      $request->validate([
    //     'contact' => 'required',
    //     'mobile' => 'required|min:10|max:10',
    // ]);
 

       $data= new EmployeeRegistration;
       $data->contact=$request->get('contact');
       $data->mobile=$request->get('mobile');
       $data->bankname=$request->get('bankname');
       $data->ifsc_code=$request->get('ifsc_code');
       $data->account_no=$request->get('account_no');
       $data->location_id=$request->get('location_id');
       $data->area_id=$request->get('area_id');
        if ($request->hasFile('adhar')) {
            $file = $request->file('adhar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/adhrcards'), $filename);
            $data->adhar = $filename;

        }      
       if ($request->hasFile('pan')) {
        $file = $request->file('pan');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/pancards'), $filename);
        $data->pan= $filename;
    }

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/photos'), $filename);
        $data->photo= $filename;
    }

    if ($request->hasFile('other')) {
        $file = $request->file('other');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/other'), $filename);
        $data->other= $filename;
    }

       $data->save();


      



    
       return redirect(route('empregistration'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);
    }


    public function delete_emp_regist($id)  
    {  
      $data=EmployeeRegistration::find($id);  
        $data->delete();  
        return redirect(route('empregistration'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit_emp_registration(request $request)
    {
   // echo json_encode($request->all());
      $data1=EmployeeRegistration::find($request->id);
      $emp=EmployeeRegistration::leftjoin('locations','locations.id','=','employee_registraions.location_id')
      ->leftjoin('areas','areas.id','=','employee_registraions.area_id')
      ->select('employee_registraions.*','locations.locations','areas.area')
        ->orderby('employee_registraions.id','desc')
        ->get();
      $location=Location::all();
      $area=Area::all();
      // echo json_encode($data1);
      // exit();
    return view('edit_emp_regist',['edit_data'=>$data1,'emp'=>$emp,'location'=>$location,'area'=>$area]);
    }

    public function update_emp_regist(Request $request)
  {
    //dd($request->all());
 $data =EmployeeRegistration::find($request->id);
 
 
     $data->role_name_id=$request->get('role_name_id');
     $data->name=$request->get('name');
     $data->contact=$request->get('contact');
     $data->mobile=$request->get('mobile');
     $data->email=$request->get('email');
     $data->bankname=$request->get('bankname');
     $data->ifsc_code=$request->get('ifsc_code');
     $data->account_no=$request->get('account_no');
     $data->location_id=$request->get('location_id');
     $data->area_id=$request->get('area_id');
  
      if ($request->hasFile('adhar')) {
          $file = $request->file('adhar');
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path('images/adhrcards'), $filename);
          $data->adhar = $filename;

      }
    
     if ($request->hasFile('pan')) {
      $file = $request->file('pan');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $file->move(public_path('images/pancards'), $filename);
      $data->pan= $filename;
  }

  if ($request->hasFile('photo')) {
    $file = $request->file('photo');
    $filename = time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('images/photos'), $filename);
    $data->photo= $filename;
}

if ($request->hasFile('other')) {
    $file = $request->file('other');
    $filename = time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('images/other'), $filename);
    $data->photo= $filename;
}


 $data->save();
 return redirect(route('empregistration'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}



    


}
