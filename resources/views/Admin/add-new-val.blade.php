@extends('layout')
@section('content')

    <!--start page wrapper -->

    <div class="page-wrapper" style="margin-left:70px !important;">
        <div class="page-content">
            @include('alerts')
{{-- @json(Auth::user())
@json(get_user_permission()) --}}
            <div class="col">
                <h6 class="mb-0 text-uppercase">Valuations</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home"
                                    role="tab" aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-plus font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Add New</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-trending-up font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">On Going</div>
                                    </div>
                                </a>
                            </li>


                            {{-- <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-complete" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-check font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Completed</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-cancel" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-x font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Cancelled</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-pending" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-stop font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Pending</div>
                                    </div>
                                </a>
                            </li> --}}


                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="primary-pills-home" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-center">

                                           
                                        </div>
                                        <hr>


    <form class="row g-2"  style="border:#cccccc solid 2px;" method="post" enctype="multipart/form-data"
    action={{ route('addnewinsert') }}>
    @csrf	 

        <table width="100%" style="margin-top:0;">
            <tr border="1" width="100%">
                <td border="1" width="100%" style="background-color: #D9FFD9; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="6"><strong>&nbsp;&nbsp;New Valuation</strong></td>
            </tr>
            <tr border="1" width="100%">
                <td border="1" width="15%">
                    <div style="padding:3px;">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input class="form-control" type="text" name="firstname" aria-label="default input example">
                    </div>
                </td>
                <td border="1" width="15%">
                    <div style="padding:3px;">
                        <label for="inputFirstName" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middlename" aria-label="default input example"> 
                    </div>
                </td>
                <td border="1" width="15%">
                    <div style="padding:2px;">
                        <label for="inputFirstName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" aria-label="default input example"> 
                    </div>
                </td>
                <td border="1" width="10%">
                    <div style="padding:2px;">
                        <label for="inputFirstName" class="form-label">Valuation ID</label>
                        <input type="text" class="form-control" name="valuation_id" aria-label="default input example"> 
                    </div> 
                </td>
                <td border="1" width="20%">
                    <div style="padding:2px;">
                    <label for="inputFirstName" class="form-label" style="margin-top:15px;">Select Client</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="associatesbanks_id">
                        <option selected>Select Client</option>
                        @foreach ($associatesbank as $associatesbank)
                            <option value="{{ $associatesbank->id }}">
                                {{ $associatesbank->bankname }} </option>
                        @endforeach

                    </select>
                    </div>
                </td>
                <td border="1" width="20%">
                    <div style="padding:2px;">
                    <label for="inputFirstName" class="form-label" style="margin-top:15px;">Select Product</label>
                    <select class="form-select mb-3" aria-label="Default select example"
                    name="product_id">
                    <option selected>Select Product</option>
                    @foreach ($product as $product)
                        <option value="{{ $product->id }}"> {{ $product->products }}
                        </option>
                    @endforeach

                </select>
                    </div>
                </td>
            </tr>
            </table> 

{{-- @json($new_edit->location_id) --}}
            <table width="100%" style="margin-top:0;">
                <tr border="1" width="100%">
                    <td border="1" width="15%">
                        <div style="padding:3px;">
                            <label for="inputFirstName" class="form-label">Location</label>
                            <select class="form-select mb-3 location" aria-label="Default select example"
                                                    name="location_id" id="location">

                                                    <option value="">Select Location</option>
                                                    @foreach ($location as $location)
                                                        <option value="{{ $location->id }}"> {{ $location->locations }}
                                                        </option>
                                                    @endforeach

                                                </select>
                        </div>
                    </td>
                    <td border="1" width="15%">
                        <div style="padding:3px;">
                            <label for="inputFirstName" class="form-label">Area</label>
                            <a  href="" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal" style="color:blue">[Add New]</a> 
                                                </label>
                                                <select class="form-select mb-3 areas" aria-label="Default select example"
                                                    name="area_id" id="area">
                                                    <option selected>Select </option>
                                                </select>
                                            </div>
                        </div>
                    </td>
                    <td border="1" width="15%">
                        <div style="padding:2px;">
                            <label for="inputFirstName" class="form-label">Field Executive</label>
                            <select class="form-select mb-3" aria-label="Default select example"
                                                    name="field_executive_id" id="field">
                                                    <option selected>Select Field Executive</option>
                                                </select>

                        </div>
                    </td>
                    <td border="1" width="15%">
                        <div style="padding:2px;">
                            <label for="inputFirstName" class="form-label"  style="margin-top:5px;">Assistant Valuer</label>
                            <select class="form-select mb-3" aria-label="Default select example"
                            name="assistant_valuer_id" id="assist">
                            <option selected>Select Assistant Valuer</option>
                            {{-- <option></option> --}}

                        </select>

                        </div> 
                    </td>
                    <td border="1" width="15%">
                        <div style="padding:2px;">
                        <label for="inputFirstName" class="form-label" style="margin-top:10px;">Technical Manager</label>
                        <select class="form-select mb-3" aria-label="Default select example"
                                                    name="technical_manager_id" id="tech">
                                                    <option selected>Select Technical Manager</option>
                                                    {{-- <option></option> --}}

                                                </select>

                        </div>
                    </td>
                    <td border="1" width="15%">
                        <div style="padding:2px;">
                        <label for="inputFirstName" class="form-label" style="margin-top:10px;">Technical Head</label>
                        <select class="form-select mb-3" aria-label="Default select example"
                                                    name="technical_head_id" id="tech_head">
                                                    <option selected>Select Technical Head</option>
                                                    {{-- <option></option> --}}

                                                </select>
                        </div>
                    </td>
                </tr>
                </table> 



{{-- third row --}}
                <table width="100%" style="margin-top:0;">
                    <tr border="1" width="100%">
                        <td border="1" width="15%">
                            <div style="padding:3px;">
                                <label for="inputFirstName" class="form-label">Contact Number</label>
                                <input class="form-control" type="text" aria-label="default input example"
                                name="contact_no">
                            </div>
                        </td>
                        <td border="1" width="15%">
                            <div style="padding:3px;">
                                <label for="inputFirstName" class="form-label" style="margin-top:-3px;">Alternate Contact </label>
                                <input class="form-control" type="text" aria-label="default input example" name="alt_cont_no">
                                                
                            </div>
                        </td>
                        <td border="1" width="30%">
                            <div style="padding:2px;">
                                <label for="inputFirstName" class="form-label">Address of Indiviual</label>
                                <textarea class="form-control" id="inputAddress"  rows="1" name="address"></textarea>
    
                            </div>
                        </td>
                        <td border="1" width="15%">
                            <div style="padding:2px;">
                                <label for="inputFirstName" class="form-label" style="margin-top:-5px;">City</label>
                                <input class="form-control" type="text"  name="city" aria-label="default input example">
                            </div> 
                        </td>
                        <td border="1" width="15%">
                            <div style="padding:2px;">
                            <label for="inputFirstName" class="form-label" style="margin-top:-5px;">State</label>
                            <input class="form-control " type="text" 
                            name="state" aria-label="default input example">
                            </div>
                        </td>
                        <td border="1" width="10%">
                            <div style="padding:2px;">
                            <label for="inputFirstName" class="form-label" style="margin-top:-5px;">Pincode</label>
                            <input class="form-control" type="text"
                            name="pincode" aria-label="default input example">
                            </div>
                        </td>
                    </tr>
                    </table> 

