<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\AssociatesBank;

class ClientController extends Controller
{
    public function index_client()
    {
    //     $data=Client::orderby('id','desc')->get();
    //     '
    $data=AssociatesBank::orderby('id','desc')->get();
    return view('client',compact('data'));;
    }

    
//     public function insert_client(request $request)
//     {
//        $store= new Client;
//        $store->name=$request->get('name');
//        $store->save();
//        return redirect(route('client'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

//     }

//     public function delete_client($id)  
//     {  
//       $data=Client::find($id);  
//         $data->delete();  
//         return redirect(route('client'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
//     } 

//     public function edit_client(request $request)
//     {
//    // echo json_encode($request->all());
//       $data1=Client::find($request->id);
//       $data=Client::orderby('id','desc')->get();
//       // echo json_encode($data1);
//       // exit();
//     return view('edit_client',['edit_data'=>$data1,'data'=>$data]);
//     }

//     public function update_client(Request $request)
//   {
//     //dd($request->all());
//  $data =Client::find($request->id);
//  //echo json_encode($data);
//      // exit();
//  $data->name = $request->name;
//  $data->save();
//  return redirect(route('client'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
// }

}
