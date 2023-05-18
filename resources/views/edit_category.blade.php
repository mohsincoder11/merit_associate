@extends('layout')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            {{-- @include('alert') --}}
            <div class="container">
                <div class="row ">
                    {{-- <div class="col-md-12"> --}}
                   
                    {{-- <div class="overlay toggle-icon"></div>
                    <hr /> --}}


                    <div class="col-md-8 mx-auto ">

                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">

                                    <h5 class="mb-0 text-primary">Category</h5>
                                </div>
                                <hr>
                                <form class="row g-2" action="{{ route('catupdate') }}" method="post">@csrf
                                    <input type="hidden" name="id" value="{{$edit_category->id}}">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label class="form-label">Category<span
                                                    style="color:red">*</span></span></label>
                                            </label>
                                            <input type="text" class="form-control" id="inputFirstName" 
                                                placeholder="Category" name="category" value={{ $edit_category->category }} required  >
                                        </div>


                                        <div class="col-md-3" style="margin-top:5%;">
                                            <button type="submit" class="btn btn-primary px-3" style="margin-right:10%;"><i
                                                    class="fadeIn animated bx bx-plus"></i> Update </button>
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
                                            @foreach ($all_category as $data3)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $data3->category }}</td>
                                                    <td>
                                                      
                                                        <a href="{{ route('catedit', $data3->id) }}"> <button type="button" class="btn1 btn-outline-success"><i
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
