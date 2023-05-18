@extends('layout')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 mx-auto" style="margin-top: -10%;">
                    <br><br><br><br><br><br><br>
                    <div class="card">

                        <div class="card-body">


                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary">Status </h5>
                            </div>
                            <hr>
                            <form class="row g-2" method="post" action="{{ route('statusinsert') }}">
                                @csrf



                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Role <span style="color:red">*</span></label>
                                    <select class="form-select" name="role">
                                        <option>Select</option>
                                       
                                        <option value="field_executive">Field Executive</option>
                                        <option value="assistant_valuer">Assistant Valuer</option>
                                        <option value="technical_manager">Technical Manager</option>
                                        <option value="technical_head">Technical Head</option>
                                    </select>

                                </div>

                                <div class="col-md-4">
                                    <label class="form-label"> Status <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                    placeholder=" Status" name="statu" required>
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
                                            <th>Role</th>
                                            <th>Status </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($status_all as $data)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                           <td>{{ $data->role }}</td>
                                            <td>{{$data->statu  }}</td>

                                            


                                            <td> 
                                                <a href="{{ route('statusedit',$data->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                                        class='bx bx-edit-alt me-0'></i></button> </a>
                                                        <a href="{{ route('statusdelete',$data->id) }}"><button type="button"
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
