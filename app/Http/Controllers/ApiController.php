<?php

namespace App\Http\Controllers;

use App\Models\Admin\Add_news;
use App\Models\Login\User;
use Illuminate\Http\Request;
use App\Models\Masters\EmployeeRegistration;
class ApiController extends Controller
{
    public function send_mobile_verify_otp(Request $request)
    {
        $user = EmployeeRegistration::where('role_name_id',27)
        ->where('contact', '=', $request->contact)
        ->select('employee_registraions.contact')
        ->first(); //check already exist 


        // echo json_encode($user);
        // exit();
        if (isset($user) && $user != null) {
         $otp = rand(1000, 9999);
       // $name = 'Sir/Mam';
        $msg = 'Dear User, Your OTP is ' . $otp . '. Use this OTP for login to your MKDINE application for booking a table.';
        $msg = urlencode($msg);
        
        $to = $user;
      
        $data1 = "uname=habitm1&pwd=habitm1&senderid=MKDINE&to=" .
            $to . "&msg=" . $msg .
            "&route=T&peid=1701167714026472589&tempid=1707168034410742527";
        $ch = curl_init('http://bulksms.webmediaindia.com/sendsms?');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return response()->json($otp);
        }
        else{
            return response()->json(['status' => false, 'data' => 'please register yourself']);
        }
    }
	//Dear User, Your OTP is {#var#}. Use this OTP for login to your MKDINE application for booking a table.




    public function send_mobile_verify_otp1(Request $request)
    {
      //Customer::where('whatsapp_number', '=', $request->mobile_no)->exists();
        $check = Customer::where('whatsapp_number', '=', $request->contact_no)->first() ;
        if (isset($check) && $check != null) {
           // $otp = rand(1000, 9999);
           $otp = 1234;//default otp
        return response()->json(['user'=>$check,'otp'=>$otp]);
            $name = 'Sir/Mam';
            $msg = 'Dear ' . $name . ', Your OTP is ' . $otp . '. Send
               by WEBMEDIA';
            $msg = urlencode($msg);
            $to = $request->contact_no;
            //$user->mobile;
            // $request->mobile;
            $data1 = "uname=habitm1&pwd=habitm1&senderid=WMEDIA&to=" .
                $to . "&msg=" . $msg .
                "&route=T&peid=1701159196421355379&tempid=1707161527969328476";
            $ch = curl_init('http://bulksms.webmediaindia.com/sendsms?');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
        return response()->json(['user'=>$check,'otp'=>$otp]);
        curl_close($ch);
        }
        else {
            $data = [
                'status' => false,
                'error_message' => 'connection error',
            ];
        }
    }
    // Check User

    public function user_registration(Request $request)
    {
		
        $user = EmployeeRegistration::where('role_name_id',27)
        ->where('contact', '=', $request->contact)
        //->select('employee_registraions.contact')
        ->first(); //check already exist 
        if (isset($user) && $user != null) {
            //   return $user;			
            return response()->json(['status' => true, 'data' => $user]); //return already exist user
        } else {

            return response()->json(['status' => false, 'data' => 'please register yourself']);
        }
    }
    public function get_all_data_admin(Request $request)
    {
        $data = Add_news::where('add_news.id',$request->id)
        ->leftjoin('user_roles','user_roles.id','=','add_news.field_executive_id')
        ->leftjoin('locations','locations.id','=','add_news.location_id')
        ->leftjoin('areas','areas.location_id','=','add_news.location_id')
        ->leftjoin('associatesbanks','associatesbanks.id','=','add_news.associatesbanks_id')
        ->select('add_news.*','user_roles.role_name','associatesbanks.bankname','locations.locations','areas.area')
        ->get();
        if ($data) {			
            return response()->json(['status' => true, 'data' => $data]); 
        } else {

            return response()->json(['status' => false, 'data' => 'data not found']);
        }
    }

    public function update_restro(Request $request)
    {

       

        $update_operator_data = Add_news::find($request->id);
        if ($update_operator_data) {
            $update_operator_data->update([
                'restro_name' => $request->restro_name,
                'address' => $request->address,
                'about_restro' => $request->about_restro,
                'working_time' => $request->working_time,
                'mobile' => $request->mobile,
                'city_id' => $request->city_id,
                'avg_cost' => $request->avg_cost,
                'username' => $request->username,
                'password' => $request->password,
            ]);
        }
    }
    // $data =Add_news::find($request->id);
    //  $image_name_array=[];
    //  if (isset($request->image)  && !empty($request->image_files) 
    //  && count($request->image_files)>0) {
    //      foreach ($request->image as $key => $image) {
    //      $extension= explode('/', mime_content_type($image))[1];
    //      $data = base64_decode(substr($image, strpos($image, ',') + 1));
    //      $imgname='nv'.rand(000,999).$key . time() . '.' .$extension;
    //      file_put_contents(public_path('images/New-valuation') . '/' . $imgname, $data);
    //      $image_name_array[]=$imgname;
    //  }
    //  $data->image = $image_name_array;
    // }
    // $data->firstname=$request->get('firstname');
    // $data->middelname=$request->get('middelname');
    // $data->lastname=$request->get('lastname');
    // $data->valuation_id=$request->get('valuation_id');
    // $data->associatesbanks_id=$request->get('associatesbanks_id');
    // $data->product_id=$request->get('product_id');
    // $data->location_id=$request->get('location_id');
    // $data->area_id=$request->get('area_id');
    // $data->field_executive_id=$request->get('field_executive_id');
    // $data->assistant_valuer_id=$request->get('assistant_valuer_id');
    // $data->technical_manager_id=$request->get('technical_manager_id');
    // $data->technical_head_id=$request->get('technical_head_id');
    // $data->contact_no=$request->get('contact_no');
    // $data->alt_cont_no=$request->get('alt_cont_no');
    // $data->address=$request->get('address');
    // $data->city=$request->get('city');
    // $data->state=$request->get('state');
    // $data->pincode=$request->get('pincode');
    // $data->longitude=$request->get('longitude');
    // $data->latitute=$request->get('latitute');
    // $data->tags=$request->get('tags');
    // $data->date=$request->get('date');
    // $data->comment=$request->get('comment');
    // $data->status=$request->get('status');
    // $data->document_name=$request->get('document_name');
   

    //  $data->save();

}