{{-- fourth row --}}
                    <table width="100%" style="margin-top:0;">
                        <tr border="1" width="100%">
                            <td border="1" width="10%">
                                <div style="padding:3px;">
                                    <label for="inputFirstName" class="form-label">Longitude</label>
                                    <input class="form-control " type="text"
                                    name="longitude" aria-label="default input example">
                                </div>
                            </td>
                            <td border="1" width="10%">
                                <div style="padding:3px;">
                                    <label for="inputFirstName" class="form-label" >Latitude</label>
                                    <input class="form-control " type="text"
                                    name="latitute" aria-label="default input example">
                                                    
                                </div>
                            </td>
                            {{-- <td border="1" width="10%">
                                <div style="padding:2px;">
                                    <label for="inputFirstName" class="form-label">Tags</label>
                                    <input class="form-control" type="text" 
                                    name="tags" aria-label="default input example">
                                </div>
                            </td> --}}
                            <td border="1" width="15%">
                                <div style="padding:2px;">
                                    <label for="inputFirstName" class="form-label">Due Date</label>
                                    <input type="date" class="form-control" name="date" >
                                </div> 
                            </td>
                            <td border="1" width="16%">
                                <div style="padding:2px;">
                                <label for="inputFirstName" class="form-label" style="margin-top:5px;">Comment / Remarks</label>
                                <textarea class="form-control"   rows="1" name="comment"></textarea>
                                </div>
                            </td>
                            <td border="1" width="10%">
                                <div style="padding:2px;">
                                <label for="inputFirstName" class="form-label" style="margin-top:15px;">Status</label>
                                <select class="form-select mb-3" aria-label="Default select example"
                                name="status" >
                                <option value="" >Select </option>
                                <option value="ongoing">ongoing</option>
                                <option value="completed">completed</option>
                                <option value="cancelled">cancelled</option>
                                <option value="pending">pending</option>
                                {{-- @foreach ($status as $status)
                                    <option value="{{ $status->id }}"> {{ $status->statu }}
                                    </option>
                                @endforeach --}}

                            </select>
                            </td>
                        </tr>
                        </table> 



                        <table width="100%" style="margin-top:0;">
                            <tr border="1" width="100%">
                                <td border="1" width="20%">
                                    &nbsp;
                                </td>
                                <td border="1" width="20%">
                                    <div style="padding:3px;">
                                        <label for="inputFirstName" class="form-label" >Documents Name</label>
                                        <input type="text" class="form-control"  id="document1">
                                    </div>
                                </td>
                                <td border="1" width="20%">
                                    <div style="padding:2px;">
                                        <label for="inputFirstName" class="form-label">Upload Documents</label>
                                        <input type="file" class="form-control" id="image" >
                                    </div>
                                </td>
                                <td border="1" width="10%">
                                  
                                        <div class="form-group" align="center" style="margin-top:30px;">
                                            <button type="button" name="action_button" class="btn btn-warning " id="add_row"
                                                 ><i class='bx bx-plus me-0'></i> Add</button>
                                        </div>
                                    
                                </td>
                                <td border="1" width="10%">
                                  
                                    <div class="form-group" align="center" style="margin-top:30px;">
                                        {{-- <button type="button" class="delete-row  " --}}
                                        {{-- style=" margin-top: 5px; color:red"><i class="bx bx-trash"></i></button> --}}
                                        <button type="button" class="btn btn-danger delete-row"><i class='bx bx-trash me-0'></i> Delete</button>
                                    </div>
                                
                            </td>
                                <td border="1" width="20%">
                                    &nbsp;
                                </td>
                               
                            </tr>
                            </table> 

                          
                              <div class="col-md-12">
                            
                                <div class="row">
                                    <div class="col-md-3"></div>
                                <div class="col-md-6 " style="float-left">
                                   
                                    <table class="items_table table table-bordered width80" id="items_table">
                                        <thead>
                                            <tr class="filters">
                                                <th></th>
                                                <th>Document Name</th>
                                         
                                                <th>Documents </th>
                                            </tr>
                                        </thead>
                                        <tbody id="add_more">
                                        </tbody>
                                    </table>
                                  
                                </div>
                                </div>
                            </div>



                          
                                <div style="margin-top:20px; padding:20px;">
                                    <button type="submit" class="btn btn-success"><i class='bx bx-trophy me-0'></i> Submit</button>
                                </div>
                          



    </form>


{{-- 
                                        <form class="row g-2" method="post" enctype="multipart/form-data"
                                            action={{ route('addnewinsert') }}>
                                            @csrf

                                            <p>Valuation for</p>

                                            <div class="col-md-3">
                                                <label>First Name</label>
                                                <input class="form-control mb-3" type="text" name="firstname"
                                                    placeholder="First Name" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Middle Name</label>
                                                <input class="form-control mb-3" type="text" name="middelname"
                                                    placeholder="Middle Name" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Last Name</label>
                                                <input class="form-control mb-3" type="text" name="lastname"
                                                    placeholder="Last Name" aria-label="default input example">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Valuation ID</label>
                                                <input class="form-control mb-3" type="text" name="valuation_id"
                                                    placeholder="Valuation ID" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Client</label> --}}
                                                {{-- <select class="form-select mb-3" aria-label="Default select example"
                                                    name="associatesbanks_id">
                                                    <option selected>Select Client</option>
                                                    @foreach ($associatesbank as $associatesbank)
                                                        <option value="{{ $associatesbank->id }}">
                                                            {{ $associatesbank->bankname }} </option>
                                                    @endforeach

                                                </select> --}}
                                            {{-- </div> --}}
{{-- 
                                            <div class="col-md-3">
                                                <label>Product</label> --}}
                                                {{-- <select class="form-select mb-3" aria-label="Default select example"
                                                    name="product_id">
                                                    <option selected>Select Product</option>
                                                    @foreach ($product as $product)
                                                        <option value="{{ $product->id }}"> {{ $product->products }}
                                                        </option>
                                                    @endforeach

                                                </select> --}}
                                            {{-- </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Location</label> --}}
                                                {{-- <select class="form-select mb-3 location" aria-label="Default select example"
                                                    name="location_id" id="location">

                                                    <option value="">Select Location</option>
                                                    @foreach ($location as $location)
                                                        <option value="{{ $location->id }}"> {{ $location->locations }}
                                                        </option>
                                                    @endforeach

                                                </select> --}}
                                            {{-- </div> --}}

