<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingController extends Controller
{
    public function index_setting()
    {
        return view('setting');
    }

    public function insert_setting(request $request)
    {
       $store= new Settings;
       $store->documentation=$request->get('documentation');
       $store->field_vist=$request->get('field_vist');
       $store->assistant_valuer=$request->get('assistant_valuer');
       $store->report_prepareation=$request->get('report_prepareation');
       $store->technical_head=$request->get('technical_head');
       $store->bank=$request->get('bank');
       $store->save();
       return redirect(route('setting'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }
}
