<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
use App\Models\Category;



class TagsController extends Controller
{
    public function index_tag()
    {
        $all_tag=Tags::join('categorys','categorys.id','=','tags.category_id')
                ->select('tags.*','categorys.category')
                ->orderby('tags.id','desc')
                ->get();
                $category=Category::all();
        return view('tags',compact('all_tag','category'));
    //     echo json_encode($all_tag);
    //     exit();
     }

    public function insert_tag(request $request)
    {
       $store= new Tags;
       $store->category_id=$request->get('category_id');
       $store->tag=$request->get('tag');
       $store->save();
       return redirect(route('tag'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete_tag(Request $request)  
    {  
    
     $data=Tags::where('id',$request->id)->delete(); 
        return redirect(route('tag'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 


    public function edit_tag(request $request)
    {
   // echo json_encode($request->all());
      $data1=Tags::find($request->id);
      $all_tag=Tags::join('categorys','categorys.id','=','tags.category_id')
                ->select('tags.*','categorys.category')
                ->orderby('tags.id','desc')
                ->get();

        $category=Category::orderby('id','desc')->get();
      // echo json_encode($data1);
      // exit();
    return view('edit_tag',['edit_data'=>$data1,'all_tag'=>$all_tag,'category'=>$category]);
    }

    public function update_tag(Request $request)
    {
      //dd($request->all());
   $data =Tags::find($request->id);
   //echo json_encode($data);
       // exit();
    $data->category_id=$request->get('category_id');
    $data->tag=$request->get('tag');
      
   $data->save();
   return redirect(route('tag'))->with(['success' => true, 'message' => 'Data Updated Successfully ']);
  }

}
