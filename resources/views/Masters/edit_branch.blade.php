@extends('layout')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12 mx-auto" style="margin-top: -10%;">
                    <br><br><br><br><br><br><br>
                    <div class="card">

                        <div class="card-body">


                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary">Merit's Branch</h5>
                            </div>
                            <hr>
                            <form class="row g-2" method="post" action=" {{ route('branchupdate') }}">@csrf
                                <input type="hidden" name="id" value="{{$edit_data->id}}">
                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label"> Branch Name<span
                                            style="color:red">*</span></label> 
                                    <input type="text" class="form-control" id="inputFirstName" placeholder=" Branch"
                                        name="branch_name" value={{ $edit_data->branch_name }}>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Prefix<span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Prefix"
                                        name="prefix" value={{ $edit_data->prefix }}>
                                </div>



                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Locations <span
                                            style="color:red">*</span></label>
                                    <select class="form-select" name="location_id">
                                        <option>Select</option>
                                        @foreach ($loc as $locations)
                                        <option value={{$locations->id }}  @if($edit_data->location_id ==$locations->id) selected @endif>{{ $locations->locations }}</option>
                                        @endforeach
                                        
                                    </select>

                                </div>
                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Area <span
                                            style="color:red">*</span></label>
                                    <select class="multiple-select" name="area_id[]" multiple placeholder="Select Area">
                                        <option>Select</option>
                                        @foreach($area as $area)
                                        <option value={{ $area->id}}   {{in_array($area->id,$edit_data->area_id) ? "selected" : ""}}>{{ $area->area }}</option>
                                        @endforeach
                                    </select>

                                </div>


                                <div class="col-md-3" style="padding:8px"><br>
                                    <button type="submit" class="btn btn-primary px-3"><i
                                            class="fadeIn animated bx bx-plus"></i>Update </button>
                                </div>
                            </form>

                        </div>


                    </div>




                    <!--end page wrapper -->
                    <!--start overlay-->
                    <div class="overlay toggle-icon"></div>
                    <!--end overlay-->
                    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                            class='bx bxs-up-arrow-alt'></i></a>
                    <!--End Back To Top Button-->


                    <!-- <h6 class="mb-0 text-uppercase">DataTable</h6> -->
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Branch</th>
                                            <th>Prefix</th>
                                            <th>Area</th>
                                            <th>Locations</th>
                                            {{-- <th>Area</th> --}}
                                        
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($branch as $branchs)
                                        <tr>
                                            {{-- @json($barnch_all); --}}
                                         
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $branchs->branch_name }}</td>
                                            <td>{{ $branchs->prefix }}</td>
                                            <td>{{ $branchs->area_name }}</td>
                                            <td>{{ $branchs->locations }}</td>
                                            
                                            {{-- <td>
                                                @php
                                               $area = App\Models\Area::whereIn('id',$branchs->area_id)
                                                           ->pluck('area')->toArray();
                                                           $area2=implode(",",$area);
                                               @endphp
                                              {{$area2}}
                                           </td> --}}
                                            <td> <a href="{{ route('branchedit',$branchs->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                                        class='bx bx-edit-alt me-0'></i></button></a> 
                                                        <a href="{{ route('branchdelete',$branchs->id) }}"><button type="button"
                                                    class="btn1 btn-outline-danger"><i
                                                        class='bx bx-trash me-0'></i></button></a>
                                            </td>

                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop
