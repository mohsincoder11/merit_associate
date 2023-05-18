<?php

namespace App\Http\Controllers\Masters;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use App\Models\Masters\Settings;

class SettingController extends Controller
{
    public function index_setting()
    {
        return view('Masters.setting');
    }

    public function insert_setting(request $request)
    {


        
$validator = Validator::make(
    $request->all(),
    [
        'documentation' => ['required'],
        'field_vist' => ['required']
    ],
                [
                'documentation.required' => 'Please enter documents.',
                'field_vist.required' => 'Please enter value.',
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
            


       $store= new Settings;
       $store->documentation=$request->get('documentation');
       $store->field_vist=$request->get('field_vist');
       $store->assistant_valuer=$request->get('assistant_valuer');
       $store->report_prepareation=$request->get('report_prepareation');
       $store->technical_head=$request->get('technical_head');
       $store->bank=$request->get('bank');
       $store->save();
       return back()->with(['success' => 'Data Successfully Submitted !']);

    }
}



// $validator = Validator::make(
//     $request->all(),
//     [
//         'AirFlowID' => ['required'],
//         'name' => ['required']
//     ],
//                 [
//                 'AirFlowID.required' => 'Please select airflow.',
//                 'name.required' => 'Please select name.',
//                 ]
//             );

// if ($validator->fails()) {
//     $error = '';
//     $messages = $validator->messages();
//     foreach ($messages->all() as $message) {
//         $error .= $message . "<br>";
//     }
//     return redirect()->back()->with(['error'=>$error]);

//     }

//     return redirect()->back()->with(['success'=>'data inserted.']);
