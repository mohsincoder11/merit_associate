<?php

namespace App\Http\Controllers\Masters;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Masters\Floors;
use App\Models\Masters\Category;

class FloorController extends Controller
{
    // public function index_floor()
    // {
    //     $data=Floors::orderby('id','desc')->get();
    //     return view('floor_category',compact('data'));
    // }

    public function index_cat()
    {
        $data2=Category::orderby('id','desc')->get();
        $data=Floors::orderby('id','desc')->get();

        return view('Masters.floor_category',compact('data2','data'));
    }
   

    public function insert_floor(request $request)
    {
       $store= new Floors;
       $store->floor=$request->get('floor');
       $store->save();
       return redirect(route('floor'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function insert_category(request $request)
    {
       $store= new Category;
       $store->category=$request->get('category');
       $store->save();
       return redirect(route('floor'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete_floor(Request $request)  
    {  
      $data=Floors::where('id',$request->id)->delete();   
        return redirect(route('floor'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function delete_category(Request $request)  
    {  
      $data=Category::where('id',$request->id)->delete();   
        return redirect(route('floor'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit_floor(request $request)
    {
      
      $edit_floor=Floors::find($request->id);
      $all_floor=Floors::orderby('id','desc')->get();
    return view('Masters.edit_floor',['edit_floor'=>$edit_floor,'all_floor'=>$all_floor]);
    }


    public function edit_cat(request $request)
    {
      $edit_category=Category::find($request->id);
      $all_category=Category::orderby('id','desc')->get();
      
    return view('Masters.edit_category',['edit_category'=>$edit_category,'all_category'=>$all_category]);
    }

    public function update_floor(Request $request)
  {
    //dd($request->all());
 $data =Floors::find($request->id);
 //echo json_encode($data);
     // exit();
     $data->floor=$request->get('floor');
 $data->save();
 return redirect(route('floor'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}

public function update_cat(Request $request)
  {
    //dd($request->all());
 $data =Category::find($request->id);
 //echo json_encode($data);
     // exit();
 $data->category=$request->get('category');
 $data->save();
 return redirect(route('floor'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}



}
