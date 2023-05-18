@extends('layout')
@section('content')
    <!--start page wrapper -->
    {{-- <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        @include('alert')
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary">Add Client</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action=" " method="post">@csrf


                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Client Name*</label> --}}
                                    <!--start page wrapper -->
                                    

                                    <div class="page-wrapper">
                                        <div class="page-content">




                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h5 class="mb-0">Client</h5>
                                                </div>

                                                <div class="font-5 ms-auto">
                                                    <div class="col">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Add
                                                            new</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleLargeModal" tabindex="-1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Add new customer</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="modal-title">Enter the details of
                                                                                    new customer</h5><br>

                                                                                <div class="row">
                                                                                    <div class="col-md-6">

                                                                                        <label>Customer Name</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Customer Name"
                                                                                            aria-label="default input example">

                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Email</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Customer Name"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Phone No</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Phone No"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>GST No</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Phone No"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Primary Contact</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Primary Contact"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Branch Name</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Branch Name"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Address</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Address"
                                                                                            aria-label="default input example">
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <label>City</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="City"
                                                                                            aria-label="default input example">
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <label>State</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="State"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Pincode</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Pincode"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>User Id</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="user id" name="user_id"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Password</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="password"name="password" 
                                                                                            aria-label="default input example">
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Submit</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <!-- Button trigger modal -->

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleLargeModal1" tabindex="-1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit customer</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">

                                                                                        <label>Customer Name</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Customer Name"
                                                                                            aria-label="default input example">

                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Email</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Customer Name"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Phone No</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Phone No"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>GST No</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Phone No"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Primary Contact</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Primary Contact"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Branch Name</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Branch Name"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Address</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Address"
                                                                                            aria-label="default input example">
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <label>City</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="City"
                                                                                            aria-label="default input example">
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <label>State</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="State"
                                                                                            aria-label="default input example">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label>Pincode</label>
                                                                                        <input class="form-control mb-3"
                                                                                            type="text"
                                                                                            placeholder="Pincode"
                                                                                            aria-label="default input example">
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Update</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            <hr />
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">

                                                        <table id="example" class="table table-striped table-bordered">

                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                    
																	<th>Client</th>
																	<th>Contact Person</th>
																	<th>Phone No</th>
                                                                    <th>Email</th>
																	<th>Bank Address</th>
                                                                    <th>GST No</th>
                                                                    {{-- <th>Primary Contact</th> --}}
																	<th>Pin Code</th>
																	<th>City</th>
                                                                    <th>State</th>
                                                                    
                                                                    <th>Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($data as $data)
                                                                    <tr>
                                                                        <td>{{ $loop->index + 1 }}</td>
                                                                        <td>{{ $data->bankname }}</td>
                                                                        <td>{{ $data->contactperson }}</td>
                                                                        <td>{{ $data->mobile }}</td>
                                                                        <td>{{ $data->email }}</td>
                                                                        <td>{{ $data->bankaddress }}</td>
                                                                        <td>{{ $data->gst_no }}</td>
                                                                        <td>{{ $data->pincode }}</td>
                                                                        <td>{{ $data->city }}</td>
                                                                        <td>{{ $data->state }}</td>
                                                                        

                                                                        <td><button type="button" data-bs-toggle="modal"
                                                                                data-bs-target="#exampleLargeModal1"
                                                                                class="btn1 btn-outline-success"><i
                                                                                    class='bx bx-edit-alt me-0'></i></button>
                                                                            <button type="button"
                                                                                class="btn1 btn-outline-danger"><i
                                                                                    class='bx bx-trash me-0'></i></button>
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
                                @stop

                                <!--end page wrapper -->


                               

                          
