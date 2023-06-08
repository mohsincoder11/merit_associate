@extends('layout')
@section('content')

    <br><br><br><br><br><br>
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12 mx-auto" style="margin-top: -10%;">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary">Add Associates Bank</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action="{{ route('assocaiteupdate') }} " method="post">
                                @csrf	
                                    <input type="hidden" name="id" value="{{$edit_data->id}}">	
                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Bank Name*</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Bank Name"
                                        name="bankname" value="{{$edit_data->bankname}}">
                                </div>


                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Contact Person*</label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Contact Person" name="contactperson" value="{{$edit_data->contactperson}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Mobile*</label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder=" Enter Mobile" name="mobile" value="{{$edit_data->mobile}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="inputFirstName" placeholder="Enter Email"
                                        name="email" value="{{$edit_data->email}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Bank Branch*</label>
                                    <input type="bankbranch" class="form-control" id="inputFirstName" placeholder="Enter Email"
                                        name="bankbranch" value="{{$edit_data->bankbranch}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Bank Address*</label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Bank Address" name="bankaddress" value="{{$edit_data->bankaddress}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">GST_No<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="GST number" name="gst_no" 
                                        value="{{$edit_data->gst_no}}"required>
                                </div>


                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">State<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="" name="state" 
                                        value="{{$edit_data->state}}"required>
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">City*</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="City"
                                        name="city" value="{{$edit_data->city}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Pin Code*</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Pin Code"
                                        name="pincode" value="{{$edit_data->pincode}}">
                                </div>

                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">User Id*</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder=" User Id"
                                        name="userid" value="{{$edit_data->userid}}">
                                </div>


                                <div class="col-md-3">
                                    <label for="inputFirstName" class="form-label">Password*</label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder=" Enter Password" name="password" value="{{$edit_data->password}}">
                                </div>

                                <div class="col-md-3" style="padding:8px"><br>
                                    <button type="submit" class="btn btn-primary px-3"><i
                                            class="fadeIn animated bx bx-plus"></i>Update</button>
                                </div>
                            </form>

                        </div>


                    </div>
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
                                    <th>Bank Name</th>
                                    <th>Contact Person</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Branch</th>
                                    <th>Bank Address</th>
                                    <th>GST_No</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Pin Code</th>
                                    <th>User Id</th>
                                 

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{$loop->index + 1 }}</td>
                                    <td>{{$data->bankname}}</td>
                                    <td>{{$data->contactperson}}</td>
                                    <td>{{$data->mobile}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->bankbranch}}</td>
                                    <td>{{$data->bankaddress}}</td>
                                    <td>{{$data->gst_no}}</td>
                                    <td>{{$data->state}}</td>
                                    <td>{{$data->city}}</td>
                                    <td>{{$data->pincode}}</td>
                                    <td>{{$data->userid}}</td>
                                   

                                    <td> <a href="{{route('associateedit',$data->id)}}"><button type="button" class="btn1 btn-outline-success"><i
                                                class='bx bx-edit-alt me-0'></i></button> </a>
                                                <a href="{{route('associatesbankdelete',$data->id)}}"><button type="button"
                                            class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0'></i></button></a>



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
    <!--end page wrapper -->
@stop
