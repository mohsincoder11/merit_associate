@extends('layout')
@section('content')

    <br><br><br><br><br><br>
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
              
                <div class="col-md-12 mx-auto" style="margin-top: -10%;">
                    {{-- @include('alert') --}}
                    <div class="card">
                        <div class="card-body">
                           
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-primary"> Associates Bank/NBFC</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action="{{ route('associatesbankinsert') }} " method="post">@csrf
                              
                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Bank /NBFC<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Bank Name"
                                        name="bankname" required>
                                </div>


                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Contact Person<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Contact Person" name="contactperson" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Mobile<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder=" Enter Mobile" name="mobile" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Email<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="email" class="form-control" id="inputFirstName" placeholder="Enter Email"
                                        name="email" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Bank Branch<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Bank Address" name="bankbranch" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Bank Address<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="Bank Address" name="bankaddress" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">GST_No<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder="GST number" name="gst_no" required>
                                </div>

                    
                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">State<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="State"
                                        name="state" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">City<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="City"
                                        name="city" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Pin Code<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Pin Code"
                                        name="pincode" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">User Id<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder=" User Id"
                                        name="userid" required>
                                </div>


                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Password<span style="color:red"><span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        placeholder=" Enter Password" name="password">
                                </div>

                                <div class="col-md-2" style="padding:8px"><br>
                                    <button type="submit" class="btn btn-primary px-3"><i
                                            class="fadeIn animated bx bx-plus"></i>Add </button>
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
                                    <th>Bank Name/NBFC</th>
                                    <th>Contact Person</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Bank Branch</th>
                                    <th>Bank Address</th>
                                    <th>GST </th>
                                    <th>Pin Code</th>
                                    <th>City</th>
                                    <th>State</th>
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
                                    <td>{{$data->pincode}}</td>
                                    <td>{{$data->city}}</td>
                                    <td>{{$data->state}}</td>
                                    <td>{{$data->userid}}</td>
                                    

                                    <td> 
                                        <a href="{{route('associateedit',$data->id)}}"><button type="button" class="btn1 btn-outline-success"><i
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
    <script>
        var msg = '{{Session::get('alert ')}}';
        var exist = '{{Session::has('alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>
@stop
