<?php

namespace App\Http\Controllers\Masters;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Masters\EmployeeRegistration;
use  App\Models\Masters\Location;
use Hash;
use Illuminate\Support\Facades\Validator;
use  App\Models\Masters\Area;
use App\Models\Setting\UserRole;
use App\Models\Login\User;
use App\Models\Setting\User_Permission;

class EmployeeRegistraionController extends Controller
{
    public function index_emp_registraion()
    {
        $emp=User::join('employee_registraions','employee_registraions.user_id','=','users.id')
        ->leftjoin('locations','locations.id','=','employee_registraions.location_id')
        ->leftjoin('areas','areas.id','=','employee_registraions.area_id')
        ->leftjoin('user_roles','user_roles.id','=','employee_registraions.role_name_id')
        ->select('employee_registraions.*','locations.locations','areas.area','user_roles.role_name')
          ->orderby('employee_registraions.id','desc')
          ->get();
        $location=Location::all();
        $areas=Area::all();
        $role1=UserRole::orderby('order_no','asc')
        ->get();
        // echo json_encode($emp);
        // exit();
        return view('Masters.employee_registration',compact('location','emp','areas','role1'));
    }


    public function insert_emp_regist(request $request)
    {
      
      $validator = Validator::make(
        $request->all(),
        [
            'mobile' => ['required|max:10'],
            'email'=>['unique:users,email'],
            'account_no'=>['unique:employee_registraions,account_no']
        ],
          [
                    'mobile.required' => 'Please enter documents.',
                    'email'=>'must be contain special character',
                    'account_no'=>'please enter unique account number'
                
                    ]
                ); 

                if ($validator->fails()) {
                  $error = '';
                  $messages = $validator->messages();
                  foreach ($messages->all() as $message) {
                      $error .= $message . "<br>";
                  }
                  return redirect()->back()->with(['error'=>$error]);
              
                  }
 
      //here i first entry should be done in the user table. because we will user user table for the login functinality and all the user will be in this table.
      $user=new User;
      $user->role_name_id=$request->get('role_name_id');
      $user->name=$request->get('name');
      $user->email=$request->get('email');
      $user->user_id=$request->get('user_id');
      $user->user_name=$request->get('user_name');
      $user->password=Hash::make($request->password);
      $user->save();

       //in this table we will store extra information of user
       $data= new EmployeeRegistration;
       $data->role_name_id=$request->get('role_name_id');
       $data->name=$request->get('name');
       $data->contact=$request->get('contact');
      //  $data->mobile=$request->get('mobile');
       $data->email=$request->get('email');
       $data->bankname=$request->get('bankname');
       $data->ifsc_code=$request->get('ifsc_code');
       $data->account_no=$request->get('account_no');
       $data->location_id=$request->get('location_id');
       $data->area_id=$request->get('area_id');
       $data->user_id=$user->id;
       $data->user_name=$request->get('user_name');
       $data->password=Hash::make($request->password);

       
    
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

 


 $user_permission=new User_Permission();
 $user_permission->user_id=$user->id;
 $user_permission->role_id=[$request->get('role_name_id')];
 $user_permission->save();
//  echo json_encode($user_permission);
//  exit();


    
       return redirect(route('empregistration'))->with(['delete'=>'Data successfully submitted.']);
    }


    public function delete_emp_regist($id)  
    {  
      $data=EmployeeRegistration::find($id);  
        $data->delete();  
        return redirect(route('empregistration'))->with(['success'=>'Data deleted successfully.']); 
    } 

    public function edit_emp_registration(request $request)
    {
      $data1=User::join('employee_registraions','employee_registraions.user_id','=','users.id')
      ->where('users.id',$request->id)->select('users.user_id as user_unique_id','employee_registraions.*')->first();
     

      $emp=User::join('employee_registraions','employee_registraions.user_id','=','users.id')
      ->leftjoin('locations','locations.id','=','employee_registraions.location_id')
      ->leftjoin('areas','areas.id','=','employee_registraions.area_id')
      ->leftjoin('user_roles','user_roles.id','=','employee_registraions.role_name_id')
      ->select('employee_registraions.*','locations.locations','areas.area','user_roles.role_name')
        ->orderby('employee_registraions.id','desc')
        ->get();
      $location=Location::all();
      $areas=Area::all();
      $role1=UserRole::orderby('order_no','asc')
      ->get();
      // echo json_encode($data1);
      // exit();
    return view('Masters.edit_emp_regist',['edit_data'=>$data1,'emp'=>$emp,'location'=>$location,'area'=>$areas, 'role1' => $role1]);
    }

    public function update_emp_regist(Request $request)
  {
    //dd($request->all());
    $user=User::find($request->id);
$user->role_name_id=$request->get('role_name_id');
$user->name=$request->get('name');
$user->email=$request->get('email');
//$user->user_id=$request->get('user_id');
$user->user_name=$request->get('user_name');
$user->password=Hash::make($request->password);
$user->save();

 $data =EmployeeRegistration::where('user_id',$request->id)->first();
 
 $data->role_name_id=$request->get('role_name_id');
 $data->name=$request->get('name');
 $data->contact=$request->get('contact');
//  $data->mobile=$request->get('mobile');
 $data->email=$request->get('email');
 $data->bankname=$request->get('bankname');
 $data->ifsc_code=$request->get('ifsc_code');
 $data->account_no=$request->get('account_no');
 $data->location_id=$request->get('location_id');
 $data->area_id=$request->get('area_id');
 //$data->user_id=$request->get('user_id');
 $data->user_name=$request->get('user_name');
 $data->password=Hash::make($request->password);

 

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



 return redirect(route('empregistration'))->with(['success'=>'Data successfully updated.']);
}


function get_area_by_id(Request $request)
    {
      // dd($request->all());
        $data = Area::where('location_id', $request->id)->orderby('area', 'asc')->get();
        return response()->json($data);
        // echo json_encode($data);
        // exit();
    }
    


}
