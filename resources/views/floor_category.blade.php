@extends('layout')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            {{-- @include('alert') --}}
            <div class="container">
                <div class="row ">
                    {{-- <div class="col-md-12"> --}}
                    <div class="col-md-6">

                        <div class="card">

                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">

                                    <h5 class="mb-0 text-primary">Floor Type</h5>
                                </div>
                                <hr>
                                <form class="row g-2" action="{{ route('floorinsert') }}" method="post">
                                    @csrf

                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">
                                            Floor<span style="color:red">*</span></span>
                                        </label>
                                        <input type="text" class="form-control" id="inputFirstName" placeholder="Floor"
                                            name="floor" required>
                                    </div>

                                    <div class="col-md-3" style="margin-top:6%;margin-left:3%">
                                        <button type="submit" class="btn btn-primary px-3"><i
                                                class="fadeIn animated bx bx-plus"></i> Add </button>
                                    </div>
                                </form>

                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Floor Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $data1)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $data1->floor }}</td>
                                                    <td>
                                                       
                                                        <a href="{{ route('flooredit', $data1->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                                                    class='bx bx-edit-alt me-0'></i></button>

                                                                    <a href="{{ route('floordelete', $data1->id) }}"><button
                                                                        type="button" class="btn1 btn-outline-danger"
                                                                        onclick="return confirm('Are You Sure To Delete This?')"><i
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

                    {{-- <div class="overlay toggle-icon"></div>
                    <hr /> --}}


                    <div class="col-md-6 ">

                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">

                                    <h5 class="mb-0 text-primary">Category</h5>
                                </div>
                                <hr>
                                <form class="row g-2" action="{{ route('catinsert') }}" method="post">@csrf
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label class="form-label">Category<span
                                                    style="color:red">*</span></span></label>
                                            </label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                placeholder="Category" name="category" required>
                                        </div>





                                        <div class="col-md-3" style="margin-top:6%;margin-left:3%;width:100px">
                                            <button type="submit" class="btn btn-primary px-3"><i
                                                    class="fadeIn animated bx bx-plus"></i> Add </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data2 as $data3)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $data3->category }}</td>
                                                    <td>
                                                        <a href="{{ route('catedit', $data3->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                                                class='bx bx-edit-alt me-0'></i></button></a>

                                                                <a href="{{ route('catdelete', $data3->id) }}"><button
                                                                type="button" class="btn1 btn-outline-danger"
                                                                onclick="return confirm('Are You Sure To Delete This?')"><i
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
    </div>
    </div>




    <!--end page wrapper -->
    <script>
        var msg = '{{ Session::get('alert ') }}';
        var exist = '{{ Session::has('alert ') }}';
        if (exist) {
            alert(msg);
        }
    </script>
@stop
