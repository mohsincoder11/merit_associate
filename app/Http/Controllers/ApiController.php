<?php

namespace App\Http\Controllers;

use App\Models\Admin\Add_news;
use App\Models\Login\User;
use Illuminate\Http\Request;
use App\Models\Masters\EmployeeRegistration;
use App\Models\FieldExecutive\New_Valuer;
use App\Models\Masters\Area;
use App\Models\Masters\Location;
use App\Models\Masters\AssociatesBank;
use App\Models\Masters\Products;
use App\Models\Masters\Property;
use DB;

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

    // Check User

    // public function user_registration(Request $request)
    // {
		
    //     $user = EmployeeRegistration::where('role_name_id',27)
    //     ->where('contact', '=', $request->contact)
    //     //->select('employee_registraions.contact')
    //     ->first(); //check already exist 
    //     if (isset($user) && $user != null) {
    //         //   return $user;			
    //         return response()->json(['status' => true, 'data' => $user]); //return already exist user
    //     } else {

    //         return response()->json(['status' => false, 'data' => 'please register yourself']);
    //     }
    // }

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

    public function update_admin_data(Request $request)
    {
    $data =Add_news::find($request->id);
    if (isset($data) && $data != null)
    {
     $image_name_array=[];
     if (isset($request->image)  && !empty($request->image_files) 
     && count($request->image_files)>0) {
         foreach ($request->image as $key => $image) {
         $extension= explode('/', mime_content_type($image))[1];
         $data = base64_decode(substr($image, strpos($image, ',') + 1));
         $imgname='nv'.rand(000,999).$key . time() . '.' .$extension;
         file_put_contents(public_path('images/New-valuation') . '/' . $imgname, $data);
         $image_name_array[]=$imgname;
     }
     $data->image = $image_name_array;
    }
    $data->firstname=$request->get('firstname') ? $request->get('firstname') : $data->firstname ;
    $data->middelname=$request->get('middelname') ? $request->get('middelname') : $data->middelname;
    $data->lastname=$request->get('lastname') ? $request->get('lastname') :  $data->lastname ;
    $data->valuation_id=$request->get('valuation_id') ? $request->get('valuation_id') : $data->valuation_id;
    $data->associatesbanks_id=$request->get('associatesbanks_id') ? $request->get('associatesbanks_id') : $data->associatesbanks_id;
    $data->product_id=$request->get('product_id') ? $request->get('product_id') : $data->product_id;
    $data->location_id=$request->get('location_id') ? $request->get('location_id') : $data->location_id;
    $data->area_id=$request->get('area_id') ? $request->get('area_id'): $data->area_id;
    $data->field_executive_id=$request->get('field_executive_id') ? $request->get('field_executive_id') : $data->field_executive_id;
    $data->assistant_valuer_id=$request->get('assistant_valuer_id') ? $request->get('assistant_valuer_id') : $data->assistant_valuer_id;
    $data->technical_manager_id=$request->get('technical_manager_id') ? $request->get('technical_manager_id') :  $data->technical_manager_id;
    $data->technical_head_id=$request->get('technical_head_id') ? $request->get('technical_head_id') : $data->technical_head_id;
    $data->contact_no=$request->get('contact_no') ? $request->get('contact_no') : $data->contact_no;
    $data->alt_cont_no=$request->get('alt_cont_no') ? $request->get('alt_cont_no') : $data->alt_cont_no;
    $data->address=$request->get('address') ? $request->get('address') : $data->address;
    $data->city=$request->get('city') ? $request->get('city') : $data->city;
    $data->state=$request->get('state') ?$request->get('state') : $data->state;
    $data->pincode=$request->get('pincode') ? $request->get('pincode') : $data->pincode;
    $data->longitude=$request->get('longitude') ? $request->get('longitude') :  $data->longitude;
    $data->latitute=$request->get('latitute') ?$request->get('latitute') : $data->latitute;
    $data->tags=$request->get('tags') ? $request->get('tags') : $data->tags;
    $data->date=$request->get('date') ? $request->get('date'):  $data->date;
    $data->comment=$request->get('comment') ? $request->get('comment') :  $data->comment;
    $data->status=$request->get('status') ?$request->get('status') : $data->status;
    $data->document_name=$request->get('document_name') ? $request->get('document_name') : $data->document_name;
    $data->save();
    }
}

