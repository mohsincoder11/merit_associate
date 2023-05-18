<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnicalHead;

class TechnicalHeadController extends Controller
{
    public function index_tech_head()
    {
        $data=TechnicalHead::orderby('id','desc')->get();
        return view('technical_head',compact('data'));
    }

    public function insert_tech_head(request $request)
    {
       $store= new TechnicalHead;
       $store->name=$request->get('name');
       $store->save();
       return redirect(route('technicalhead'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete_tech_head($id)  
    {  
      $data=TechnicalHead::find($id);  
        $data->delete();  
        return redirect(route('technicalhead'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    
    public function edit_tech_head(request $request)
    {
   // echo json_encode($request->all());
      $data1=TechnicalHead::find($request->id);
      $data=TechnicalHead::orderby('id','desc')->get();
      // echo json_encode($data1);
      // exit();
    return view('edit_tech_head',['edit_data'=>$data1,'data'=>$data]);
    }
}
