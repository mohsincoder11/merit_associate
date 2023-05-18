@extends('layout')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            {{-- @include('alert') --}}
            <div class="container">
                <div class="row ">
                    {{-- <div class="col-md-12"> --}}
                    <div class="col-md-8 mx-auto">
                        <div class="card">

                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">

                                    <h5 class="mb-0 text-primary">Floor Type</h5>
                                </div>
                                <hr>
                                <form class="row g-2" action="{{ route('floorupdate') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$edit_floor->id}}">

                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">
                                            Floor<span style="color:red">*</span></span>
                                        </label>
                                        <input type="text" class="form-control" id="inputFirstName" placeholder="Floor"
                                            name="floor" required value="{{$edit_floor->floor}}">
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
                                            @foreach ($all_floor as $data1)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $data1->floor }}</td>
                                                    <td>
                                                       
                                                                <button type="button" class="btn1 btn-outline-success"><i
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


                {{-- </div> --}}


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
