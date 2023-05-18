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
                            <form class="row g-2">
                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label"> Branch Name<span
                                            style="color:red">*</span></label> 
                                    <input type="text" class="form-control" id="inputFirstName" placeholder=" Branch"
                                        name="branch">
                                </div>

                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Prefix<span
                                            style="color:red">*</span></label>
                                    <input type="email" class="form-control" id="inputFirstName" placeholder="Prefix"
                                        name="prefix">
                                </div>



                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Locations <span
                                            style="color:red">*</span></label>
                                    <select class="form-select">
                                        <option>Select</option>
                                        <option>Amravati</option>
                                    </select>

                                </div>
                                <div class="col-md-2">
                                    <label for="inputFirstName" class="form-label">Area <span
                                            style="color:red">*</span></label>
                                    <select class="form-select">
                                        <option>Select</option>
                                        <option>Amravati</option>
                                    </select>

                                </div>

                                








                                <div class="col-md-3" style="padding:8px"><br>
                                    <button type="submit" class="btn btn-primary px-3"><i
                                            class="fadeIn animated bx bx-plus"></i>Add </button>
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
                                            <th>Locations</th>
                                            <th>Area</th>
                                            

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Gadge Nagar</td>
                                            <td>GN</td>
                                            <td>Amravati</td>
                                            <td>Gadge Nagar</td>
                
                                            <td> <button type="button" class="btn1 btn-outline-success"><i
                                                        class='bx bx-edit-alt me-0'></i></button> <button type="button"
                                                    class="btn1 btn-outline-danger"><i
                                                        class='bx bx-trash me-0'></i></button>



                                            </td>

                                        </tr>


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
