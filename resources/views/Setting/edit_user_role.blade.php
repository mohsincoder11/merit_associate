@extends('layout')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">

                        <div class="card-body">
                            {{-- @include('alert'); --}}
                            <div class="card-title d-flex align-items-center">

                                <h5 class="mb-0 text-primary">User Role</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action="{{ route('user_role_insert') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $edit_data->id }}">


                                <div class="col-md-4" style="margin-top:10px;">
                                    <label for="inputFirstName" class="form-label">Role Name<span style="color:red">*</span>
                                        <input type="text" class="form-control" id="inputFirstName" name="role_name"
                                            placeholder=" Role Name " value="{{ $edit_data->role_name }}" required></label>
                                </div>

                                <div class="row">
                                    <label>Page Name</label>

                                    <div class="col-md-10">
                                        <input type="checkbox" id="fe" name="page_name[]" value="Field Executive"
                                            @if (in_array('1', $edit_data->page_name)) checked @endif>
                                        <label for="op"> Operation Manager</label>&nbsp; &nbsp; &nbsp;

                                        <input type="checkbox" id="am" name="page_name[]" value="Admin"
                                            @if (in_array('2', $edit_data->page_name)) checked @endif>
                                        <label for="am"> Admin</label>
                                        <input type="checkbox" id="fe" name="page_name[]" value="Field Executive"
                                            @if (in_array('3', $edit_data->page_name)) checked @endif>
                                        <label for="fe"> Field Executive</label>&nbsp; &nbsp; &nbsp;
                                        <input type="checkbox" id="av" name="page_name[]" value=" Assistant Valuer"
                                            @if (in_array('4', $edit_data->page_name)) checked @endif>
                                        <label for="av"> Assistant Valuer</label>&nbsp; &nbsp; &nbsp;
                                        <input type="checkbox" id="tm" name="page_name[]" value="Technical Manager"
                                            {{ $edit_data->page_name == 'Technical Manager' ? 'checked' : '' }}
                                            @if (in_array('5', $edit_data->page_name)) checked @endif>
                                        <label for="tn"> Technical Manager </label>&nbsp; &nbsp; &nbsp;
                                        <input type="checkbox" id="th" name="page_name[]" value="Technical Head"
                                            @if (in_array('6', $edit_data->page_name)) checked @endif>
                                        <label for="th"> Technical Head</label>
                                    </div>

                                </div>






                                <div class="row">
                                    <div class="col-md-4" style="margin-top:4%;">
                                        <button type="submit" class="btn btn-primary px-3"><i
                                                class="fadeIn animated bx bx-plus"></i> Add </button>
                                    </div>

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
                                        <th>Role Name</th>
                                        <th>Page Name</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user_role_all as $user_role_all)
                                        <tr>

                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user_role_all->role_name }}</td>
                                            <td>{{ $user_role_all->page_name_string }}</td>

                                            <td><button type="button" class="btn1 btn-outline-success"><i
                                                        class='bx bx-edit-alt me-0'></i>
                                                </button> <a
                                                    href="{{ route('user_role_delete', $user_role_all->id) }}"><button
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
