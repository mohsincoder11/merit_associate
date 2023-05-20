@extends('layout')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">


                            {{-- Admin --}}
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Admin
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">




                                            <hr>

                             <form class="row g-2" style="border:#cccccc solid 2px;" method="post"
                                                enctype="multipart/form-data" action="{{ route('addnewupdate') }}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $edit_data->id }}">

                                                <table width="100%" style="margin-top:0;">
                                                    <tr border="1" width="100%">
                                                        <td border="1" width="100%"
                                                            style="background-color: #D9FFD9; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                            colspan="6"><strong>&nbsp;&nbsp;New Valuation</strong></td>
                                                    </tr>
                                                    <tr border="1" width="100%">
                                                        <td border="1" width="15%">
                                                            <div style="padding:3px;">
                                                                <label for="inputFirstName" class="form-label">First
                                                                    Name</label>
                                                                <input class="form-control mb-3" type="text"
                                                                    name="firstname" placeholder="First Name"
                                                                    aria-label="default input example"
                                                                    value="{{ $edit_data->firstname }}">
                                                            </div>
                                                        </td>
                                                        <td border="1" width="15%">
                                                            <div style="padding:3px;">
                                                                <label for="inputFirstName" class="form-label">Middle
                                                                    Name</label>
                                                                <input class="form-control mb-3" type="text"
                                                                    name="middelname" placeholder="Middle Name"
                                                                    aria-label="default input example"
                                                                    value="{{ $edit_data->middelname }}">
                                                            </div>
                                                        </td>
                                                        <td border="1" width="15%">
                                                            <div style="padding:2px;">
                                                                <label for="inputFirstName" class="form-label">Last
                                                                    Name</label>
                                                                <input class="form-control mb-3" type="text"
                                                                    name="lastname" placeholder="Last Name"
                                                                    aria-label="default input example"
                                                                    value="{{ $edit_data->lastname }}">
                                                            </div>
                                                        </td>
                                                        <td border="1" width="10%">
                                                            <div style="padding:2px;">
                                                                <label for="inputFirstName" class="form-label">Valuation
                                                                    ID</label>
                                                                <input class="form-control mb-3" type="text"
                                                                    name="valuation_id" placeholder="Valuation ID"
                                                                    aria-label="default input example"
                                                                    value="{{ $edit_data->valuation_id }}">
                                                            </div>
                                                        </td>
                                                        <td border="1" width="20%">
                                                            <div style="padding:2px;">
                                                                <label for="inputFirstName" class="form-label"
                                                                    style="margin-top:15px;">Select Client</label>
                                                                <select class="form-select mb-3"
                                                                    aria-label="Default select example"
                                                                    name="associatesbanks_id">
                                                                    <option selected>Select Client</option>
                                                                    @foreach ($associatesbank as $associatesbank)
                                                                        <option value="{{ $associatesbank->id }}"
                                                                            @if ($edit_data->associatesbanks_id == $associatesbank->id) selected @endif>
                                                                            {{ $associatesbank->bankname }} </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td border="1" width="20%">
                                                            <div style="padding:2px;">
                                                                <label for="inputFirstName" class="form-label"
                                                                    style="margin-top:15px;">Select Product</label>
                                                                <select class="form-select mb-3"
                                                                    aria-label="Default select example" name="product_id">
                                                                    <option selected>Select Product</option>
                                                                    @foreach ($product as $product)
                                                                        <option value="{{ $product->id }}"
                                                                            @if ($edit_data->product_id == $product->id) selected @endif>
                                                                            {{ $product->products }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <table width="100%" style="margin-top:0;">
                                                    <tr border="1" width="100%">
                                                        <td border="1" width="15%">
                                                            <div style="padding:3px;">
                                                                <label for="inputFirstName"
                                                                    class="form-label">Location</label>
                                                                <select class="form-select mb-3 location"
                                                                    aria-label="Default select example" name="location_id"
                                                                    id="location">

                                                                    <option value="">Select Location</option>
                                                                    @foreach ($location as $location)
                                                                        <option value="{{ $location->id }}"
                                                                            @if ($edit_data->location_id == $location->id) selected @endif>
                                                                            {{ $location->locations }}
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
                                                                                        @foreach ($new_location as $new_location)                       
                                                                                        <option value="{{$new_location->id}}" @if ($new_edit->area_id == $new_location->id)  
                                                                                        @endif selected>{{$new_location->area}} </option>
                                                                                        @endforeach
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
                                                                                        @foreach ($all_user as $user)
                                                                                        @if ($user->role_name_id == 27)                            
                                                                                        <option value="{{$user->id}}" @if ($new_edit->user_id == $user->id)  
                                                                                            @endif selected>{{$user->name}} </option>
                                                                                        @endif 
                                                                                        @endforeach
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
                                                                @foreach ($all_user as $user)
                                                                @if ($user->role_name_id == 29)                            
                                                                <option value="{{$user->id}}" @if ($new_edit->user_id == $user->id) @endif selected>{{$user->name}} </option>
                                                                @endif 
                                                                @endforeach
                                    
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
                                                                                        @foreach ($all_user as $user)
                                                                                        @if ($user->role_name_id == 30)                            
                                                                                        <option value="{{$user->id}}" @if ($new_edit->user_id == $user->id) @endif selected>{{$user->name}} </option>
                                                                                        @endif 
                                                                                        @endforeach
                                    
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
                                                                                        @foreach ($all_user as $user)
                                                                                        @if ($user->role_name_id == 31)                            
                                                                                        <option value="{{$user->id}}" @if ($new_edit->user_id == $user->id) @endif selected>{{$user->name}} </option>
                                                                                        @endif 
                                                                                        @endforeach
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
                                                        <label for="inputFirstName" class="form-label">Contact
                                                            Number</label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="Contact Number"
                                                            aria-label="default input example" name="contact_no"
                                                            value="{{ $edit_data->contact_no }}">
                                                    </div>
                                                </td>
                                                <td border="1" width="15%">
                                                    <div style="padding:3px;">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-top:-3px;">Alternate Contact </label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="Alternate Contact Number"
                                                            aria-label="default input example" name="alt_cont_no"
                                                            value="{{ $edit_data->alt_cont_no }}">

                                                    </div>
                                                </td>
                                                <td border="1" width="30%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label">Address of
                                                            Indiviual</label>
                                                        <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="2" name="address">{{ $edit_data->address }}</textarea>
                                                    </div>
                                                </td>
                                                <td border="1" width="15%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-top:-5px;">City</label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="City" name="city"
                                                            aria-label="default input example"
                                                            value="{{ $edit_data->city }}">
                                                    </div>
                                                </td>
                                                <td border="1" width="15%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-top:-5px;">State</label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="State" name="state"
                                                            aria-label="default input example"
                                                            value="{{ $edit_data->state }}">
                                                    </div>
                                                </td>
                                                <td border="1" width="10%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-top:-5px;">Pincode</label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="Pincode" name="pincode"
                                                            aria-label="default input example"
                                                            value="{{ $edit_data->pincode }}">
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
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="Longitude" name="longitude"
                                                            aria-label="default input example"
                                                            value="{{ $edit_data->longitude }}">
                                                    </div>
                                                </td>
                                                <td border="1" width="10%">
                                                    <div style="padding:3px;">
                                                        <label for="inputFirstName" class="form-label">Latitude</label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="Latitude" name="latitute"
                                                            aria-label="default input example"
                                                            value="{{ $edit_data->latitute }}">

                                                    </div>
                                                </td>
                                                {{-- <td border="1" width="10%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label">Tags</label>
                                                        <input class="form-control mb-3" type="text"
                                                            placeholder="Tags" name="tags"
                                                            aria-label="default input example"
                                                            value="{{ $edit_data->tags }}">
                                                    </div>
                                                </td> --}}
                                                <td border="1" width="15%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label">Due Date</label>
                                                        <input type="date" class="form-control" name="date"
                                                            value="{{ $edit_data->date }}">
                                                    </div>
                                                </td>
                                                <td border="1" width="45%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-top:5px;">Comment / Remarks</label>
                                                        <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3" name="comment">{{ $edit_data->comment }}</textarea>
                                                    </div>
                                                </td>
                                                <td border="1" width="10%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-top:15px;">Status</label>
                                                        <select class="form-select mb-3"
                                                            aria-label="Default select example" name="status">
                                                            <option>Select </option>
                                                            <option value="ongoing"
                                                                @if ($edit_data->status == 'ongoing') selected @endif>ongoing
                                                            </option>
                                                            <option value="completed"
                                                                @if ($edit_data->status == 'completed') selected @endif>completed
                                                            </option>
                                                            <option value="cancelled"
                                                                @if ($edit_data->status == 'cancelled') selected @endif>
                                                                cancelled
                                                            </option>
                                                            <option value="pending"
                                                                @if ($edit_data->status == 'pending') selected @endif>pending
                                                            </option>
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
                                                        <label for="inputFirstName" class="form-label">Documents
                                                            Name</label>
                                                        <input type="text" class="form-control" id="document1">
                                                    </div>
                                                </td>
                                                <td border="1" width="20%">
                                                    <div style="padding:2px;">
                                                        <label for="inputFirstName" class="form-label">Upload
                                                            Documents</label>
                                                        <input type="file" class="form-control" id="image"
                                                            accept="">
                                                    </div>
                                                </td>
                                                <td border="1" width="10%">

                                                    <div class="form-group" align="center" style="margin-top:30px;">
                                                        <button type="button" name="action_button"
                                                            class="btn btn-warning " id="add_row"><i
                                                                class='bx bx-plus me-0'></i> Add</button>
                                                    </div>

                                                </td>
                                                <td border="1" width="10%">

                                                    <div class="form-group" align="center" style="margin-top:30px;">
                                                        {{-- <button type="button" class="delete-row  " --}}
                                                        {{-- style=" margin-top: 5px; color:red"><i class="bx bx-trash"></i></button> --}}
                                                        <button type="button" class="btn btn-danger delete-row"><i
                                                                class='bx bx-trash me-0'></i> Delete</button>
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

                                                    <table class="items_table table table-bordered width80"
                                                        id="items_table">
                                                        <thead>
                                                            <tr class="filters">
                                                                <th></th>
                                                                <th>Document Name</th>

                                                                <th>Documents </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="add_more">
{{-- 

                                                            @if (is_array($edit_data->document_name))
                                                                @foreach ($edit_data->document_name as $demo)
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="del_check1"
                                                                                name="record">
                                                                        </td> --}}
                                                                        {{-- <td><input type="hidden" name="category[]"  value="{{$demo}}">
                                                                                    <input type="text" class="form-control"  value="{{$demo}}" >
                                                                                </td> --}}

                                                                        {{-- <td>
                                                                            <input type="text"
                                                                                value="{{ $edit_data->document_name[$loop->index] }}"
                                                                                name="document_name[]"><input
                                                                                type="text" class="form-control"
                                                                                step="0.1"
                                                                                value="{{ $edit_data->document_name[$loop->index] }}">
                                                                        </td> --}}
                                                                        {{-- @json($edit_data->image) --}}
                                                                        {{-- <td>
                                                                            @php
                                                                                $tag = App\Models\Admin\Add_news::whereIn('id', $edit_data->image)
                                                                                    ->pluck('image')
                                                                                    ->toArray();
                                                                                $tag2 = implode(',', $tag);  --}}
                                                                             {{-- // echo json_encode($tag);
                                                                                // exit(); 
                                                                         @endphp --}}
                                                                            {{-- {{ $tag2 }} --}}
                                                                            {{-- <input name="image_files[]" type="hidden"
                                                                                value=""><a target="_blank"
                                                                                href=""><img
                                                                                    style="height:100px;width:auto;"
                                                                                    src="{{ asset('image/New-valuation/' . $edit_data->image[$loop->index]) }}"></a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif  --}}


{{-- @json(count($edit_data->document_name)) --}}

                                                        @if (is_array($edit_data->document_name))
                                                                @foreach ($edit_data->document_name as $demo)

                                                                <tr>
                                                                    <div class="col-md-4">
                                                                        <th><input type="checkbox"
                                                                                class="del_check1" name="record">
                                                                        </th>
                                                                       <th>
                                                                        <input type="hidden" value="{{$edit_data->document_name[$loop->index] }}" name="document_name[]">
                                                                            <input type="text"
                                                                                class="form-control" placeholder=""
                                                                                required
                                                                                value="{{$edit_data->document_name[$loop->index] }}">
                                                                        </th>

                                                                        <th>
<input type="hidden" value="{{$edit_data->image[$loop->index]}}"                                                       name="old_image[]">
{{-- yaha hame old file ke liye input liya loop me hi isliye name array me liya --}}
                                                                          <a href="{{ asset('images/New-valuation/' . $edit_data->image[$loop->index]) }}" download>  {{$edit_data->image[$loop->index] }}
                                                                            </a>
                                                                        </th>
                        
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>




                                        <div style="margin-top:20px; padding:20px;">
                                            <button type="submit" class="btn btn-success"><i
                                                    class='bx bx-trophy me-0'></i> Submit</button>
                                        </div>

                              </form>

                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- end Admin --}}




                        {{-- Field Exceutive --}}

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Feild Executive
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">


                                        <form class="row g-2" class="row g-2" style="border:#cccccc solid 2px;"
                                            method="post" action="{{ route('FE.update') }} "
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $new_edit->id }}">


                                            <div class="card-title d-flex align-items-center"
                                                style="margin:0; padding:0;">
                                                <table width="100%">
                                                    <tr border="1" width="100%">
                                                        <td border="1" width="70%"
                                                            style="background-color: #D9FFD9; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                            colspan="8"><strong>&nbsp;&nbsp;Valuation Report</strong>
                                                        </td>
                                                        {{-- $update ->valuation_id= $request->valuation_id;
                        $update ->valuation_id= $request->valuation_id; --}}
                                                        <td border="1" width="30%"
                                                            style="background-color: #C6F3FF; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                            colspan="8"><strong>&nbsp;&nbsp; <label> Valuation
                                                                    ID:</label><input name="valuation_id"
                                                                    style="border:none"
                                                                    value="{{ $new_edit->valuation_id }}" readonly></h5>
                                                            </strong></td>

                                                    </tr>
                                                </table>


                                            </div>


                                            <table width="100%" style="margin-top:0; ">

                                                <tr border="1" width="100%">

                                                    <td border="1" width="15%" colspan="5">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-bottom: -5px;">Name Of Customer*</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Customer Name" name="name"
                                                            value="{{ $new_edit->name }} {{ $new_edit->lastname }}"
                                                            required>
                                                    </td>

                                                    <td border="1" width="10%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" style="margin-bottom: -5px;"
                                                                class="form-label">Customer Contact*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder=" Contact Number" name="contact_no"
                                                                value="{{ $new_edit->contact_no }}" required>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Property Type*</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything" name="property_type_id"
                                                                required>
                                                                <option value="">Select</option>
                                                                @foreach ($property_type as $property_type)
                                                                    <option value="{{ $property_type->id }}"
                                                                        @if ($new_edit->property_type_id == $property_type->id) selected @endif>
                                                                        {{ $property_type->property }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    {{-- <td border="1" width="25%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label" style="margin-bottom: -5px;">Property Address*</label>
                                                            <input type="text" class="form-control"    name="property_address"  rows="1" name="address" value="" required >
                                                     
                                                        </div>
                                                    </td> --}}
                                                    <td border="1" width="25%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Address*</label>
                                                            <input type="text" class="form-control" rows="1"
                                                                name="address" value="{{ $new_edit->address }}" required>
                                                        </div>
                                                    </td>


                                                </tr>
                                            </table>



                                            <table width="100%" style="margin-top:0;">

                                                <tr border="1" width="100%">

                                                    <td border="1" width="15%" colspan="5">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-bottom: -5px;">Road Name*</label>
                                                        <input type="text" class="form-control"
                                                            placeholder=" Road Name" name="road_name" required
                                                            value="{{ $new_edit->road_name }}">
                                                    </td>

                                                    <td border="1" width="25%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Colony / Area/Nagar*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder=" Colony / Area/Nagar" name="colony" required
                                                                value="{{ $new_edit->colony }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">PIN Code*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder=" PIN Code" name="pin_code"
                                                                value="{{ $new_edit->pin_code }}" required>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Landmark*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Landmark" name="landmark" required
                                                                value="{{ $new_edit->landmark }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">E-Meter No*</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="E-Meter No" name="meter_no" required
                                                                value="{{ $new_edit->meter_no }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="15%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Occupancy Status*</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything" name="occupancy_status"
                                                                required>
                                                                <option value="">Select</option>
                                                                <option value="Occupied" selected>Occupied</option>
                                                                <option value="Vacant" selected>Vacant</option>
                                                                <option value="Under Construction" selected>Under
                                                                    Construction</option>
                                                                <option value="N.A" selected>N.A</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="15%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Occupied By*</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything" name="occupied_by"
                                                                required>
                                                                <option value="">Select</option>
                                                                <option value="Seller Occupied" selected>Seller Occupied
                                                                </option>
                                                                <option value="Self Occupied" selected>Self Occupied
                                                                </option>
                                                                <option value="Tenant Occupied" selected>Tenant Occupied
                                                                </option>
                                                                <option value="cSelf + Tenant" selected>Self + Tenant
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>



                                                </tr>
                                            </table>
                                            &nbsp;





                                            <table width="100%" style="margin-top:0;">
                                                <tr border="1" width="100%">
                                                    <td border="1" width="14%"
                                                        style="background-color: #D9FFD9; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Plot Area
                                                            <br>&nbsp;&nbsp;(Dimention in Feet)</strong></td>
                                                    <td border="1" width="14%"
                                                        style="background-color: #C6F3FF; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Plot Area <br>&nbsp;&nbsp;(Built
                                                            Up Area)</strong></td>
                                                    <td border="1" width="14%"
                                                        style="background-color: #E4CBE4; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Construction Year</strong></td>
                                                    <td border="1" width="14%"
                                                        style="background-color: #FFE8C4; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Four Borders</strong></td>
                                                    <td border="1" width="14%"
                                                        style="background-color: #FFDDEE; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Whether
                                                            <br>&nbsp;&nbsp;Boundaries Matching</strong></td>
                                                    <td border="1" width="14%"
                                                        style="background-color: #E1E1F4; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Side Marginal
                                                            <br>&nbsp;&nbsp;(Distance in Feet)</strong></td>
                                                    <td border="1" width="16%"
                                                        style="background-color: #FFFFCC; color:#000000; padding-top:5px; padding-bottom:5px;"
                                                        colspan="8"><strong>&nbsp;&nbsp;Discription of Property
                                                            <br>&nbsp;&nbsp;(1BHK/2BHK)</strong></td>
                                                </tr>
                                            </table>
                                            <table width="100%" style="margin-top:0;">
                                                <tr border="1" width="100%">

                                                    <td border="1" width="14%">
                                                        <div style="padding:3px;">

                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">East</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="plot_area[]" value="{{ $new_edit->plot_area[0] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Ground Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="up_area[]" value="{{ $new_edit->up_area[0] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Ground Floor</label>

                                                            <input type="date" class="form-control datepicker"
                                                                name="GF" meter_no value="{{ $new_edit->GF }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">East</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="four_borders[]"
                                                                value="{{ $new_edit->four_borders[0] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:5px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Select Location</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="whether_boundaries_matching[]">
                                                                <option value="">Select</option>
                                                                <option value="Yes"
                                                                    @if ($new_edit->whether_boundaries_matching[0] == 'Yes') selected @endif>Yes
                                                                </option>
                                                                <option value="No"
                                                                    @if ($new_edit->whether_boundaries_matching[0] == 'No') selected @endif>No
                                                                </option>
                                                            </select>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Front</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="side_marginal_distance_in_feet[]"
                                                                value="{{ $new_edit->side_marginal_distance_in_feet[0] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="16%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Ground Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="discription_of_property[]"
                                                                value="{{ $new_edit->discription_of_property[0] }}">
                                                    </td>
                                                </tr>

                                                <tr border="1" width="100%">

                                                    <td border="1" width="14%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">West</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="plot_area[]" value="{{ $new_edit->plot_area[1] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">First Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="up_area[]" value="{{ $new_edit->up_area[1] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">First Floor</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="FF" value="{{ $new_edit->FF }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">West</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="four_borders[]"
                                                                value="{{ $new_edit->four_borders[1] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:5px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Select Location</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="whether_boundaries_matching[]">
                                                                <option value="">Select</option>
                                                                <option value="Yes"
                                                                    @if ($new_edit->whether_boundaries_matching[1] == 'Yes') selected @endif>Yes
                                                                </option>
                                                                <option value="No"
                                                                    @if ($new_edit->whether_boundaries_matching[1] == 'No') selected @endif>No
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Back</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="side_marginal_distance_in_feet[]"
                                                                value="{{ $new_edit->side_marginal_distance_in_feet[1] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="16%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">First Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="discription_of_property[]"
                                                                value="{{ $new_edit->discription_of_property[1] }}">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr border="1" width="100%">

                                                    <td border="1" width="14%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">North</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="plot_area[]" value="{{ $new_edit->plot_area[2] }}">
                                                        </div>

                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Second Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="up_area[]" value="{{ $new_edit->up_area[2] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Second Floor</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="SF" value="{{ $new_edit->SF }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">North</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="four_borders[]"
                                                                value="{{ $new_edit->four_borders[2] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:5px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Select Location</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="whether_boundaries_matching[]">
                                                                <option value="">Select</option>
                                                                <option value="Yes"
                                                                    @if ($new_edit->whether_boundaries_matching[1] == 'Yes') selected @endif>Yes
                                                                </option>
                                                                <option value="No"
                                                                    @if ($new_edit->whether_boundaries_matching[1] == 'No') selected @endif>No
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Left</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="side_marginal_distance_in_feet[]"
                                                                value="{{ $new_edit->side_marginal_distance_in_feet[2] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="16%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Second Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="discription_of_property[]"
                                                                value="{{ $new_edit->discription_of_property[2] }}">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr border="1" width="100%">

                                                    <td border="1" width="14%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">South</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="plot_area[]" value="{{ $new_edit->plot_area[3] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Third Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="up_area[]" value="{{ $new_edit->up_area[3] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Third Floor</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="TF" value="{{ $new_edit->TF }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">South</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="four_borders[]"
                                                                value="{{ $new_edit->four_borders[3] }}">

                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:5px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Select Location</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="whether_boundaries_matching[]">
                                                                <option value="">Select</option>
                                                                <option value="Yes"
                                                                    @if ($new_edit->whether_boundaries_matching[1] == 'Yes') selected @endif>Yes
                                                                </option>
                                                                <option value="No"
                                                                    @if ($new_edit->whether_boundaries_matching[1] == 'No') selected @endif>No
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="14%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Right</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="side_marginal_distance_in_feet[]"
                                                                value="{{ $new_edit->side_marginal_distance_in_feet[3] }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="16%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom:-5px">Third Floor</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="discription_of_property[]"
                                                                value="{{ $new_edit->discription_of_property[3] }}">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr>

                                            <table width="100%" style="margin-top:0px;">

                                                <tr border="1" width="100%">

                                                    <td border="1" width="7%" colspan="6">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-bottom: -5px;">Rate Range *</label>
                                                        <input type="text" class="form-control" placeholder=""
                                                            name="rate_range" value="{{ $new_edit->rate_range }}">

                                                    </td>

                                                    <td border="1" width="7%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Plot Rate *</label>

                                                            <input type="text" class="form-control" placeholder=""
                                                                name="plot_range" value="{{ $new_edit->plot_range }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Road Type *</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything" name="road_type">
                                                                <option value="">Select</option>
                                                                <option value="Tar Road"
                                                                    @if ($new_edit->road_type == 'Tar Road') selected @endif>Tar
                                                                    Road</option>
                                                                <option value="Concrete Road"
                                                                    @if ($new_edit->road_type == 'Concrete Road') selected @endif>
                                                                    Concrete Road</option>
                                                                <option value="WBM Road"
                                                                    @if ($new_edit->road_type == 'WBM Road') selected @endif>WBM
                                                                    Road</option>
                                                                <option value="Kaccha Roa"
                                                                    @if ($new_edit->road_type == 'Kaccha Roa') selected @endif>
                                                                    Kaccha Road</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Road Width In Feet*</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="road_width_in_feet"
                                                                value="{{ $new_edit->road_width_in_feet }}">

                                                        </div>
                                                    </td>
                                                    <td border="1" width="10%" colspan="6">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Type of structure *</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="type_of_structure">
                                                                <option value="">Select</option>
                                                                <option value="RCC"
                                                                    @if ($new_edit->type_of_structure == 'Tar Road') selected @endif>RCC
                                                                </option>
                                                                <option value="Load Bearins"
                                                                    @if ($new_edit->type_of_structure == 'Load Bearins') selected @endif>Load
                                                                    Bearing</option>
                                                                <option value="Composite"
                                                                    @if ($new_edit->type_of_structure == 'Composite') selected @endif>
                                                                    Composite</option>
                                                                <option value="Tin Roof"
                                                                    @if ($new_edit->type_of_structure == 'Tin Roof') selected @endif>Tin
                                                                    Roof</option>
                                                                <option value="RCC + Tin Roof"
                                                                    @if ($new_edit->type_of_structure == 'RCC + Tin Roof') selected @endif>RCC
                                                                    + Tin Roof</option>
                                                                <option value="Kaccha House"
                                                                    @if ($new_edit->type_of_structure == 'Kaccha House') selected @endif>
                                                                    Kaccha House</option>


                                                            </select>
                                                        </div>

                                                    </td>

                                                    <td border="1" width="22%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;"> Remark On Boundaries Matching
                                                                *</label>

                                                            <input type="text" class="form-control" placeholder=""
                                                                name="remark_on_boundaries_matching"
                                                                value="{{ $new_edit->remark_on_boundaries_matching }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="7%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">LAT *</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="lat" value="{{ $new_edit->lat }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="7%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Long*</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="long" value="{{ $new_edit->long }}">
                                                        </div>
                                                    </td>

                                                </tr>
                                            </table>




                                            <table width="100%" style="margin-top:0;">

                                                <tr border="1" width="100%">


                                                    <td border="1" width="12%">

                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Construction Stage *</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="construction_stage">
                                                                <option value="">Select</option>
                                                                <option value="Yet To Start"
                                                                    @if ($new_edit->construction_stage == 'Yet To Start') selected @endif>Yet
                                                                    To Start</option>
                                                                <option value="Ground Level"
                                                                    @if ($new_edit->construction_stage == 'Ground Level') selected @endif>
                                                                    Ground Level</option>
                                                                <option value="Plinth Level"
                                                                    @if ($new_edit->construction_stage == 'Plinth Level') selected @endif>
                                                                    Plinth Level</option>
                                                                <option value="Roof Level"
                                                                    @if ($new_edit->construction_stage == 'Roof Level') selected @endif>Roof
                                                                    Level</option>
                                                                <option value="Finishing Stage"
                                                                    @if ($new_edit->construction_stage == 'Finishing Stage') selected @endif>
                                                                    Finishing Stage</option>
                                                                <option value="Superstructure Completed (For Multistorey)"
                                                                    @if ($new_edit->construction_stage == 'Superstructure Completed (For Multistorey)') selected @endif>
                                                                    Superstructure Completed (For Multistorey)
                                                                </option>
                                                                <option value="Completed">Completed</option>


                                                            </select>

                                                        </div>

                                                    </td>
                                                    <td border="1" width="15%" colspan="6">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-bottom: -5px;">Person Met At Site*</label>
                                                        <input type="text" class="form-control" placeholder=""
                                                            name="person_met_at_site"
                                                            value="{{ $new_edit->person_met_at_site }}">

                                                    </td>

                                                    <td border="1" width="15%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" style="margin-bottom: -5px;"
                                                                class="form-label">Relation With Owner*</label>

                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything"
                                                                name="relation_with_owner">
                                                                <option value="">Select</option>
                                                                <option value="Friend"
                                                                    @if ($new_edit->relation_with_owner == 'Friend') selected @endif>
                                                                    Friend</option>
                                                                <option value="Relative"
                                                                    @if ($new_edit->relation_with_owner == 'Relative') selected @endif>
                                                                    Relative</option>
                                                                <option value="Wife"
                                                                    @if ($new_edit->relation_with_owner == 'Wife') selected @endif>Wife
                                                                </option>
                                                                <option value="Neighbor"
                                                                    @if ($new_edit->relation_with_owner == 'Neighbor') selected @endif>
                                                                    Neighbor</option>
                                                                <option value="Husband"
                                                                    @if ($new_edit->relation_with_owner == 'Husband') selected @endif>
                                                                    Husband</option>
                                                                <option value="Company Employee"
                                                                    @if ($new_edit->relation_with_owner == 'Company Employee') selected @endif>
                                                                    Company Employee</option>
                                                                <option value="Buider / Site Supervisior"
                                                                    @if ($new_edit->relation_with_owner == 'Buider / Site Supervisior') selected @endif>
                                                                    Buider / Site Supervisior
                                                                </option>
                                                                <option value="N.A"
                                                                    @if ($new_edit->relation_with_owner == 'N.A') selected @endif>N.A
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>

                                                    <td border="1" width="15%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Remark on Property*</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="remark_on_property"
                                                                value="{{ $new_edit->remark_on_property }}">
                                                        </div>
                                                    </td>

                                                    <td border="1" width="20%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Deviation (Mark
                                                                Appropriate)*</label>
                                                            <select class="multiple-select"
                                                                data-placeholder="Choose anything" name="deviation">
                                                                <option value="">Select</option>
                                                                <option value="High Tension Line"
                                                                    @if ($new_edit->deviation == 'High Tension Line') selected @endif>High
                                                                    Tension Line</option>
                                                                <option value="Temple In Property"
                                                                    @if ($new_edit->deviation == 'Temple In Property') selected @endif>
                                                                    Temple In Property</option>
                                                                <option value="Near Nala / River/ Water Body"
                                                                    @if ($new_edit->deviation == 'Near Nala / River/ Water Body') selected @endif>Near
                                                                    Nala / River/ Water
                                                                    Body</option>
                                                                <option value="Land Lock Property"
                                                                    @if ($new_edit->deviation == 'Land Lock Property') selected @endif>Land
                                                                    Lock Property</option>
                                                                <option value="Common Entrance"
                                                                    @if ($new_edit->deviation == 'Common Entrance') selected @endif>
                                                                    Common Entrance</option>
                                                                <option value="Railway Line"
                                                                    @if ($new_edit->deviation == 'Railway Line') selected @endif>
                                                                    Railway Line</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="23%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Rate Referenace
                                                                (name&contact)*</label>
                                                            <input type="text" class="form-control" placeholder=""
                                                                name="rate_referenace"
                                                                value="{{ $new_edit->rate_referenace }}">
                                                        </div>
                                                    </td>


                                                </tr>

                                            </table>




                                            <table width="100%" style="margin-top:0;">

                                                <tr border="1" width="100%">
                                                    <td border="1" width="10%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Date Of Visit*</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date_of_visit"
                                                                value="{{ $new_edit->date_of_visit }}">
                                                        </div>
                                                    </td>
                                                    <td border="1" width="30%">
                                                        <label for="inputFirstName" class="form-label"
                                                            style="margin-bottom: -5px;">Name Of Field Executive Visited
                                                            The Property*</label>
                                                        <input type="text" class="form-control" placeholder=""
                                                            name="name_of_FE_visited_the_property"
                                                            value="{{ $new_edit->name_of_FE_visited_the_property_id }}">
                                                    </td>

                                                    <td border="1" width="10%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" style="margin-bottom: -5px;"
                                                                class="form-label">Location*</label>
                                                            <label id="location"> </label>



                                                            <select class="multiple-select "
                                                                data-placeholder="Choose anything" name="location_id"
                                                                id="location" readonly>
                                                                <option value="">Select</option>
                                                                @foreach ($location1 as $location1)
                                                                    <option value="{{ $location1->id }}"
                                                                        @if ($new_edit->location_id == $location1->id) selected @endif>
                                                                        {{ $location1->locations }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>

                                                    <td border="1" width="10%">
                                                        <div>
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Last update By </label>
                                                            <select class="form-select" name="last_updated_by">
                                                                <option value="">Select</option>
                                                                @foreach ($role as $roles)
                                                                <option value="{{$roles->id}}"@if ($new_edit->last_updated_by == $roles->id) selected @endif>{{$roles->role_name}} </option>  
                                                                @endforeach
                                                                {{-- <option value="Admin">Admin </option>
                                                                <option value="Feild Executive">Feild Executive </option>
                                                                <option value="Assistant Valuer"> Assistant Valuer
                                                                </option>
                                                                <option value="Technical Manager"> Technical Manager
                                                                </option>
                                                                <option value="Technical Head"> Technical Head</option> --}}

                                                            </select>

                                                        </div>
                                                    </td>

                                                    <td border="1" width="10%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Status</label>
                                                            <select class="form-select" name="status">
                                                                <option>Select</option>
                                                                <option value="ongoing"
                                                                    @if ($new_edit->status == 'ongoing') selected @endif>
                                                                    ongoing </option>
                                                                <option value="cancelled"
                                                                    @if ($new_edit->status == 'cancelled') selected @endif>
                                                                    cancelled </option>
                                                                <option value="completed"
                                                                    @if ($new_edit->status == 'completed') selected @endif>
                                                                    completed</option>
                                                                <option value="pending"
                                                                    @if ($new_edit->status == 'pending') selected @endif>
                                                                    pending</option>

                                                            </select>
                                                        </div>
                                                    </td>

                                                    <td border="1" width="30%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Reason</label>
                                                            <textarea class="form-control" id="inputAddress" placeholder="reason / remarks" rows="1" name="reason">{{$new_edit->reason}}</textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                            <table width="100%" style="margin-top:0;">
                                                <tr border="1" width="100%">
                                                    <td border="1" width="10%" colspan="7">
                                                        &nbsp;
                                                    </td>
                                                    <td border="1" width="15%">
                                                        <div style="padding:3px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Category*</label>
                                                            <select class="multiple-select first_input"
                                                                data-placeholder="Choose anything" id="category">
                                                                <option value="">Select</option>
                                                                @foreach ($category as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->category }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="15%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Tags*</label>
                                                            <select class="multiple-select first_input"
                                                                data-placeholder="Choose anything" id="tag">
                                                                <option value="">Select</option>

                                                                @foreach ($tag as $tag)
                                                                    <option value="{{ $tag->id }}">
                                                                        {{ $tag->tag }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td border="1" width="30%">
                                                        <div style="padding:2px;">
                                                            <label for="inputFirstName" class="form-label"
                                                                style="margin-bottom: -5px;">Image*</label>
                                                            <input class="form-control first_input" type="file"
                                                                accept="image/*" id="image1">

                                                        </div>

                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div class="form-group" align="center"
                                                            style="margin-top:20px; float:left;">
                                                            <button type="button" class="btn btn-warning "
                                                                id="add_row1"><i class='bx bx-plus me-0'></i></button>
                                                        </div>


                                                    </td>
                                                    <td border="1" width="10%">
                                                        <div class="form-group" align="center"
                                                            style="margin-top:20px;">
                                                            {{-- <button type="button" class="delete-row  " --}}
                                                            {{-- style=" margin-top: 5px; color:red"><i class="bx bx-trash"></i></button> --}}
                                                            <button type="button" class="btn btn-danger delete-row1"><i
                                                                    class='bx bx-trash me-0'></i></button>
                                                        </div>
                                                    </td>

                                                    <td border="1" width="10%">
                                                        &nbsp;
                                                    </td>

                                                </tr>
                                            </table>

                                            <div class="col-md-12" style="margin-top:-30px;">
                                                <div class="row">
                                                    <div class="col-md-3"></div>

                                                    <div class="col-md-6 " style="float-left">
                                                        <table class="items_table table table-bordered width80"
                                                            id="items_table">

                                                            <thead>
                                                                <tr class="filters">
                                                                    <th></th>
                                                                    <th>Category</th>
                                                                    <th>Tag</th>
                                                                    <th>Image </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody id="add_more1">

                                                                @if (is_array($new_edit->category_id))

                                                                    @foreach ($new_edit->category_id as $cat)
                                                                        <tr>
                                                                            <div class="col-md-4">
                                                                                <th><input type="checkbox"
                                                                                        class="del_check1"
                                                                                        name="record">
                                                                                </th>
                                                                                <th>
                                                                                    <input name="category_id[]"
                                                                                        type="hidden"
                                                                                        value="{{ $new_edit->category_id[$loop->index] }}">

                                                                                    <input name="tag_id[]"
                                                                                        type="hidden"
                                                                                        value="{{ $new_edit->tag_id[$loop->index] }}">

                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="" required
                                                                                        value="{{ \App\Models\Masters\Category::find($new_edit->category_id[$loop->index])->category }}">
                                                                                </th>

                                                                                <th> <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder=""value=" {{ \App\Models\Masters\Tags::find($new_edit->tag_id[$loop->index])->tag }}">
                                                                                </th><br>
                                                                                <th>
                                                                                    <img height="50" width="50"
                                                                                        src="{{ asset('images/FE-valuation/' . $new_edit->image[$loop->index]) }}"
                                                                                        alt="">
                                                                                </th><br>
                                                                                <div>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif


                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>
                                            </div>

                                            <div style="margin-top:-20px;">
                                                <table width="100%">
                                                    <tr>
                                                        <td style="float:right; margin-right:20px;">
                                                            <button type="submit" class="btn btn-primary px-3"><i
                                                                    class="fadeIn animated bx bx-plus"></i>Submit
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        {{-- Assistant Valuer --}}
                        <h5>Assistant Valuer</h5>

                        <form method="post" action="{{ route('assit_update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $new_edit->id }}">

                            <table width="100%" style="margin-top:0;">
                                <tr border="1" width="100%">
                                    <td border="1" width="20%">
                                    </td>
                                    <td border="1" width="20%">
                                        <div style="padding:3px;">
                                            <label for="inputFirstName" class="form-label">File Name</label>
                                            <input type="text" class="form-control" id="document11">
                                        </div>
                                    </td>
                                    <td border="1" width="20%">
                                        <div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label">Upload File</label>
                                            <input type="file" class="form-control" id="image3"
                                                accept="">
                                        </div>
                                    </td>
                                    <td border="1" width="10%">

                                        <div class="form-group" align="center" style="margin-top:30px;">
                                            <button type="button" name="action_button" class="btn btn-warning "
                                                id="add_row3"><i class='bx bx-plus me-0'></i> Add</button>
                                        </div>

                                    </td>
                                    <td border="1" width="10%">

                                        <div class="form-group" align="center" style="margin-top:30px;">
                                            {{-- <button type="button" class="delete-row  " --}}
                                            {{-- style=" margin-top: 5px; color:red"><i class="bx bx-trash"></i></button> --}}
                                            <button type="button" class="btn btn-danger delete-row1"><i
                                                    class='bx bx-trash me-0'></i> Delete</button>
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
                                                    <th>File Name</th>

                                                    <th>Files </th>
                                                </tr>
                                            </thead>
                                            <tbody id="add_more3">
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <td border="1" width="10%">
                                &nbsp;
                            </td>
                            </tr>
                            </table>
                            {{-- <div class="col-md-12" style="margin-top:-30px;">
                            <div class="row">
                                <div class="col-md-3"></div>
    
                                <div class="col-md-6 " style="float-left">
                                    <table class="items_table table table-bordered width80"
                                        id="items_table">
    
                                        <thead>
                                            <tr class="filters">
                                                <th></th>
                                                <th>Category</th>
                                                <th>Tag</th>
                                                <th>Image </th>
    
                                            </tr>
                                        </thead>
                                        <tbody id="add_more3">
                                            @if (is_array($new_edit->category_id))
    
                                                @foreach ($new_edit->category_id as $cat)
                                                    <tr>
                                                        <div class="col-md-4">
                                                            <th><input type="checkbox"
                                                                    class="del_check3" name="record">
                                                            </th>
                                                            <th>
                                                                <input name="category_id[]"
                                                                    type="hidden"
                                                                    value="{{ $new_edit->category_id[$loop->index] }}">
    
                                                                <input name="tag_id[]" type="hidden"
                                                                    value="{{ $new_edit->tag_id[$loop->index] }}">
    
                                                                <input type="text"
                                                                    class="form-control" placeholder=""
                                                                    required
                                                                    value="{{ \App\Models\Masters\Category::find($new_edit->category_id[$loop->index])->category }}">
                                                            </th>
    
                                                            <th> <input type="text"
                                                                    class="form-control"
                                                                    placeholder=""value=" {{ \App\Models\Masters\Tags::find($new_edit->tag_id[$loop->index])->tag }}">
                                                            </th><br>
                                                            <th>
                                                                <img height="50" width="50"
                                                                    src="{{ asset('images/FE-valuation/' . $new_edit->image[$loop->index]) }}"
                                                                    alt="">
                                                            </th><br>
                                                            <div>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}


                            <table width="100%" style="margin-top:0;">

                                <tr border="1" width="100%" colspan="5">

                                    <td border="1" width="20%">
                                        &nbsp;

                                    </td>


                                    {{-- <td border="1" width="20%">
                                    <div>
                                        <label for="inputFirstName" class="form-label"  style="margin-bottom: -5px;">Last update By </label>
                                        <select class="form-select"  name="last_updated_by">
                                            <option>Select</option>
                                            <option value="Admin">Admin </option>
                                            <option value="Feild Executive" >Feild Executive </option>
                                            <option value="Assistant Valuer"> Assistant Valuer</option>
                                            <option value="Technical Manager"> Technical Manager</option>
                                            <option value="Technical Head"> Technical Head</option>
                                      
                                        </select>
        
                                    </div>
                                </td> --}}

                                    <td border="1" width="20%">
                                        <div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label"
                                                style="margin-bottom: -5px;">Status</label>
                                            <select class="form-select" name="status">
                                                <option>Select</option>
                                                <option value="ongoing"
                                                    @if ($new_edit->status == 'ongoing') selected @endif>ongoing </option>
                                                <option value="cancelled"
                                                    @if ($new_edit->status == 'cancelled') selected @endif>cancelled </option>
                                                <option value="completed"
                                                    @if ($new_edit->status == 'completed') selected @endif> completed</option>
                                                <option value="pending"
                                                    @if ($new_edit->status == 'pending') selected @endif> pending</option>

                                            </select>
                                        </div>
                                    </td>

                                    <td border="1" width="20%">
                                        <div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label"
                                                style="margin-bottom: -5px;">Reason</label>
                                            <textarea class="form-control" id="inputAddress" placeholder="reason / remarks" rows="2" name="reason"></textarea>
                                        </div>
                                    </td>

                                    <td border="1" width="20%">
                                        &nbsp;

                                    </td>

                                </tr>
                            </table>

                            <div style="margin-top:40px;">
                                <table width="100%">
                                    <tr>
                                        <td style="float:right; margin-right:20px;">
                                            <button type="submit" class="btn btn-primary px-3"><i
                                                    class="fadeIn animated bx bx-plus"></i>submit </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br><br>

                        </form>
                        {{-- End Assistant --}}
                    </div>
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
            //append document


            $("#image").on('change', function(e) {
                src = URL.createObjectURL(e.target.files[0]);
                let file = e.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    blob = e.target.result;
                };
            })


            $(document).on('click', '#add_row', function() {
                console.log('click');
                var category = $('#document1').val();
                // var tag = $('#tag option:selected').text();
                var image_src = src;
                if (category && image_src) {
                    var markup =
                        '<tr><td><input type="checkbox" class="del_check" name="record"></td><td><input type="hidden" value="' +
                        $('#document1').val() +
                        '" name="document_name[]"><input type="text" class="form-control"  document_name[] value="' +
                        category +
                        '" ></td><td><input name="image[]" type="hidden" value="' + blob +
                        '"><a target="_blank" href="' + image_src +
                        '"><img style="height:100px;width:auto;" src="' + image_src + '"></a></td></tr>';
                    console.log(markup);


                    $("#add_more").append(markup);
                    $('.first_input').val('');
                    src = null;
                    blob = null;
                    $("#document1").val('').change();
                    //$("#tag").val('').change();
                }

            });
            $(".delete-row").click(function() {
                $('.del_check').each(function() {
                    // alert();
                    if ($(this).is(":checked")) {
                        var perticular = $(this).parents("tr").find('input[name="perticular[]"]')
                            .val();
                        var price = $(this).parents("tr").find('input[name="price[]"]').val();
                        var minus_amount = parseFloat(price);
                        var old_amount = $("#total_amount1").val();
                        $("#total_amount1").val(parseFloat(old_amount) - parseFloat(minus_amount));
                        $(this).parents("tr").remove();

                    }
                });
            });
            //end admin





            //field ex



            $("#image1").on('change', function(e) {
                src = URL.createObjectURL(e.target.files[0]);
                let file = e.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    blob = e.target.result;
                };
            })


            $(document).on('click', '#add_row1', function() {
                console.log('click');

                var category = $('#category option:selected').text();
                var tag = $('#tag option:selected').text();
                var image_src = src;
                if (category && tag && image_src) {
                    var markup =
                        '<tr><td><input type="checkbox" class="del_check1" name="record"></td><td><input type="hidden" value="' +
                        $('#category').val() +
                        '" name="category_id[]"><input type="text" class="form-control"  value="' +
                        category.trim() +
                        '" ></td><td><input type="hidden" value="' + $('#tag').val() +
                        '" name="tag_id[]" ><input type="text" class="form-control" step="0.1" value="' +
                        tag.trim() + '" ></td><td><input name="image_files[]" type="hidden" value="' +
                        blob +
                        '"><a target="_blank" href="' + image_src +
                        '"><img style="height:100px;width:auto;" src="' + image_src + '"></a></td></tr>';

                    $("#add_more1").append(markup);
                    $('.first_input').val('');
                    src = null;
                    blob = null;
                    $("#category").val('').change();
                    $("#tag").val('').change();
                }

            });
            $(".delete-row1").click(function() {
                $('.del_check1').each(function() {
                    // alert();
                    if ($(this).is(":checked")) {
                        var perticular = $(this).parents("tr").find('input[name="perticular[]"]')
                            .val();
                        var price = $(this).parents("tr").find('input[name="price[]"]').val();
                        var minus_amount = parseFloat(price);
                        var old_amount = $("#total_amount2").val();
                        $("#total_amount2").val(parseFloat(old_amount) - parseFloat(minus_amount));
                        $(this).parents("tr").remove();

                    }
                });
            });

        });
        //end field ex


        $(document).ready(function() {

            setTimeout(() => {
                console.clear();
            }, 1500);
            //var src;
            var blob;
            $("#image3").on('change', function(e) {
                // src=URL.createObjectURL(e.target.files[0]);
                let file = e.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    blob = e.target.result;
                };
            })


            $("#add_row3").click(function() {
                var document1 = $('#document11').val();
                var upload = $('#image3').val().replace(/C:\\fakepath\\/i, '');
                console.log(upload);

                var markup =
                    '<tr><td><input type="checkbox" class="del_check1" name="record"></td><td><input class="form-control" type="text" value="' +
                    document1 +
                    '" name="file_name[]" ></td><td><input name="image_filess[]" type="hidden" value="' +
                    blob + '"><input  type="text" class="form-control" value="' +
                    upload + '"></td></tr>';
                $("#add_more3").append(markup);

                $("#document11").val('');
                $("#image3").val('');


            });

            $(".delete-row").click(function() {
                $('.del_check').each(function() {
                    // alert();
                    if ($(this).is(":checked")) {
                        var perticular = $(this).parents("tr").find('input[name="perticular[]"]')
                            .val();
                        var price = $(this).parents("tr").find('input[name="price[]"]').val();
                        var minus_amount = parseFloat(price);
                        var old_amount = $("#total_amount2").val();
                        $("#total_amount2").val(parseFloat(old_amount) - parseFloat(minus_amount));
                        $(this).parents("tr").remove();

                    }
                });
            });

        });

        // End Assistant
    </script>


@stop