public function field_executive(Request $request)
{
    // dd($request->all());
    $image_name_array=[];
    if (isset($request->image_files) && !empty($request->image_files) 
    && count($request->image_files)>0){
        foreach ($request->image_files as $key => $image) {
        $extension= explode('/', mime_content_type($image))[1];
        $data = base64_decode(substr($image, strpos($image, ',') + 1));
        $imgname='fe'.rand(000,999).$key . time() . '.' .$extension;
        file_put_contents(public_path('images/FE-valuation') . '/' . $imgname, $data);
        $image_name_array[]=$imgname;
    }
}
   
    $insert = New_Valuer::create([

        'name' => $request->name,
       'valuation_id'=> $request->valuation_id,
        'contact_no'  => $request-> contact_no,
        'property_type_id'  => $request-> property_type_id,
        'property_address'  => $request-> property_address,
        'address'  => $request-> address,
        'road_name'  => $request-> road_name,
        'colony'  => $request-> colony,
        'pin_code'  => $request-> pin_code,
        'landmark'  => $request-> landmark,
        'meter_no'  => $request-> meter_no,
        'plot_area'  => $request-> plot_area,
        'up_area'  => $request-> up_area,
        'GF'  => $request->  GF,
        'FF'  => $request-> FF,
        'SF'  => $request-> SF,
        'TF'  => $request-> TF,
        'occupancy_status'  => $request->occupancy_status, 
        'occupied_by'  => $request-> occupied_by,
        'four_borders'  => $request-> four_borders,
        'whether_boundaries_matching'  => $request-> whether_boundaries_matching,
        'rate_range'  => $request-> rate_range,
        'plot_range'  => $request-> plot_range,
        'road_type'  => $request-> road_type,
        'road_width_in_feet'  => $request-> road_width_in_feet,
        'type_of_structure'  => $request-> type_of_structure,
        'remark_on_boundaries_matching'  => $request-> remark_on_boundaries_matching,
        'lat'  => $request-> lat,
        'long'  => $request-> long,
        'construction_stage'  => $request-> construction_stage,
        'side_marginal_distance_in_feet'  => $request-> side_marginal_distance_in_feet,
        'discription_of_property'  => $request-> discription_of_property,
        'person_met_at_site'  => $request-> person_met_at_site,
        'relation_with_owner'  => $request-> relation_with_owner,
        'remark_on_property'  => $request-> remark_on_property,
        'deviation'  => $request-> deviation,
        'rate_referenace'  => $request-> rate_referenace,
        'date_of_visit'  => $request-> date_of_visit,
        'name_of_FE_visited_the_property_id'  => $request-> name_of_FE_visited_the_property,
        'location_id'  => $request-> location_id,
        'category_id'  => $request-> category_id,
        'tag_id'  => $request-> tag_id,
        'image'  => $image_name_array,
        'status'=>'ongoing',
        'reason'=>$request->reason,
        'last_updated_by'=>$request->last_updated_by
    ]);

    // echo json_encode($insert);
    // exit();

    if ($insert) {
        return response()->json(['status' => true, 'message' => 'Data Submitted Successfully']);
    } else {
        return response()->json(['status' => false, 'message' => 'User not found']);
    }

    
}

function get_area_by_id(Request $request)
    {
        $data = Area::where('location_id', $request->location_id)->orderby('area', 'asc')->get();
        if ($data) {
            return response()->json(['status' => true, 'data' => $data]);
        } else {
            return response()->json(['status' => false, 'message' => 'User not found']);
        }
    }

    public function location(Request $request)
    {
        $location=Location::all();
        if ($location) {
            return response()->json(['status' => true, 'data' => $location]);
        } else {
            return response()->json(['status' => false, 'message' => 'User not found']);
        }
    }

    // public function areas(Request $request)
    // {
    //     $areas=Area::all();
    //     if ($areas) {
    //         return response()->json(['status' => true, 'data' => $areas]);
    //     } else {
    //         return response()->json(['status' => false, 'message' => 'User not found']);
    //     }
    // }

    public function client(Request $request)
    {
        $client=AssociatesBank::all();
        if ($client) {
            return response()->json(['status' => true, 'data' => $client]);
        } else {
            return response()->json(['status' => false, 'message' => 'User not found']);
        }
    }

    public function product(Request $request)
    {
        $product=Products::all();
        if ($product) {
            return response()->json(['status' => true, 'data' => $product]);
        } else {
            return response()->json(['status' => false, 'message' => 'User not found']);
        }
    }
    public function emp_name(Request $request)
    {

    $data=DB::table('users')
     ->leftjoin('employee_registraions','employee_registraions.user_id','=','users.id')
    ->where([
        'employee_registraions.area_id'=>$request->area_id,
    ])
    ->select('users.id','users.name','users.role_name_id')
    ->get();

    if ($data) {
        return response()->json(['status' => true, 'data' => $data]);
    } else {
        return response()->json(['status' => false, 'message' => 'User not found']);
    }
    }
    public function property_type(Request $request)
    {
        $property_type=Property::all();
        if ($property_type) {
            return response()->json(['status' => true, 'data' => $property_type]);
        } else {
            return response()->json(['status' => false, 'message' => 'User not found']);
        }
    }


}