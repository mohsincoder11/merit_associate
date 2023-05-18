<?php

namespace App\Http\Controllers\Masters;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masters\Location;
use App\Models\Masters\Branch;
use App\Models\Masters\Area;

class BranchController extends Controller
{
    public function index_branch()
    {
     
      // $branch_all=Branch::orderby('id','desc')->get();
        $branch=Branch::leftjoin('locations','locations.id','=','branchs.location_id')
        ->leftjoin('areas','areas.id','=','branchs.area_id')
        ->select('branchs.*','locations.locations')
          ->orderby('branchs.id','desc')
          ->get();
          // $branch_all=Branch::all();
          $loc=Location::all();
          $area=Area::all();
        return view('Masters.meritbranch',compact('loc','branch','area'));
    }

    public function insert_branch(request $request)
        {
           $store= new Branch ;
           $store->branch_name=$request->get('branch_name');
           $store->prefix=$request->get('prefix');
           $store->location_id=$request->get('location_id');
           $store->area_id=$request->get('area_id');
           $store->save();
           return redirect(route('branch'))->with(['success' => true, 'message' => 'Data Successfully Submitted !']);
  
        }

       public function delete(Request $request)  
    {  
      $data=Branch::where('id',$request->id)->delete();   
        return redirect(route('branch'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 



    public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=Branch::find($request->id);
      $data=Branch::orderby('id','desc')->get();
      $branch=Branch::leftjoin('locations','locations.id','=','branchs.location_id')
      ->leftjoin('areas','areas.id','=','branchs.area_id')
      ->select('branchs.*','locations.locations','areas.area')
        ->orderby('branchs.id','desc')
        ->get();
        // $branch_all=Branch::all();
        $loc=Location::all();
        $area=Area::all();
    return view('Masters.edit_branch',['edit_data'=>$data1,'branch_all'=>$data,'branch'=>$branch,'loc'=>$loc,'area'=>$area]);
    }

   
   public function update(Request $request)
  {
    //dd($request->all());
 $store =Branch::find($request->id);
 $store->branch_name=$request->get('branch_name');
 $store->prefix=$request->get('prefix');
 $store->location_id=$request->get('location_id');
 $store->area_id=$request->get('area_id');
 $store->save();
 return redirect(route('branch'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);

}
}




