@extends('layout')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        {{-- @include('alert') --}}
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary">Add Technical head</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action="{{ route('technicalheadinsert') }}" method="post">
                                @csrf
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="inputFirstName" class="form-label">Technical Head*</label>
                                    <input type="text" class="form-control" id="inputFirstName" name="name"
                                        placeholder="technical head name" required>
                                </div>

                                <div class="col-md-3" style="margin-top:5%;">
                                    <button type="submit" class="btn btn-primary px-3"><i
                                            class="fadeIn animated bx bx-plus"></i> Add </button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>



            <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <hr />
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>

                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Technical Head</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td><a href=" "><button type="button"
                                                        class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i>
                                                    </button></a> <a href="{{ route('technicalheaddelete',$data->id) }}"><button
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
    <!--end page wrapper -->
    <script>
        var msg = '{{ Session::get('alert ') }}';
        var exist = '{{ Session::has('alert ') }}';
        if (exist) {
            alert(msg);
        }
    </script>
@stop
