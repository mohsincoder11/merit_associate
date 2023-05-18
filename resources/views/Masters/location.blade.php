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

                                    <h5 class="mb-0 text-primary"> Locations</h5>
                                </div>
                                <hr>
                                <form class="row g-2" action="{{ route('insertlocation') }}" method="post">
                                    @csrf
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">Locations<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="inputFirstName"
                                            placeholder="Location" name="locations" required>
                                    </div>

                                    <div class="col-md-3" style="margin-top:6%;margin-left:3%;">
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
                                                <th>Locations</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $data1)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $data1->locations }}</td>
                                                    <td>
                                                        <a href="{{ route('editlocation', $data1->id) }}"><button
                                                                type="button" class="btn1 btn-outline-success"><i
                                                                    class='bx bx-edit-alt me-0'></i></button></a>

                                                        <a href="{{ route('deletelocation', $data1->id) }}"><button
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

                                    <h5 class="mb-0 text-primary">Area</h5>
                                </div>
                                <hr>
                                <form class="row g-2" action="{{ route('areainsert') }}" method="post">@csrf
                                    <div class="row">
                                    
                                        <div class="col-md-4">
                                            <label class="form-label">Locations<span style="color:red">*</span></label>
                                            <select class="single-select" class="form-control" class="form-select" name="location_id">
                                                {{-- @json($location); --}}
                                                <option>Select</option>
                                               
                                                @foreach ($data as $locations)
                                                        <option value="{{ $locations->id }}"  @if (Session::has('location') && Session::get('location')  == $locations->id ) selected @endif>{{ $locations->locations }}

                                                        </option>
                                                    @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label for="inputFirstName" class="form-label">Area<span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                placeholder="Area" name="area" required>
                                        </div>

                                        <div class="col-md-3" style="margin-top:5%;">
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
                                                <th>Locations</th>
                                                <th>Area</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($area_all as $area_all)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $area_all->locations}}</td>
                                                    <td>{{ $area_all->area }}</td>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('areaedit', $area_all->id) }}"><button
                                                                type="button" class="btn1 btn-outline-success"><i
                                                                    class='bx bx-edit-alt me-0'></i></button></a>

                                                        <a href="{{ route('areadelete', $area_all->id) }}"><button
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
