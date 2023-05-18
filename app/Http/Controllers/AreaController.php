<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\Location;

use Illuminate\Http\Request;

class AreaController extends Controller
{
//     public function index_area()
//     {
//         $area_all=Area::join('locations','locations.id','=','areas.location_id')
//         ->select('areas.*','locations.locations')
//         ->orderby('areas.id','desc')
//         ->get();

//         $location=Location::all();
//         return view('location',compact('area_all','location'));
//     }

//     public function insert_area(request $request)
//     {
//         $store= new Area;
//        $store->location_id=$request->get('location_id');
//        $store->area=$request->get('area');
//        $store->save();
//        return redirect(route('location'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

//     }

//     public function delete_area(Request $request)  
//     {  
    

//      $data=Area::where('id',$request->id)->delete(); 
//         return redirect(route('location'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
//     } 

    
//     public function edit_area(request $request)
//     {
//    // echo json_encode($request->all());
//       $data1=Area::find($request->id);
//       $data=Area::orderby('id','desc')->get();
//       // echo json_encode($data1);
//       // exit();
//     return view('edit_area',['edit_data'=>$data1,'data'=>$data]);
//     }

//     public function update_area(Request $request)
//   {
//     //dd($request->all());
//  $data =Area::find($request->id);
//  //echo json_encode($data);
//      // exit();
//  $data->location = $request->location;
//  $data->area = $request->area;
//  $data->save();
//  return redirect(route('location'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
// }
}
