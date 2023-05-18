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

                                <h5 class="mb-0 text-primary"> User Role</h5>
                            </div>
                            <hr>
                            <form class="row g-2" action="{{ route('user_role_insert') }}" method="post">
                                @csrf
                                <div class="row">
                                <div class="col-md-10" style="margin-top:10px;">
                                    <label for="inputFirstName" class="form-label">User Name<span style="color:red">*</span>
                                        <select class="single-select" name="user_name" class="form-control" required>
                                            <option value="" > Select </option>
                                            @foreach ($all_user as $new_all)
                                                        <option value="{{ $new_all->id }}">
                                                            {{ $new_all->name }} </option>
                                                    @endforeach
                                        </select>
                            
                                </div>
                            </div><br>
                                <div class="row">
                                    <label>Role</label>
                                    <div class="col-md-10">
                                        @foreach ($user_role_all as $user_role_all)
                                        <input type="checkbox" name="role_id[]" value="{{$user_role_all->id}}">
                                       <label>{{$user_role_all->role_name}} </label>&nbsp; &nbsp; 
                                       @endforeach
                                        {{-- <input type="checkbox" id="th" name="page_name[]" value="Admin">
                                        <label for="th"> Admin</label>
                                    <input type="checkbox" id="fe" name="page_name[]" value="Field Executive">
                                    <label for="fe"> Field Executive</label>&nbsp; &nbsp;  &nbsp;  
                                    <input type="checkbox" id="av" name="page_name[]" value=" Assistant Valuer">
                                    <label for="av"> Assistant Valuer</label>&nbsp; &nbsp;  &nbsp; 
                                    <input type="checkbox" id="tm" name="page_name[]" value="Technical Manager">
                                    <label for="tn"> Technical Manager </label>&nbsp; &nbsp;  &nbsp; 
                                    <input type="checkbox" id="th" name="page_name[]" value="Technical Head">
                                    <label for="th"> Technical Head</label> --}}
                                   
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
                                        <th>User Name</th>
                                        <th>Role Name</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user_permission as $user_role_all)
                                        <tr>
                                           
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user_role_all->name }}</td>
                                           <td>
                                            @php
                                          
                                            $role_name = App\Models\Setting\UserRole::whereIn('id',$user_role_all->role_id)
                                                        ->pluck('role_name')->toArray();
                                                        $role_name1=implode(",",$role_name);
                                            @endphp
                                           {{$role_name1}} 
                                            </td>
                                            {{-- <td>{{ $user_role_all->role_name }}</td> --}}
                                            
                                             <td><a href="{{ route('user_role_edit',$user_role_all->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                                        class='bx bx-edit-alt me-0'></i>
                                                </button></a> <a href="{{ route('user_role_delete',$user_role_all->id) }}"><button type="button"
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
    <!--end page wrapper -->
    <script>
        var msg = '{{Session::get('alert ')}}';
        var exist = '{{Session::has('alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>
@stop
