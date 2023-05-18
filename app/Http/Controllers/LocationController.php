<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Area;

class LocationController extends Controller
{
    public function index()
    {
     
      $area_all=Area::join('locations','locations.id','=','areas.location_id')
      ->select('areas.*','locations.locations')
        ->orderby('areas.id','desc')
        ->get();
        // $location=Location::all();

        $data=Location::orderby('id','desc')->get();
        return view('location',compact('data','area_all'));
    }

    public function insert_into_location(request $request)
    {
       $store= new Location;
       $store->locations=$request->get('locations');
       $store->save();
       return redirect(route('location'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

    public function delete_from_location($id)  
    {  
      $data=Location::find($id);  
        $data->delete();  
        return redirect(route('location'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function delete_area(Request $request)  
    {  
    

     $data=Area::where('id',$request->id)->delete(); 
        return redirect(route('location'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    
    public function edit_location(request $request)
    {
   // echo json_encode($request->all());
      $data1=Location::find($request->id);
      $area_all=Area::join('locations','locations.id','=','areas.location_id')
      ->select('areas.*','locations.locations')
        ->orderby('areas.id','desc')
        ->get();

        // $location=Location::all();

        $data=Location::orderby('id','desc')->get();
      // echo json_encode($data1);
      // exit();
    return view('edit_location',['edit_data'=>$data1,'data'=>$data,'area_all'=>$area_all]);
    }

 public function update_location(Request $request)
  {
    //dd($request->all());
 $data =Location::find($request->id);
 //echo json_encode($data);
     // exit();
 $data->locations = $request->locations;
 $data->save();
 return redirect(route('location'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}

// public function index_area()
//     {
//         $area_all=Area::join('locations','locations.id','=','areas.location_id')
//         ->orderby('areas.id','desc')
//         ->get();

//         $location=Location::all();
//         return view('location',compact('area_all','location'));
//     }

    public function insert_area(request $request)
    {
       $store= new Area;
       $store->location_id=$request->get('location_id');
       $store->area=$request->get('area');
       $store->save();
       return redirect(route('location'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);

    }

   
    public function edit_area(request $request)
    {
   //echo json_encode($request->all());
      //$data=Location::orderby('id','desc')->get();
      $data1=Area::find($request->id);
      $area_all=Area::join('locations','locations.id','=','areas.location_id')
      ->select('areas.*','locations.locations')
        ->orderby('areas.id','desc')
        ->get();

        // $location=Location::all();

        $data=Location::orderby('id','desc')->get();
      // echo json_encode($data1);
      // exit();
    return view('edit_area',['edit_data'=>$data1,'data'=>$data,'area_all'=>$area_all]);
    }

    public function update_area(Request $request)
  {
    //dd($request->all());
 $data =Area::find($request->id);
 //echo json_encode($data);
     // exit();
 $data->location_id = $request->location_id;
 $data->area = $request->area;
 $data->save();
 return redirect(route('location'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
}

}