{{-- 
                                            <div class="col-md-3">
                                                <label>Area  --}}
                                                    {{-- <label>[Add New]</label> --}}
                                                    {{-- <a  href="" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal" style="color:blue">[Add New]</a> 
                                                </label>
                                                <select class="form-select mb-3 areas" aria-label="Default select example"
                                                    name="area_id" id="area">
                                                    <option selected>Select </option> --}}

                                                    {{-- @foreach ($area as $area)
												<option value="{{ $area->id }}" > {{ $area->area }} </option>
												@endforeach --}}

                                                {{-- </select>
                                            </div> --}}
                                            {{-- <div class="col"> --}}
                                                <!-- Button trigger modal -->
                                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Basic modal</button> --}}
                                                <!-- Modal -->
                                         
                                                {{-- </div> --}}
                                            {{-- </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Field Executive</label> --}}
                                                {{-- <select class="form-select mb-3" aria-label="Default select example"
                                                    name="field_executive_id" id="field">
                                                    <option selected>Select</option>
                                                    
                                                    {{-- @foreach ($ as $associatesbank)
                                                        <option value="{{ $associatesbank->id }}">
                                                            {{ $associatesbank->bankname }} </option>
                                                    @endforeach --}}

                                                {{-- </select>  --}}
{{-- 
                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Assistant Valuer</label> --}}
                                                {{-- <select class="form-select mb-3" aria-label="Default select example"
                                                    name="assistant_valuer_id" id="assist">
                                                    <option selected>Select Assistant Valuer</option>
                                                    <option></option>

                                                </select> --}}

                                            {{-- </div> --}}


                                            {{-- <div class="col-md-3">
                                               
                                                <label>Technical Manager</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="technical_manager_id" id="tech">
                                                    <option selected>Select Technical Manager</option>
                                                    <option></option>

                                                </select>

                                            </div> --}}


                                            {{-- <div class="col-md-3">
                                                <label>Technical Head</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="technical_head_id" id="tech_head">
                                                    <option selected>Select Technical Head</option>
                                                    <option></option>

                                                </select>

                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Contact Number</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Contact Number" aria-label="default input example"
                                                    name="contact_no">
                                            </div> --}}


                                            {{-- <div class="col-md-3">
                                                <label>Alternate Contact Number</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Alternate Contact Number"
                                                    aria-label="default input example" name="alt_cont_no">
                                            </div>  --}}

                                            {{-- <div class="col-md-3">
                                                <label>Address of Individual</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="2" name="address"></textarea>
                                            </div> --}}
{{-- 
                                            <div class="col-md-3">
                                                <label>City</label>
                                                <input class="form-control mb-3" type="text" placeholder="City"
                                                    name="city" aria-label="default input example">
                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>State</label>
                                                <input class="form-control mb-3" type="text" placeholder="State"
                                                    name="state" aria-label="default input example">
                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Pincode</label>
                                                <input class="form-control mb-3" type="text" placeholder="Pincode"
                                                    name="pincode" aria-label="default input example">
                                            </div> --}}
{{-- 
                                            <div class="col-md-3">
                                                <label>Longitude</label>
                                                <input class="form-control mb-3" type="text" placeholder="Longitude" --}} 
                                                    {{-- {{-- name="longitude" aria-label="default input example">
                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Latitude</label>
                                                <input class="form-control mb-3" type="text" placeholder="Latitude"
                                                    name="latitute" aria-label="default input example">
                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Tags</label>
                                                <input class="form-control mb-3" type="text" placeholder="Tags"
                                                    name="tags" aria-label="default input example">
                                            </div> --}}


                                            {{-- <div class="col-md-3">
                                                <label>Due Date</label>
                                                <input type="date" class="form-control" name="date" >
                                            </div> --}}

{{-- 
                                            <div class="col-md-3">
                                                <label>Comment / Remarks</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3" name="comment"></textarea>

                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <label>Status</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="status" >
                                                    <option >Select </option>
                                                    <option value="ongoing">ongoing</option>
                                                    <option value="completed">completed</option>
                                                    <option value="cancelled">cancelled</option>
                                                    <option value="pending">pending</option>
                                                </select>
                                            </div> --}}
{{-- 

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Documents Name</label>
                                                    <input type="text" class="form-control" name="document_name[]" id="document1">
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Upload Document</label>
                                                    <input type="file" class="form-control" name="image[]" id="image" accept="image/*">
                                                    
                                                </div>

                                                 <div class="col-md-2 form-group">
                                                <label></label>
                                                <div class="form-group" align="center" style="width:full;margin-top: 3vh;">
                                                    <button type="button" name="action_button" class="btn btn-warning " id="add_row"
                                                         >Add More</button>
                                                </div>
                                            </div>

                                            </div> --}}

                                           
                                            {{-- <div class="col-md-10 " style="">
                                                <table class="items_table table table-bordered width80" id="items_table">
                                                    <thead>
                                                        <tr class="filters">
                                                            <th></th>
                                                            <th>Document Name</th>
                                                     
                                                            <th>Documents </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="add_more">
                                                    </tbody>
                                                </table>
                                                <button type="button" class="delete-row btn btn-danger"
                                                    style="margin-left: 80%; margin-top: 5px;">Delete Row</button>
                                            </div>

                                            
                                     
                                            <div class="col-md-3" style="padding:8px"><br>
                                                <button type="submit" class=" btn btn-primary"><i
                                                        class="fadeIn animated bx bx-plus"></i> Submit </button>
                                            </div>


                                        </form> --}}


                                            <div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Add new</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                    <div class="modal-body">
                                                                
                                                        <form class="row g-2" action="{{ route('areainsert') }}" method="post">
                                                            @csrf
                                                            {{-- <input type="text" name="id" value="{{$location->id}}"> --}}
                                                            <div class="row">
                                                            
                                                                <div class="col-md-6" >
                                                                    <label class="form-label">Locations<span style="color:red">*</span></label>
                                                                    <select class="form-select mb-3 location" aria-label="Default select example"
                                                                    name="location_id" id="loc_ajax">
                
                                                                    <option value="">Select Location</option>
                                                                    @foreach ($loc as $loc)
                                                                        <option value="{{ $loc->id }}"> {{ $loc->locations }}
                                                                        </option>
                                                                    @endforeach
                
                                                                </select>
                                                                </div>
                     
                                                                <div class="col-md-6">
                                                                    <label for="inputFirstName" class="form-label">Area<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" id="area_ajax"
                                                                        placeholder="Area" name="area" required>
                                                                </div>
                        
                                                                 

                                                               
                                                            </div>
                                            
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" id="update">Save changes</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>
                                       
                                       



                                    </div>

                                </div>


                            </div>

                    

                        <div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
                            <div class="page-content">

                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Ongoing Valuations</h5>
                                    </div>

                                    <div class="font-5 ms-auto">
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('addnew') }}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleLargeModal">New Valuations</button></a>
                                          
                                        </div>

                                        <div class="col">
                                            <!-- Button trigger modal -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleLargeModal1" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Valuation for AASIF YUSUF SHAIKH
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="post" action="{{ route('ongoingmodel') }}">
@csrf
                                                            <input type="hidden" id="addnew_id" name="addnew_id">

                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <h5 align="center">Valuation Details</h5>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-3">

                                                                            <label><b>Valuation Id</b></label><br>
                                                                            <label id="valuation_id"></label>


                                                                        </div>

                                                                        <div class="col-md-3">

                                                                            <label><b>Field Executive</b></label><br>
                                                                            <label  id="modalfield_executive"></label>


                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <label><b>Client</b></label><br>
                                                                            <label  id="client"></label>


                                                                        </div>

                                                                        <div class="col-md-2">

                                                                            <label><b>Due Date</b></label><br>
                                                                            <label style="color: red;"  id="modeldate"></label>


                                                                        </div>




                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button "
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                    View More Details
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="headingOne"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="table-responsive">
                                                                                        <table
                                                                                            class="table table-bordered">

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Location</label>
                                                                                                    <p id="modallocation"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Area</label>
                                                                                                    <p id="modalarea"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Product</label>
                                                                                                    <p id="modalproduct">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <label id="contact_no"></label>
                                                                                                </td>

                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p id="alt_contact_no"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address of
                                                                                                        Individual</label>
                                                                                                    <p id="alt_address">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>City</label>
                                                                                                    <p id="city"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>State</label>
                                                                                                    <p id="state"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Pincode</label>
                                                                                                    <p id="pincode"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Latitude</label>
                                                                                                    <p id="latitute"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Longitude</label>
                                                                                                    <p id="longitute"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Tags</label>
                                                                                                    <p id="tags"></p>
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Comment /
                                                                                                        Remarks</label>
                                                                                                    <p id="comment"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                                {{-- <div class="col-md-5">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h5>Task</h5>
                                                                            <hr>
                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault1">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault1">Get
                                                                                        Appointment</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault">Visit
                                                                                        Site</label>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault2">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault2">Do
                                                                                        Valuations</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault3">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault3">Upload
                                                                                        Images</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault33">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault33">Finish
                                                                                        Project</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                
                                                            <div class="row">

                                                                <div class="col-md-12">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h6>VALUATION DOCUMENTS </h6>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <label>Document Name</label><label id="docnamemodel"></label>
                                                                                    <label>Document </label>
                                                                                    <label><img src=" " id="img"></label>
                                                                                   
                                    
                                                                                </div>
                                                                            </div>
                                                                            

                                                                        </div>
                                                                        
                                                                        <div class="media align-items-center">


                                                                            {{-- <div class="card-body"
                                                                                style="padding: 0.1rem;">
                                                                                <div class="list-group">



                                                                                    <div class="col-md-10 " style="">
                                                                                        <table class="items_table table table-bordered width80" id="items_table">
                                                                                            <thead>
                                                                                                <tr class="filters">
                                                                                                    <th></th>
                                                                                                    <th>Document Name</th>
                                                                                             
                                                                                                    <th>Documents </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody id="add_more">
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <button type="button" class="delete-row2 btn btn-danger"
                                                                                            style="margin-left: 80%; margin-top: 5px;">Delete Row</button>
                                                                                    </div>

                                                                                </div>
                                                                            </div> --}}




                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="row ">
                                                                <div class="col-md-5 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                IMAGES &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect waves-light m-1"
                                                                                    data-toggle="modal"
                                                                                    data-target="#formemodal2"> <i
                                                                                        class="fa fa-plus"></i>
                                                                                    <span>UPLOAD
                                                                                        IMAGES</span> </button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

{{-- 
                                                                <div class="col-md-6 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                REMINDERS &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleVerticallycenteredModal"><i
                                                                                        class="lni lni-circle-plus"></i>New
                                                                                    Reminder</button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                            
{{-- 
                                                            <div class="col-md-12 card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <div class="card-header text-uppercase ">
                                                                            DISCUSSIONS &nbsp;
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp; &nbsp
                                                                            <br class="d-md-none">

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            <div class="card-body">
                                                                                <div class="list-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <textarea class="form-control" id="inputAddress" placeholder="Enter Comments..." rows="3"></textarea>

                                                                                        </div>
                                                                                        <div class="col-md-2">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Send</button>
                                                                                        </div>
                                                                                    </div>





                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                           
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr />
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table id="example" class="table table-striped table-bordered">

                                                <thead>
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Valuation For</th>
                                                        <th>Location</th>
                                                        <th>Client</th>
                                                        <th>Assigned</th>
                                                        <th>Status</th>
                                                        {{-- <th>View</th> --}}

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($ongoing as $ongoing)
                                                            
                                                       
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $ongoing->firstname }}</td>
                                                        <td>{{ $ongoing->locations }}</td>
                                                        <td>{{ $ongoing->bankname }}</td>
                                                        <td>{{ $ongoing->created_at }}</td>
                                                        <td>{{ $ongoing->status }}</td>
                                                        {{-- <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal1"
                                                                class="btn1 btn-outline-success view" id="{{ $ongoing->id }}"><i
                                                                    class="lni lni-remove-file"></i></button>
                                                        </td> --}}
                                                    </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            </div>
                        </div>

                        {{-- end of ongoing --}}

                        {{-- Start of completed --}}


                        <div class="tab-pane fade" id="primary-pills-complete" role="tabpanel">
                            <div class="page-content">

                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Completed </h5>
                                    </div>

                                    <div class="font-5 ms-auto">
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('addnew') }}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleLargeModal">New Valuations</button></a>
                                          
                                        </div>

                                        <div class="col">
                                            <!-- Button trigger modal -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleLargeModal2" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Valuation for AASIF YUSUF SHAIKH
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="post" action="{{ route('ongoingmodel') }}">
@csrf
                                                            <input type="hidden" id="addnew_id" name="addnew_id">

                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <h5 align="center">Valuation Details</h5>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-3">

                                                                            <label><b>Valuation Id</b></label><br>
                                                                            <label id="valuation_id1"></label>


                                                                        </div>

                                                                        <div class="col-md-3">

                                                                            <label><b>Field Executive</b></label><br>
                                                                            <label  id="modalfield_executive1"></label>


                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <label><b>Client</b></label><br>
                                                                            <label  id="client1"></label>


                                                                        </div>

                                                                        <div class="col-md-2">

                                                                            <label><b>Due Date</b></label><br>
                                                                            <label style="color: red;"  id="modeldate1"></label>


                                                                        </div>




                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button "
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                    View More Details
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="headingOne"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="table-responsive">
                                                                                        <table
                                                                                            class="table table-bordered">

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Location</label>
                                                                                                    <p id="modallocation1"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Area</label>
                                                                                                    <p id="modalarea1"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Product</label>
                                                                                                    <p id="modalproduct1">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <label id="contact_no1"></label>
                                                                                                </td>

                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p id="alt_contact_no1"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address of
                                                                                                        Individual</label>
                                                                                                    <p id="alt_address1">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>City</label>
                                                                                                    <p id="city1"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>State</label>
                                                                                                    <p id="state1"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Pincode</label>
                                                                                                    <p id="pincode1"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Latitude</label>
                                                                                                    <p id="latitute1"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Longitude</label>
                                                                                                    <p id="longitute1"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Tags</label>
                                                                                                    <p id="tags1"></p>
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Comment /
                                                                                                        Remarks</label>
                                                                                                    <p id="comment1"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                {{-- <div class="col-md-5">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h5>Task</h5>
                                                                            <hr>
                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault1">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault1">Get
                                                                                        Appointment</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault">Visit
                                                                                        Site</label>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault2">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault2">Do
                                                                                        Valuations</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault3">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault3">Upload
                                                                                        Images</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault33">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault33">Finish
                                                                                        Project</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="col-md-12">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h6>VALUATION DOCUMENTS </h6>
                                                                                </div>

                                                                                <label>Documents Name</label>
                                                                                <label>Documents</label>
                                                                                
                                                                            </div>
                                                                            <hr>

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            {{-- <div class="card-body"
                                                                                style="padding: 0.1rem;">
                                                                                <div class="list-group">



                                                                                    <a href="assets/images/upload/Tech Valuation (17).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (17).pdf">Tech
                                                                                        Valuation (17).pdf</a><a
                                                                                        href="assets/images/upload/Tech Valuation (16).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (16).pdf">Tech
                                                                                        Valuation (16).pdf</a><a
                                                                                        href="assets/images/upload/Tech Valuation (15).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (15).pdf">Tech
                                                                                        Valuation (15).pdf</a><a
                                                                                        href="assets/images/upload/Dinanath sale deed 1.pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Dinanath sale deed 1.pdf">Dinanath
                                                                                        sale deed 1.pdf</a>

                                                                                </div>
                                                                            </div>
 --}}



                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="row ">
                                                                <div class="col-md-5 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                IMAGES &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect waves-light m-1"
                                                                                    data-toggle="modal"
                                                                                    data-target="#formemodal2"> <i
                                                                                        class="fa fa-plus"></i>
                                                                                    <span>UPLOAD
                                                                                        IMAGES</span> </button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

{{-- 
                                                                <div class="col-md-6 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                REMINDERS &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleVerticallycenteredModal"><i
                                                                                        class="lni lni-circle-plus"></i>New
                                                                                    Reminder</button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                           
{{-- 
                                                            <div class="col-md-12 card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <div class="card-header text-uppercase ">
                                                                            DISCUSSIONS &nbsp;
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp; &nbsp
                                                                            <br class="d-md-none">

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            <div class="card-body">
                                                                                <div class="list-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <textarea class="form-control" id="inputAddress" placeholder="Enter Comments..." rows="3"></textarea>

                                                                                        </div>
                                                                                        <div class="col-md-2">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Send</button>
                                                                                        </div>
                                                                                    </div>





                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                               
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr />
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table id="example" class="table table-striped table-bordered">

                                                <thead>
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Valuation For</th>
                                                        <th>Location</th>
                                                        <th>Client</th>
                                                        <th>Assigned</th>
                                                        <th>Status</th>
                                                        <th>View</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($completed as $completed)
                                                            
                                                       
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $completed->firstname }}</td>
                                                        <td>{{ $completed->locations }}</td>
                                                        <td>{{ $completed->bankname }}</td>
                                                        <td>{{ $completed->created_at }}</td>
                                                        <td>{{ $completed->status }}</td>
                                                        <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal2"
                                                                class="btn1 btn-outline-success view1" id="{{ $completed->id }}"><i
                                                                    class="lni lni-remove-file"></i></button>
                                                        </td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            </div>
                        </div>


                        
                        {{-- end of completed --}}


                        {{-- Start of Cancelled --}}

                        <div class="tab-pane fade" id="primary-pills-cancel" role="tabpanel">
                            <div class="page-content">

                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Cancelled </h5>
                                    </div>

                                    <div class="font-5 ms-auto">
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('addnew') }}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleLargeModal">New Valuations</button></a>
                                          
                                        </div>

                                        <div class="col">
                                            <!-- Button trigger modal -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleLargeModal3" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Valuation for AASIF YUSUF SHAIKH
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="post" action="{{ route('ongoingmodel') }}">
@csrf
                                                            <input type="hidden" id="addnew_id" name="addnew_id">

                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <h5 align="center">Valuation Details</h5>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-3">

                                                                            <label><b>Valuation Id</b></label><br>
                                                                            <label id="valuation_id2"></label>


                                                                        </div>

                                                                        <div class="col-md-3">

                                                                            <label><b>Field Executive</b></label><br>
                                                                            <label  id="modalfield_executive2"></label>


                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <label><b>Client</b></label><br>
                                                                            <label  id="client2"></label>


                                                                        </div>

                                                                        <div class="col-md-2">

                                                                            <label><b>Due Date</b></label><br>
                                                                            <label style="color: red;"  id="modeldate2"></label>


                                                                        </div>




                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button "
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                    View More Details
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="headingOne"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="table-responsive">
                                                                                        <table
                                                                                            class="table table-bordered">

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Location</label>
                                                                                                    <p id="modallocation2"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Area</label>
                                                                                                    <p id="modalarea2"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Product</label>
                                                                                                    <p id="modalproduct2">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <label id="contact_no2"></label>
                                                                                                </td>

                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p id="alt_contact_no2"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address of
                                                                                                        Individual</label>
                                                                                                    <p id="alt_address2">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>City</label>
                                                                                                    <p id="city2"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>State</label>
                                                                                                    <p id="state2"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Pincode</label>
                                                                                                    <p id="pincode2"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Latitude</label>
                                                                                                    <p id="latitute2"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Longitude</label>
                                                                                                    <p id="longitute2"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Tags</label>
                                                                                                    <p id="tags2"></p>
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Comment /
                                                                                                        Remarks</label>
                                                                                                    <p id="comment2"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                {{-- <div class="col-md-5">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h5>Task</h5>
                                                                            <hr>
                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault1">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault1">Get
                                                                                        Appointment</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault">Visit
                                                                                        Site</label>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault2">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault2">Do
                                                                                        Valuations</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault3">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault3">Upload
                                                                                        Images</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault33">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault33">Finish
                                                                                        Project</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="col-md-12">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h6>VALUATION DOCUMENTS </h6>
                                                                                </div>

                                                                                <label>Documents Name</label>
                                                                                <label>Documents</label>
                                                                            </div>
                                                                            <hr>

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            {{-- <div class="card-body"
                                                                                style="padding: 0.1rem;">
                                                                                <div class="list-group">



                                                                                    <a href="assets/images/upload/Tech Valuation (17).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (17).pdf">Tech
                                                                                        Valuation (17).pdf</a><a
                                                                                        href="assets/images/upload/Tech Valuation (16).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (16).pdf">Tech
                                                                                        Valuation (16).pdf</a><a
                                                                                        href="assets/images/upload/Tech Valuation (15).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (15).pdf">Tech
                                                                                        Valuation (15).pdf</a><a
                                                                                        href="assets/images/upload/Dinanath sale deed 1.pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Dinanath sale deed 1.pdf">Dinanath
                                                                                        sale deed 1.pdf</a>

                                                                                </div>
                                                                            </div> --}}




                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="row ">
                                                                <div class="col-md-5 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                IMAGES &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect waves-light m-1"
                                                                                    data-toggle="modal"
                                                                                    data-target="#formemodal2"> <i
                                                                                        class="fa fa-plus"></i>
                                                                                    <span>UPLOAD
                                                                                        IMAGES</span> </button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

{{-- 
                                                                <div class="col-md-6 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                REMINDERS &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleVerticallycenteredModal"><i
                                                                                        class="lni lni-circle-plus"></i>New
                                                                                    Reminder</button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                            
{{-- 
                                                            <div class="col-md-12 card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <div class="card-header text-uppercase ">
                                                                            DISCUSSIONS &nbsp;
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp; &nbsp
                                                                            <br class="d-md-none">

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            <div class="card-body">
                                                                                <div class="list-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <textarea class="form-control" id="inputAddress" placeholder="Enter Comments..." rows="3"></textarea>

                                                                                        </div>
                                                                                        <div class="col-md-2">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Send</button>
                                                                                        </div>
                                                                                    </div>





                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr />
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table id="example" class="table table-striped table-bordered">

                                                <thead>
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Valuation For</th>
                                                        <th>Location</th>
                                                        <th>Client</th>
                                                        <th>Assigned</th>
                                                        <th>Status</th>
                                                        <th>View</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($cancelled as $cancelled)
                                                            
                                                       
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $cancelled->firstname }}</td>
                                                        <td>{{ $cancelled->locations }}</td>
                                                        <td>{{ $cancelled->bankname }}</td>
                                                        <td>{{ $cancelled->created_at }}</td>
                                                        <td>{{ $cancelled->status }}</td>
                                                        <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal3"
                                                                class="btn1 btn-outline-success view2" id="{{ $cancelled->id }}"><i
                                                                    class="lni lni-remove-file"></i></button>
                                                        </td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            </div>
                        </div>


                        {{-- end of Cancelled --}}


                        {{-- Start of Pending --}}

                        <div class="tab-pane fade" id="primary-pills-pending" role="tabpanel">
                            <div class="page-content">

                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Pending </h5>
                                    </div>

                                    <div class="font-5 ms-auto">
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('addnew') }}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleLargeModal">New Valuations</button></a>
                                          
                                        </div>

                                        <div class="col">
                                            <!-- Button trigger modal -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleLargeModal5" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Valuation for AASIF YUSUF SHAIKH
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="post" action="{{ route('ongoingmodel') }}">
@csrf
                                                            <input type="hidden" id="addnew_id" name="addnew_id">

                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <h5 align="center">Valuation Details</h5>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-3">

                                                                            <label><b>Valuation Id</b></label><br>
                                                                            <label id="valuation_id3"></label>


                                                                        </div>

                                                                        <div class="col-md-3">

                                                                            <label><b>Field Executive</b></label><br>
                                                                            <label  id="modalfield_executive3"></label>


                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <label><b>Client</b></label><br>
                                                                            <label  id="client3"></label>


                                                                        </div>

                                                                        <div class="col-md-2">

                                                                            <label><b>Due Date</b></label><br>
                                                                            <label style="color: red;"  id="modeldate3"></label>


                                                                        </div>




                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button "
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                    View More Details
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="headingOne"
                                                                                data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="table-responsive">
                                                                                        <table
                                                                                            class="table table-bordered">

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Location</label>
                                                                                                    <p id="modallocation3"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Area</label>
                                                                                                    <p id="modalarea3"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Product</label>
                                                                                                    <p id="modalproduct3">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <label id="contact_no3"></label>
                                                                                                </td>

                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p id="alt_contact_no3"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address of
                                                                                                        Individual</label>
                                                                                                    <p id="alt_address3">
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>City</label>
                                                                                                    <p id="city3"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>State</label>
                                                                                                    <p id="state3"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Pincode</label>
                                                                                                    <p id="pincode3"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Latitude</label>
                                                                                                    <p id="latitute3"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Longitude</label>
                                                                                                    <p id="longitute3"></p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Tags</label>
                                                                                                    <p id="tags3"></p>
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Comment /
                                                                                                        Remarks</label>
                                                                                                    <p id="comment3"></p>
                                                                                                </td>
                                                                                            </tr>


                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                {{-- <div class="col-md-5">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h5>Task</h5>
                                                                            <hr>
                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault1">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault1">Get
                                                                                        Appointment</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault">Visit
                                                                                        Site</label>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault2">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault2">Do
                                                                                        Valuations</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault3">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault3">Upload
                                                                                        Images</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault33">
                                                                                    <label class="form-check-label"
                                                                                        for="flexCheckDefault33">Finish
                                                                                        Project</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="col-md-12">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h6>VALUATION DOCUMENTS </h6>
                                                                                </div>

                                                                                <label>Documents Name</label>
                                                                                <label>Documents</label>
                                                                            </div>
                                                                            <hr>

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            {{-- <div class="card-body"
                                                                                style="padding: 0.1rem;">
                                                                                <div class="list-group">



                                                                                    <a href="assets/images/upload/Tech Valuation (17).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (17).pdf">Tech
                                                                                        Valuation (17).pdf</a><a
                                                                                        href="assets/images/upload/Tech Valuation (16).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (16).pdf">Tech
                                                                                        Valuation (16).pdf</a><a
                                                                                        href="assets/images/upload/Tech Valuation (15).pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Tech Valuation (15).pdf">Tech
                                                                                        Valuation (15).pdf</a><a
                                                                                        href="assets/images/upload/Dinanath sale deed 1.pdf"
                                                                                        class="list-group-item list-group-item-action"
                                                                                        download="Dinanath sale deed 1.pdf">Dinanath
                                                                                        sale deed 1.pdf</a>

                                                                                </div>
                                                                            </div> --}}




                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="row ">
                                                                <div class="col-md-5 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                IMAGES &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect waves-light m-1"
                                                                                    data-toggle="modal"
                                                                                    data-target="#formemodal2"> <i
                                                                                        class="fa fa-plus"></i>
                                                                                    <span>UPLOAD
                                                                                        IMAGES</span> </button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

{{-- 
                                                                <div class="col-md-6 card">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <div class="card-header text-uppercase ">
                                                                                REMINDERS &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp
                                                                                <br class="d-md-none">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#exampleVerticallycenteredModal"><i
                                                                                        class="lni lni-circle-plus"></i>New
                                                                                    Reminder</button>



                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                           
{{-- 
                                                            <div class="col-md-12 card">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <div class="card-header text-uppercase ">
                                                                            DISCUSSIONS &nbsp;
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp; &nbsp
                                                                            <br class="d-md-none">

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            <div class="card-body">
                                                                                <div class="list-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <textarea class="form-control" id="inputAddress" placeholder="Enter Comments..." rows="3"></textarea>

                                                                                        </div>
                                                                                        <div class="col-md-2">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Send</button>
                                                                                        </div>
                                                                                    </div>





                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr />
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table id="example" class="table table-striped table-bordered">

                                                <thead>
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Valuation For</th>
                                                        <th>Location</th>
                                                        <th>Client</th>
                                                        <th>Assigned</th>
                                                        <th>Status</th>
                                                        <th>View</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach ($pending as $pending)
                                                            
                                                       
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $pending->firstname }}</td>
                                                        <td>{{ $pending->locations }}</td>
                                                        <td>{{ $pending->bankname }}</td>
                                                        <td>{{ $pending->created_at }}</td>
                                                        <td>{{ $pending->status }}</td>
                                                        <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal5"
                                                                class="btn1 btn-outline-success view3" id="{{ $pending->id }}"><i
                                                                    class="lni lni-remove-file"></i></button>
                                                        </td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            </div>
                        </div>


                        {{-- end of pending --}}


                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

<script>
    $(document).ready(function() {
        $("#location").on('change', function() {
                $.ajax({
                    url: "{{route('get_area_id')}}",
                    data: {
                        id: $(this).val(),
                    },
                    success: function(data) {
                        $("#area").empty();
                        $("#area").append(' <option selected>Select </option>');
                        $.each(data, function(a, b)
                         {
                            $("#area").append('<option value="' + b.id + '">' + b.area + '</option>');
                        })
                        // $("#area").selectpicker('refresh');
                    }
                });
            })
    
        });
    
        </script>

    <script>
         $(document).ready(function() {
            //to get area  wise role names

            $("#area").on('change', function() {
                    //alert($(this).val());
                    $.ajax({
                        url: "{{ route('get_name_id') }}",
                        type: 'get',
                        data: {
                            field: $(this).val()

                        },
                        cache: false,
                        success: function(result) {

                            $("#field").empty();
                           // $("#field").append(' <option value=""> Select </option>');
                            $.each(result, function(a, b) {
                                
                                //27 is id for field executive role in user_roles table
                                if (b.role_name_id == 27)
                                 {

                                    $("#field").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                //29 is id for assitant valuer role in user_roles table
                                if (b.role_name_id == 29) 
                                {
                                    $("#assist").empty();

                                    $("#assist").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }
                            
                                //30 is id for technical manager in user_roles table
                                if (b.role_name_id == 30) 
                                {
                                    $("#tech").empty();

                                    $("#tech").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                //31 is id for technical head in user_roles table
                                if (b.role_name_id == 31)
                                 {
                                    $("#tech_head").empty();

                                    $("#tech_head").append(' <option value="' +
                                        b.id + '">' + b.name + '</option>');
                                }

                            })
                        }
                    })
                });

    
//ajax code for insertion and  not refreshing the page
 $("#update").click(function(e) {

  e.preventDefault();
  $("#exampleScrollableModal").modal("hide");
   $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
  $.ajax({
    type:'POST',
    data:{
        location_id:$("#loc_ajax").val(),
area:$("#area_ajax").val(),
    },
    url:'{{ route('areainsert_ajax') }}',
    success:function(data) {
      console.table(data);
      $("#area").empty();
      $("#area").append(' <option value=""> Select </option>');
                        $.each(data, function(a, b) {
                            $("#area").append(' <option value="' + b.id + '">' + b
                                .area + '</option>');

                        })
    }
  });
});

        })
</script>

    



<script>
    $(document).ready(function()
    {
// $(".schedule").on('click',function(){
$(".view").on('click',function(){
    $("#addnew_id").val($(this).attr('id'));
        $.ajax({
url: "{{route('ongoingmodelvalue')}}",
type:'get',
data:{
id:$(this).attr('id')
},
cache: false,
success: function(result){
    var lable=result.onview;
    var value_adddoc=result.value_adddoc;
   
$("#valuation_id").text(lable.valuation_id);
$("#modalfield_executive").text(lable.field_executive);
$("#client").text(lable.bankname);
$("#modeldate").text(lable.date);
$("#modallocation").text(lable.locations);
$("#modalproduct").text(lable.products);
$("#modalarea").text(lable.area);
$("#contact_no").text(lable.contact_no);
$("#alt_contact_no").text(lable.alt_cont_no);
$("#address").text(lable.alt_address);
$("#city").text(lable.city);
$("#state").text(lable.state);
$("#pincode").text(lable.pincode);
$("#latitute").text(lable.latitute);
$("#longitute").text(lable.longitude);
$("#tags").text(lable.tags);
$("#comment").text(lable.comment);

console.log(value_adddoc[0].upd);
$('#img').attr('src',value_adddoc[0].upd)
$('#document_name').text(value_adddoc[0].docnamemodel)
$("#document_area").empty();
$.each(value_adddoc,function (a,b){
    $("#document_area").append('<img height="50" width="50" src="'+a.upd+'"> <label>'+a.docnamemodel+'<label>');
})
// $("#ongoingdocname").text(value_adddoc.docname[]);
// $("#ongoingdoc").text(value_adddoc.upd[]);



}
});
})
    })
</script>


{{-- completed --}}
<script>
    $(document).ready(function()
    {
// $(".schedule").on('click',function(){
$(".view1").on('click',function(){
    $("#addnew_id").val($(this).attr('id'));
        $.ajax({
url: "{{route('completedmodelvalue')}}",
type:'get',
data:{
id:$(this).attr('id')
},
cache: false,
success: function(result){
    var lable=result.onview;
    var value_adddoc=result.value_adddoc;
   
$("#valuation_id1").text(lable.valuation_id);
$("#modalfield_executive1").text(lable.field_executive);
$("#client1").text(lable.bankname);
$("#modeldate1").text(lable.date);
$("#modallocation1").text(lable.locations);
$("#modalproduct1").text(lable.products);
$("#modalarea1").text(lable.area);
$("#contact_no1").text(lable.contact_no);
$("#alt_contact_no1").text(lable.alt_cont_no);
$("#address1").text(lable.alt_address);
$("#city1").text(lable.city);
$("#state1").text(lable.state);
$("#pincode1").text(lable.pincode);
$("#latitute1").text(lable.latitute);
$("#longitute1").text(lable.longitude);
$("#tags1").text(lable.tags);
$("#comment1").text(lable.comment);

}
});
})
    })
</script>


{{-- Cancelled --}}
<script>
    $(document).ready(function()
    {
// $(".schedule").on('click',function(){
$(".view2").on('click',function(){
    $("#addnew_id").val($(this).attr('id'));
        $.ajax({
url: "{{route('cancelledmodelvalue')}}",
type:'get',
data:{
id:$(this).attr('id')
},
cache: false,
success: function(result){
    var lable=result.onview;
    var value_adddoc=result.value_adddoc;
   
$("#valuation_id2").text(lable.valuation_id);
$("#modalfield_executive2").text(lable.field_executive);
$("#client2").text(lable.bankname);
$("#modeldate2").text(lable.date);
$("#modallocation2").text(lable.locations);
$("#modalproduct2").text(lable.products);
$("#modalarea2").text(lable.area);
$("#contact_no2").text(lable.contact_no);
$("#alt_contact_no2").text(lable.alt_cont_no);
$("#address2").text(lable.alt_address);
$("#city2").text(lable.city);
$("#state2").text(lable.state);
$("#pincode2").text(lable.pincode);
$("#latitute2").text(lable.latitute);
$("#longitute2").text(lable.longitude);
$("#tags2").text(lable.tags);
$("#comment2").text(lable.comment);

}
});
})
    })
</script>

{{-- pending --}}

<script>
    $(document).ready(function()
    {
// $(".schedule").on('click',function(){
$(".view3").on('click',function(){
    $("#addnew_id").val($(this).attr('id'));
        $.ajax({
url: "{{route('pendingmodelvalue')}}",
type:'get',
data:{
id:$(this).attr('id')
},
cache: false,
success: function(result){
    var lable=result.onview;
    var value_adddoc=result.value_adddoc;
   
$("#valuation_id3").text(lable.valuation_id);
$("#modalfield_executive3").text(lable.field_executive);
$("#client3").text(lable.bankname);
$("#modeldate3").text(lable.date);
$("#modallocation3").text(lable.locations);
$("#modalproduct3").text(lable.products);
$("#modalarea3").text(lable.area);
$("#contact_no3").text(lable.contact_no);
$("#alt_contact_no3").text(lable.alt_cont_no);
$("#address3").text(lable.alt_address);
$("#city3").text(lable.city);
$("#state3").text(lable.state);
$("#pincode3").text(lable.pincode);
$("#latitute3").text(lable.latitute);
$("#longitute3").text(lable.longitude);
$("#tags3").text(lable.tags);
$("#comment3").text(lable.comment);

}
});
})
    })
</script>
   




<script>
    $(document).ready(function() {
        setTimeout(() => {
            console.clear();
        }, 1500);

        var src;
        var blob;
        $("#image").on('change', function(e) {
            src = URL.createObjectURL(e.target.files[0]);
            let file = e.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                blob = e.target.result;
            };
        })


        //append multiple document
        $("#add_row").click(function() {

            var category = $('#document1').val();
           // var tag = $('#tag option:selected').text();
            var image_src = src;
            if (category && image_src) {
                var markup =
                    '<tr><td><input type="checkbox" class="del_check1" name="record"></td><td><input type="hidden" value="' + $('#document1').val() +'" name="document_name[]"><input type="text" class="form-control"  document_name[] value="' + category +
                    '" ></td><td><input name="image[]" type="hidden" value="' + blob + '"><a target="_blank" href="' + image_src + '"><img style="height:100px;width:auto;" src="' + image_src + '"></a></td></tr>';

                $("#add_more").append(markup);
                $('.first_input').val('');
                src = null;
                blob = null;
                $("#document1").val('').change();
                //$("#tag").val('').change();
            }

        });
        $(".delete-row").click(function() {
            $('.del_check1').each(function() {
                // alert();
                if ($(this).is(":checked")) {
                    var perticular = $(this).parents("tr").find('input[name="perticular[]"]')
                        .val();
                    var price = $(this).parents("tr").find('input[name="price[]"]').val();
                    var minus_amount = parseFloat(price);
                    var old_amount = $("#total_amount").val();
                    $("#total_amount").val(parseFloat(old_amount) - parseFloat(minus_amount));
                    $(this).parents("tr").remove();

                }
            });
        });

    });
</script>


    
    {{-- // $(document).ready(function() {
        //     //to get location 

        //     $("#location").on('change', function() {
        //         $.ajax({
        //             url: "{{ route('get_area_by_id') }}",
        //             type: 'get',
        //             data: {
        //                 area: $(this).val()
        //             },
        //             cache: false,
        //             success: function(result) {
        //                 console.log(result);
        //                 $("#area").empty();
        //                 $("#area").append(' <option value=""> Select </option>');
        //                 $.each(result, function(a, b) {
        //                     $("#area").append(' <option value="' + b.id + '">' + b
        //                         .area + '</option>');
        //                 })
        //             }
        //         }); --}}

    <!--end page wrapper -->
@stop

