<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\AssociatesBank;


class ProductsController extends Controller
{
    public function index()
    {
      
      $data=Products::join('associatesbanks','associatesbanks.id','=','products.associatesbanks_id')
      ->select('products.*','associatesbanks.bankname')
      ->orderby('products.id','desc')
      ->get();
      $ass_data=AssociatesBank::all();
        return view('products',compact('data','ass_data'));
    }

    public function insert(request $request)
    {
       $store= new Products;
       $store->products=$request->get('products');
       $store->associatesbanks_id=$request->get('associatesbanks_id');
       $store->save();
       return redirect(route('products'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete(Request $request)  
    {  
      $data=Products::where('id',$request->id)->delete();   
        return redirect(route('products'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=Products::find($request->id);
      $data=Products::join('associatesbanks','associatesbanks.id','=','products.associatesbanks_id')
      ->select('products.*','associatesbanks.bankname')
      ->orderby('products.id','desc')
      ->get();
      $ass_data=AssociatesBank::all();
      // echo json_encode($data1);
      // exit();
    return view('edit_product',['edit_data'=>$data1,'data'=>$data,'ass_data'=>$ass_data]);
    }

   
   public function update(Request $request)
  {
    //dd($request->all());
 $data =Products::find($request->id);
 //echo json_encode($data);
     // exit();
 $data->products = $request->products;
 $data->save();
 return redirect(route('products'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}

}


