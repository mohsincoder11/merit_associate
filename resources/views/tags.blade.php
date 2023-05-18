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

                                <h5 class="mb-0 text-primary">Category Tags</h5>
                            </div>
                            <hr>
                            <form class="row g-2" method="post" action={{ route('taginsert') }}>@csrf

                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Category<span style="color:red">*</span></span></label>
                                    <select class="form-select" name="category_id">
                                        <option>Select</option>
                                        @foreach ($category as $data)
                                        <option value="{{ $data->id }}">{{ $data->category }}

                                        </option>
                                    @endforeach
                                    </select>

                                </div>

                                <div class="col-md-4">
                                    <label class="form-label"> Tags<span style="color:red">*</span></span></label>
                                    <input type="text" class="form-control" id="inputFirstName" name="tag"
                                    placeholder=" Tags" required>
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
                                            <th>Category</th>
                                            <th>Tags </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($all_tag as $data)
                                        <tr>
                                         {{-- @json($data); --}}
                                           <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $data->category }}</td>
                                            <td> {{ $data->tag }}</td>
                                            <td> 
                                                <a href="{{route('tagedit',$data->id)}}"><button type="button" class="btn1 btn-outline-success"><i
                                                    class='bx bx-edit-alt me-0'></i>
                                            </button></a> 

                                            <a href="{{ route('tagdelete',$data->id) }}"><button type="button"
                                                    class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i
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
