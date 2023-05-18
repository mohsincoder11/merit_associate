@extends('layout')
@section('content')
    <!--start page wrapper -->

    <div class="page-wrapper">
        <div class="page-content">


            <!-- <div class="card">
                 <div class="card-body">
                  <div class="card-title d-flex align-items-center">

                   <h6>New Valuation</h6>
                  </div>
                  <hr>
                  <form class="row g-2">

                   <p>Valuation for</p>
                   <div class="col-md-3">
                    <input class="form-control mb-3" type="text" placeholder="First Name"
                     aria-label="default input example">
                   </div>
                   <div class="col-md-3">
                    <input class="form-control mb-3" type="text" placeholder="Middle Name"
                     aria-label="default input example">
                   </div>

                   <div class="col-md-3">
                    <input class="form-control mb-3" type="text" placeholder="Last Name"
                     aria-label="default input example">
                   </div>
                  </form>


                  <form class="row g-2">

                   <div class="col-md-3">
                    <label>Valuation ID</label>
                    <input class="form-control mb-3" type="text" placeholder="Valuation ID"
                     aria-label="default input example">
                   </div>
                   <div class="col-md-3">
                    <label>Client</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Client</option>
                     <option value="12">India Shelter Finance Corporation Ltd.</option>
                     <option value="13">Bandhan Bank Ltd</option>
                     <option value="14">Cholamandalam Investment And Finance ltd.</option>
                     <option value="15">Easy Home Finance Ltd</option>
                     <option value="16">Equitas Small Finance Bank Ltd</option>
                     <option value="17">Fullerton India Home Finance Company Ltd.</option>
                     <option value="18">JM Financial Home Loans Ltd</option>
                     <option value="19">Motilal Oswal Home Finance Limited</option>
                     <option value="20">SBFC Finance Pvt.Ltd.</option>
                     <option value="21">Vastu Housing Finance Corporation Ltd</option>
                     <option value="22">AU Small Finance Bank Limited</option>
                     <option value="23">Capri Global Capital Limited</option>
                     <option value="24">Piramal Capital & Housing finance Limited.</option>
                     <option value="25">Fullerton India Finance Credit Limited</option>
                     <option value="26">pnb Housing Finance Limited</option>
                    </select>


                    </select>
                   </div>

                   <div class="col-md-3">
                    <label>Product</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Product</option>
                     <option value="HL-Construction">HL-Construction</option>
                     <option value="HL-Purchase">HL-Purchase</option>
                     <option value="HL-Extension/Improvement">HL-Extension/Improvement</option>
                     <option value="HL-Plot Purchase+Construction">HL-Plot Purchase+Construction</option>
                     <option value="LAP-Commercial">LAP-Commercial</option>
                     <option value="LAP-Residential">LAP-Residential</option>
                     <option value="NPA">NPA</option>
                     <option value="Part Disbursement">Part Disbursement</option>
                    </select>


                    </select>
                   </div>



                   <div class="col-md-3">
                    <label>Location</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Location</option>
                     <option value="11">Yavatmal</option>
                     <option value="10">Akola</option>
                     <option value="9">Amravati</option>
                     <option value="12">Wardha</option>
                     <option value="13">Washim</option>
                     <option value="14">Hingoli</option>
                     <option value="15">Buldhana</option>
                     <option value="16">Jalana</option>
                     <option value="17">Aurangabad</option>
                     <option value="18">Parbhani</option>
                     <option value="19">Nanded</option>
                     <option value="20">Latur</option>
                    </select>

                    </select>
                   </div>
                   <div class="col-md-3">
                    <label>Area <label>[Add New]</label></label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Location</option>
                     <option value="11">Yavatmal</option>
                     <option value="10">Akola</option>
                     <option value="9">Amravati</option>
                     <option value="12">Wardha</option>
                     <option value="13">Washim</option>
                     <option value="14">Hingoli</option>
                     <option value="15">Buldhana</option>
                     <option value="16">Jalana</option>
                     <option value="17">Aurangabad</option>
                     <option value="18">Parbhani</option>
                     <option value="19">Nanded</option>
                     <option value="20">Latur</option>
                    </select>

                    </select>
                   </div>

                   <div class="col-md-3">
                    <label>Field Executive</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Executive</option>
                     <option></option>
                   
                    </select>

                   </div>

                   
                   <div class="col-md-3">
                    <label>Assistant Valuer</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Assistant Valuer</option>
                     <option></option>
                   
                    </select>

                   </div>

                    
                   <div class="col-md-3">
                    <label>Technical Manager</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Technical Manager</option>
                     <option></option>
                   
                    </select>

                   </div>

                   <div class="col-md-3">
                    <label>Technical Head</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                     <option selected>Select Technical Head</option>
                     <option></option>
                   
                    </select>

                   </div>


                   <div class="col-md-3">
                    <label>Contact Number</label>
                    <input class="form-control mb-3" type="text" placeholder="Contact Number"
                     aria-label="default input example">
                   </div>

                   <div class="col-md-3">
                    <label>Alternate Contact Number</label>
                    <input class="form-control mb-3" type="text" placeholder="Alternate Contact Number"
                     aria-label="default input example">
                   </div>
                   <div class="col-md-3" >

                     <label >Address of Individual</label>
                     <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                   
                   </div>

                   <div class="col-md-3">
                    <label>City</label>
                    <input class="form-control mb-3" type="text" placeholder="City"
                     aria-label="default input example">
                   </div>

                   
                   <div class="col-md-3">
                    <label>State</label>
                    <input class="form-control mb-3" type="text" placeholder="State"
                     aria-label="default input example">
                   </div>

                   <div class="col-md-3">
                    <label>Pincode</label>
                    <input class="form-control mb-3" type="text" placeholder="Pincode"
                     aria-label="default input example">
                   </div>
                   <div class="col-md-3">
                    <label>Longitude</label>
                    <input class="form-control mb-3" type="text" placeholder="Longitude"
                     aria-label="default input example">
                   </div>

                   <div class="col-md-3">
                    <label>Latitude</label>
                    <input class="form-control mb-3" type="text" placeholder="Latitude"
                     aria-label="default input example">
                   </div>

                   <div class="col-md-3">
                    <label>Tags</label>
                    <input class="form-control mb-3" type="text" placeholder="Tags"
                     aria-label="default input example">
                   </div>


                   <div class="col-md-3">
                     <label >Due Date</label>
                     <input type="date" class="form-control">
                   </div>


                   <div class="col-md-3" >
                    <label >Comment / Remarks</label>
                    <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3"></textarea>
                  
                  </div>

                  

                  <div class="col-md-3">
                   <label for="formFile" class="form-label">Upload Documents</label>
                     <input class="form-control" type="file" id="formFile">
                 </div>
                 <div class="col-md-3" style="margin-top:3.3%;">
                 <button type="button" class="btn btn-primary"
                 data-bs-dismiss="modal">Submit</button>
                </div>
                  </form>
                 </div>

                </div> -->

            <div class="col">
                <h6 class="mb-0 text-uppercase">Primary Nav Pills</h6>
                <hr />
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


                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-contact1" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-check font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Completed</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-cancelled" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-x font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Cancelled</div>
                                    </div>
                                </a>
                            </li>


                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="primary-pills-home" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-center">

                                            <h6>New Valuation</h6>
                                        </div>
                                        <hr>
                                        <form class="row g-2" method="post" enctype="multipart/form-data"
                                            action={{ route('addnewupdate') }}>
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $edit_data->id }}">

                                            <p>Valuation for</p>

                                            <div class="col-md-3">
                                                <label>First Name</label>
                                                <input class="form-control mb-3" type="text" name="firstname"
                                                    placeholder="First Name" aria-label="default input example"
                                                    value={{ $edit_data->firstname }}>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Middel Name</label>
                                                <input class="form-control mb-3" type="text" name="middelname"
                                                    placeholder="Middle Name" aria-label="default input example"
                                                    value="{{ $edit_data->middelname }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Last Name</label>
                                                <input class="form-control mb-3" type="text" name="lastname"
                                                    placeholder="Last Name" aria-label="default input example"
                                                    value="{{ $edit_data->lastname }}">
                                            </div>





                                            <div class="col-md-3">
                                                <label>Valuation ID</label>
                                                <input class="form-control mb-3" type="text" name="valuation_id"
                                                    placeholder="Valuation ID" aria-label="default input example"
                                                    value="{{ $edit_data->valuation_id }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Client</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="associatesbanks_id">
                                                    <option selected>Select Client</option>
                                                    @foreach ($associatesbank as $associatesbank)
                                                        <option value="{{ $associatesbank->id }}"
                                                            @if ($edit_data->associatesbanks_id == $associatesbank->id) selected @endif>
                                                            {{ $associatesbank->bankname }} </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Product</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="product_id">
                                                    <option selected>Select Product</option>
                                                    @foreach ($product as $product)
                                                        <option value="{{ $product->id }}"
                                                            @if ($edit_data->product_id == $product->id) selected @endif>
                                                            {{ $product->products }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Location</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="location_id" id="location">

                                                    <option selected>Select Location</option>
                                                    @foreach ($location as $location)
                                                        <option value="{{ $location->id }}"
                                                            @if ($edit_data->location_id == $location->id) selected @endif>
                                                            {{ $location->locations }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>


                                            <div class="col-md-3">
                                                <label>Area <label>[Add New]</label></label>
                                                <select class="form-select mb-3 areas" aria-label="Default select example"
                                                    name="area_id" id="area">
                                                    <option selected>Select </option>
                                                    @foreach ($area as $area)
                                                        <option value="{{ $area->id }}" @if ($edit_data->area_id == $area->id) selected @endif>
                                                            {{ $area->area }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            <div class="col-md-3">
                                                <label>Field Executive</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="field_executive_id" id="field">
                                                    <option selected>Select</option>

                                                    @foreach ($add_new_all as $add_new_all)
                                                        <option value="{{ $add_new_all->id }}"
                                                            @if ($edit_data->field_executive_id == $add_new_all->id) selected @endif>
                                                            {{ $add_new_all->name }} </option>
                                                    @endforeach

                                                </select>

                                            </div>

                                            <div class="col-md-3">
                                                <label>Assistant Valuer</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="assistant_valuer_id" id="assist">
                                                    <option selected>Select Assistant Valuer</option>
                                                    <option></option>

                                                </select>

                                            </div>


                                            <div class="col-md-3">

                                                <label>Technical Manager</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="technical_manager_id" id="tech">
                                                    <option selected>Select Technical Manager</option>
                                                    <option></option>

                                                </select>

                                            </div>


                                            <div class="col-md-3">
                                                <label>Technical Head</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="technical_head_id" id="tech_head">
                                                    <option selected>Select Technical Head</option>
                                                    <option></option>

                                                </select>

                                            </div>

                                            <div class="col-md-3">
                                                <label>Contact Number</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Contact Number" aria-label="default input example"
                                                    name="contact_no" value="{{ $edit_data->contact_no }}">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Alternate Contact Number</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Alternate Contact Number"
                                                    aria-label="default input example" name="alt_cont_no"
                                                    value="{{ $edit_data->alt_cont_no }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Address of Individual</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="2" name="address"
                                                    value="">{{ $edit_data->address }}</textarea>
                                            </div>

                                            <div class="col-md-3">
                                                <label>City</label>
                                                <input class="form-control mb-3" type="text" placeholder="City"
                                                    name="city" aria-label="default input example"
                                                    value="{{ $edit_data->city }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>State</label>
                                                <input class="form-control mb-3" type="text" placeholder="State"
                                                    name="state" aria-label="default input example"
                                                    value="{{ $edit_data->state }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Pincode</label>
                                                <input class="form-control mb-3" type="text" placeholder="Pincode"
                                                    pincode name="" aria-label="default input example"
                                                    value="{{ $edit_data->pincode }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Longitude</label>
                                                <input class="form-control mb-3" type="text" placeholder="Longitude"
                                                    name="" aria-label="default input examplongitudele"
                                                    value="{{ $edit_data->longitude }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Latitude</label>
                                                <input class="form-control mb-3" type="text" placeholder="Latitude"
                                                    name="latitute" aria-label="default input example"
                                                    value="{{ $edit_data->latitute }}">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Tags</label>
                                                <input class="form-control mb-3" type="text" placeholder="Tags"
                                                    name="tags" aria-label="default input example"
                                                    value="{{ $edit_data->tags }}">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Due Date</label>
                                                <input type="date" class="form-control" name="date"
                                                    value="{{ $edit_data->date }}">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Comment / Remarks</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3" name="comment"
                                                    value="{{ $edit_data->comment }}"></textarea>

                                            </div>

                                            <div class="col-md-3">
                                                <label>Status</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="status">
                                                    <option>Select </option>
                                                    <option value="ongoing"
                                                        @if ($edit_data->status == 'ongoing') selected @endif>ongoing</option>
                                                    <option value="completed"
                                                        @if ($edit_data->status == 'completed') selected @endif>completed</option>
                                                    <option value="cancelled"
                                                        @if ($edit_data->status == 'cancelled') selected @endif>cancelled</option>


                                                </select>
                                            </div>



                                            <div class="row">


                                                <div class="col-md-3">
                                                    <label>Documents Name</label>
                                                    <input class="form-control mb-3" type="text"
                                                        placeholder="Documents Name" name="docname[]"
                                                        aria-label="default input  example" id="documents_name">
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Upload Document</label>
                                                    <input class="form-control mb-3" type="file" placeholder=""
                                                        name="upd[]" aria-label="default input example">
                                                </div>


                                                <div class="col-md-3" style="padding:5px"><br>
                                                    <button type="button" class=" add_row btn btn-success"><i
                                                            class="fadeIn animated bx bx-plus "></i>Add More </button>
                                                </div>


                                            </div>


                                            <div class="row doc">
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </div>

                                            <div class="col-md-3" style="padding:8px"><br>
                                                <button type="submit" class=" btn btn-primary"><i
                                                        class="fadeIn animated bx bx-plus"></i> Submit </button>
                                            </div>


                                        </form>



                                        <hr />
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr. No.</th>
                                                                <th>First Name</th>
                                                                <th>Middel Name</th>
                                                                <th>Last Name </th>

                                                                <th>Valuation ID</th>
                                                                <th>Client </th>
                                                                {{-- <th>City</th> --}}
                                                                <th>Product</th>
                                                                <th>Location </th>
                                                                <th>Area</th>
                                                                <th>Field Executive</th>
                                                                <th>Assistant Valuer</th>
                                                                <th>Technical Manager </th>
                                                                <th>Technical Head</th>
                                                                <th>Contact Number</th>

                                                                <th> Address of Individual</th>
                                                                <th>City</th>
                                                                <th>State </th>
                                                                <th>Pincode</th>
                                                                <th>Longitute</th>
                                                                <th>Latitute</th>
                                                                <th>Tags</th>
                                                                <th>Due Date</th>
                                                                <th>Comments</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($add_new_all as $add_new_all)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $add_new_all->firstname }}</td>
                                                                    <td>{{ $add_new_all->middelname }}</td>
                                                                    <td>{{ $add_new_all->lastname }}</td>
                                                                    <td>{{ $add_new_all->valuation_id }}</td>
                                                                    <td>{{ $add_new_all->bankname }}</td>
                                                                    <td>{{ $add_new_all->products }}</td>
                                                                    <td>{{ $add_new_all->locations }}</td>
                                                                    <td>{{ $add_new_all->area }}</td>
                                                                    <td>{{ $add_new_all->name }}</td>
                                                                    <td>{{ $add_new_all->name }}</td>
                                                                    <td>{{ $add_new_all->name }}</td>
                                                                    <td>{{ $add_new_all->name }}</td>
                                                                    <td>{{ $add_new_all->contact_no }}</td>
                                                                    <td>{{ $add_new_all->alt_cont_no }}</td>
                                                                    <td>{{ $add_new_all->address }}</td>
                                                                    <td>{{ $add_new_all->city }}</td>
                                                                    <td>{{ $add_new_all->state }}</td>
                                                                    <td>{{ $add_new_all->pincode }}</td>
                                                                    <td>{{ $add_new_all->longitude }}</td>
                                                                    <td>{{ $add_new_all->latitute }}</td>
                                                                    <td>{{ $add_new_all->tags }}</td>
                                                                    <td>{{ $add_new_all->date }}</td>
                                                                    <td>{{ $add_new_all->comment }}</td>
                                                                    <td>{{ $add_new_all->status }}</td>


                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn1 btn-outline-success"><i
                                                                                class='bx bx-edit-alt me-0'></i></button>

                                                                        <a
                                                                            href="{{ route('addnewdelete', $add_new_all) }}"><button
                                                                                type="button"
                                                                                class="btn1 btn-outline-danger"
                                                                                onclick="return confirm('Are You Sure To Delete This?')"><i
                                                                                    class='bx bx-trash me-0'></i></button></a>



                                                                    </td>
                                                            @endforeach

                                                            </tr>




                                                        </tbody>
                                                    </table>
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
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleLargeModal">New Valuations</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleLargeModal" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Add new customer</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="card-title d-flex align-items-center">

                                                                        <h6>New Valuation</h6>
                                                                    </div>
                                                                    <hr>
                                                                    <form class="row g-2">

                                                                        <p>Valuation for</p>
                                                                        <div class="col-md-3">
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="First Name"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Middle Name"
                                                                                aria-label="default input example">
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Last Name"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                    </form>


                                                                    <form class="row g-2">

                                                                        <div class="col-md-3">
                                                                            <label>Valuation ID</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Valuation ID"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>Client</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Client</option>
                                                                                <option value="12">India Shelter
                                                                                    Finance Corporation
                                                                                    Ltd.</option>
                                                                                <option value="13">Bandhan Bank Ltd
                                                                                </option>
                                                                                <option value="14">Cholamandalam
                                                                                    Investment And Finance
                                                                                    ltd.</option>
                                                                                <option value="15">Easy Home
                                                                                    Finance Ltd</option>
                                                                                <option value="16">Equitas Small
                                                                                    Finance Bank Ltd
                                                                                </option>
                                                                                <option value="17">Fullerton India
                                                                                    Home Finance Company
                                                                                    Ltd.</option>
                                                                                <option value="18">JM Financial
                                                                                    Home Loans Ltd</option>
                                                                                <option value="19">Motilal Oswal
                                                                                    Home Finance Limited
                                                                                </option>
                                                                                <option value="20">SBFC Finance
                                                                                    Pvt.Ltd.</option>
                                                                                <option value="21">Vastu Housing
                                                                                    Finance Corporation Ltd
                                                                                </option>
                                                                                <option value="22">AU Small Finance
                                                                                    Bank Limited
                                                                                </option>
                                                                                <option value="23">Capri Global
                                                                                    Capital Limited</option>
                                                                                <option value="24">Piramal Capital
                                                                                    & Housing finance
                                                                                    Limited.</option>
                                                                                <option value="25">Fullerton India
                                                                                    Finance Credit
                                                                                    Limited</option>
                                                                                <option value="26">pnb Housing
                                                                                    Finance Limited</option>
                                                                            </select>


                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Product</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Product</option>
                                                                                <option value="HL-Construction">
                                                                                    HL-Construction</option>
                                                                                <option value="HL-Purchase">HL-Purchase
                                                                                </option>
                                                                                <option value="HL-Extension/Improvement">
                                                                                    HL-Extension/Improvement</option>
                                                                                <option
                                                                                    value="HL-Plot Purchase+Construction">
                                                                                    HL-Plot
                                                                                    Purchase+Construction</option>
                                                                                <option value="LAP-Commercial">
                                                                                    LAP-Commercial</option>
                                                                                <option value="LAP-Residential">
                                                                                    LAP-Residential</option>
                                                                                <option value="NPA">NPA</option>
                                                                                <option value="Part Disbursement">Part
                                                                                    Disbursement
                                                                                </option>
                                                                            </select>


                                                                            </select>
                                                                        </div>



                                                                        <div class="col-md-3">
                                                                            <label>Location</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Location
                                                                                </option>
                                                                                <option value="11">Yavatmal
                                                                                </option>
                                                                                <option value="10">Akola</option>
                                                                                <option value="9">Amravati
                                                                                </option>
                                                                                <option value="12">Wardha</option>
                                                                                <option value="13">Washim</option>
                                                                                <option value="14">Hingoli</option>
                                                                                <option value="15">Buldhana
                                                                                </option>
                                                                                <option value="16">Jalana</option>
                                                                                <option value="17">Aurangabad
                                                                                </option>
                                                                                <option value="18">Parbhani
                                                                                </option>
                                                                                <option value="19">Nanded</option>
                                                                                <option value="20">Latur</option>
                                                                            </select>

                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>Area <label>[Add New]</label></label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Location
                                                                                </option>
                                                                                <option value="11">Yavatmal
                                                                                </option>
                                                                                <option value="10">Akola</option>
                                                                                <option value="9">Amravati
                                                                                </option>
                                                                                <option value="12">Wardha</option>
                                                                                <option value="13">Washim</option>
                                                                                <option value="14">Hingoli</option>
                                                                                <option value="15">Buldhana
                                                                                </option>
                                                                                <option value="16">Jalana</option>
                                                                                <option value="17">Aurangabad
                                                                                </option>
                                                                                <option value="18">Parbhani
                                                                                </option>
                                                                                <option value="19">Nanded</option>
                                                                                <option value="20">Latur</option>
                                                                            </select>

                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Field Executive</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Executive
                                                                                </option>
                                                                                <option></option>

                                                                            </select>

                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <label>Assistant Valuer</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Assistant Valuer
                                                                                </option>
                                                                                <option></option>

                                                                            </select>

                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <label>Technical Manager</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Technical
                                                                                    Manager</option>
                                                                                <option></option>

                                                                            </select>

                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Technical Head</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Technical Head
                                                                                </option>
                                                                                <option></option>

                                                                            </select>

                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <label>Contact Number</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text"
                                                                                placeholder="Contact Number"
                                                                                aria-label="default input example">
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Alternate Contact Number</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text"
                                                                                placeholder="Alternate Contact Number"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">

                                                                            <label>Address of Individual</label>
                                                                            <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>

                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>City</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="City"
                                                                                aria-label="default input example">
                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <label>State</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="State"
                                                                                aria-label="default input example">
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Pincode</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Pincode"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>Longitude</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Longitude"
                                                                                aria-label="default input example">
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Latitude</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Latitude"
                                                                                aria-label="default input example">
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <label>Tags</label>
                                                                            <input class="form-control mb-3"
                                                                                type="text" placeholder="Tags"
                                                                                aria-label="default input example">
                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <label>Due Date</label>
                                                                            <input type="date" class="form-control">
                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <label>Comment / Remarks</label>
                                                                            <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3"></textarea>

                                                                        </div>



                                                                        <div class="col-md-3">
                                                                            <label for="formFile"
                                                                                class="form-label">Upload
                                                                                Documents</label>
                                                                            <input class="form-control" type="file"
                                                                                id="formFile">
                                                                        </div>
                                                                        <div class="col-md-3" style="margin-top:3.3%;">
                                                                            <button type="button" class="btn btn-primary"
                                                                                data-bs-dismiss="modal">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Submit</button>
                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <h5 align="center">Valuation Details</h5>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-3">

                                                                            <label><b>Valuation Id</b></label><br>
                                                                            <label>DB20230216668690</label>


                                                                        </div>

                                                                        <div class="col-md-3">

                                                                            <label><b>Field Executive</b></label><br>
                                                                            <label>Rehaan Khan Aasif Khan</label>


                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <label><b>Client</b></label><br>
                                                                            <label>Cholamandalam Investment And Finance
                                                                                ltd.</label>


                                                                        </div>

                                                                        <div class="col-md-2">

                                                                            <label><b>Due Date</b></label><br>
                                                                            <label style="color: red;">17-02-2023</label>


                                                                        </div>




                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingOne">
                                                                                <button class="accordion-button"
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
                                                                                                    <p>Buldhana</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Area</label>
                                                                                                    <p>Chikhali</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Product</label>
                                                                                                    <p>LAP-Residential
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <p>9011154084</p>
                                                                                                </td>

                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p>9011154084</p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address of
                                                                                                        Individual</label>
                                                                                                    <p>MANIK CHOUK, WORD
                                                                                                        NO 4 AMDAPUR
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>City</label>
                                                                                                    <p>buldhana</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>State</label>
                                                                                                    <p>mahrashtra</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Pincode</label>
                                                                                                    <p>444301</p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Latitude</label>
                                                                                                    <p>NA</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Longitude</label>
                                                                                                    <p>NA</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Tags</label>
                                                                                                    <p></p>
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Comment /
                                                                                                        Remarks</label>
                                                                                                    <p>PLEASE VISIT.</p>
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
                                                                <div class="col-md-5">

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
                                                                </div>

                                                                <div class="col-md-7">

                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h6>VALUATION DOCUMENTS </h6>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="upload-btn-wrapper">
                                                                                        <button class="btn11">Upload a
                                                                                            file</button>
                                                                                        <input type="file"
                                                                                            name="myfile" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>

                                                                        </div>
                                                                        <div class="media align-items-center">


                                                                            <div class="card-body"
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




                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
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
                                                                </div>
                                                            </div>

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
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Update</button>
                                                            <button type="button" class="btn btn-primary">Cancel</button>
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
                                                        <td>1</td>
                                                        <td>Cholamandalam Investment<br> And Finance ltd.</td>
                                                        <td>niketandc@chola.<br>murugappa.com</td>
                                                        <td>9922402232</td>
                                                        <td>27AAACC1226H1Z4</td>
                                                        <td>9922402232</td>
                                                        <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal1"
                                                                class="btn1 btn-outline-success"><i
                                                                    class="lni lni-remove-file"></i></button>
                                                        </td>
                                                    </tr>



                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>

                        <div class="tab-pane fade" id="primary-pills-contact" role="tabpanel">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                                etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
                                craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>

                        <div class="tab-pane fade" id="primary-pills-contact1" role="tabpanel">
                            <p>sdgssed Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag
                                gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia
                                banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                                etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
                                craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{-- 


    <div class="col">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleLargeModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Valuation for AASIF YUSUF SHAIKH</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <h5 align="center">Valuation Details</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">

                                        <label><b>Valuation Id</b></label><br>
                                        <label>DB20230216668690</label>


                                    </div>

                                    <div class="col-md-3">

                                        <label><b>Field Executive</b></label><br>
                                        <label>Rehaan Khan Aasif Khan</label>


                                    </div>
                                    <div class="col-md-4">

                                        <label><b>Client</b></label><br>
                                        <label>Cholamandalam Investment And Finance ltd.</label>


                                    </div>

                                    <div class="col-md-2">

                                        <label><b>Due Date</b></label><br>
                                        <label style="color: red;">17-02-2023</label>


                                    </div>




                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                View More Details
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">

                                                        <tr>
                                                            <td>
                                                                <label>Location</label>
                                                                <p>Buldhana</p>
                                                            </td>

                                                            <td>
                                                                <label>Area</label>
                                                                <p>Chikhali</p>
                                                            </td>

                                                            <td>
                                                                <label>Product</label>
                                                                <p>LAP-Residential</p>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                                <label>Contact Number</label>
                                                                <p>9011154084</p>
                                                            </td>

                                                            <td colspan="2">
                                                                <label>Alternate Contact
                                                                    Number</label>
                                                                <p>9011154084</p>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td colspan="3">
                                                                <label>Address of Individual</label>
                                                                <p>MANIK CHOUK, WORD NO 4 AMDAPUR
                                                                </p>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                                <label>City</label>
                                                                <p>buldhana</p>
                                                            </td>

                                                            <td>
                                                                <label>State</label>
                                                                <p>mahrashtra</p>
                                                            </td>

                                                            <td>
                                                                <label>Pincode</label>
                                                                <p>444301</p>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                                <label>Latitude</label>
                                                                <p>NA</p>
                                                            </td>

                                                            <td>
                                                                <label>Longitude</label>
                                                                <p>NA</p>
                                                            </td>

                                                            <td>
                                                                <label>Tags</label>
                                                                <p></p>
                                                            </td>
                                                        </tr>



                                                        <tr>
                                                            <td colspan="3">
                                                                <label>Comment / Remarks</label>
                                                                <p>PLEASE VISIT.</p>
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
                            <div class="col-md-5">

                                <div class="card">
                                    <div class="card-body">
                                        <h5>Task</h5>
                                        <hr>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">Get
                                                    Appointment</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Visit Site</label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">Do
                                                    Valuations</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">Upload
                                                    Images</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault33">
                                                <label class="form-check-label" for="flexCheckDefault33">Finish
                                                    Project</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>VALUATION DOCUMENTS </h6>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn11">Upload a file</button>
                                                    <input type="file" name="myfile" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                    <div class="media align-items-center">


                                        <div class="card-body" style="padding: 0.1rem;">
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




                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="card-header text-uppercase ">IMAGES &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp
                                            <br class="d-md-none">
                                            <button type="button" class="btn btn-success waves-effect waves-light m-1"
                                                data-toggle="modal" data-target="#formemodal2"> <i
                                                    class="fa fa-plus"></i> <span>UPLOAD
                                                    IMAGES</span> </button>



                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="card-header text-uppercase ">REMINDERS &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp
                                            <br class="d-md-none">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleVerticallycenteredModal"><i
                                                    class="lni lni-circle-plus"></i>New
                                                Reminder</button>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="card-header text-uppercase ">DISCUSSIONS &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Send</button>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@section('js')

    <script>
        $(document).ready(function() {

            $("#location").on('change', function() {
                $.ajax({
                    url: "{{ route('get_area_id') }}",
                    type: 'get',
                    data: {
                        area: $(this).val()
                    },
                    cache: false,
                    success: function(result) {
                        console.log(result);
                        $("#area").empty();
                        $("#area").append(' <option value=""> Select </option>');
                        $.each(result, function(a, b) {
                            $("#area").append(' <option value="' + b.id + '">' + b
                                .area + '</option>');
                        })
                    }
                });



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

                            console.log(result);
                            $("#field").empty();
                            $("#field").append(' <option value=""> Select </option>');
                            $.each(result, function(a, b) {
                                if (b.role == "field_executive") {

                                    $("#field").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                if (b.role == "assist_valuer") {
                                    $("#assist").empty();

                                    $("#assist").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                if (b.role == "tech_manager") {
                                    $("#tech").empty();

                                    $("#tech").append(' <option value="' + b
                                        .id + '">' + b.name + '</option>');
                                }

                                if (b.role == "tech_head") {
                                    $("#tech_head").empty();

                                    $("#tech_head").append(' <option value="' +
                                        b.id + '">' + b.name + '</option>');
                                }

                            })
                        }
                    })



                    $(document).on("click", ".add_row", function() {

                        var mark =
                            '  <div class="row"><div class="col-md-3"> <label>Documents Name</label>  <input class="form-control mb-3" type="text"  placeholder="Documents Name" name="docname[]"  aria-label="default input  example" id="documents_name"></div> <div class="col-md-3"><label>Upload Document</label><input class="form-control mb-3" type="file" placeholder="" name="upd[]" aria-label="default input example" id="upload"><button type="button" class="btn btn-danger">Delete</button> </div></div> ';
                        $(".doc").append(mark);
                        //empty all fields

                        // $("#details").val('');
                    })

                });



            })
        })
    </script>


    //
    <script>
        //     $(document).ready(function()
        //     {
        //         $("#areas").on('change',function(){
        //             $.ajax({
        // url: "{{ route('get_name_id') }}",
        // type:'get',
        // data:{
        //     field:$(this).val()

        // },
        // cache: false,
        // success: function(result){
        //     console.log(result);
        //     $("#field").empty();
        //     $("#field").append(' <option value=""> Select </option>');
        //         $.eacassith(result,function(a,b)
        //         {
        //             $("#field").append(' <option value="'+b.id+'">'+b.name+'</option>');
        //         })



        // }});
        //         })
        //     })
        // 
    </script>












    //
    <script>
        //         // dd($request->all());
        //         // $(document).ready(function() {


        //         // });



        //         // function updateExecutive() {
        //     // const area = document.getElementById("area").value;
        //     // const executiveSelect = document.getElementById("executive");
        //     // executiveSelect.innerHTML = "<option value=''>Select an executive</option>"; // reset the executive options
        //     // if (area) {
        //     //   executives[area].forEach(function(executive) {
        //     //     const option = document.createElement("option");
        //     //     option.value = executive;
        //     //     option.text = executive;
        //     //     executiveSelect.add(option);
        //     //   });
        //     // }
        // //   }

        //     
    </script>


    <!--end page wrapper -->
@stop
