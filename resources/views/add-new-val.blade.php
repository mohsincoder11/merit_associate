@extends('layout')
@section('content')
    <!--start page wrapper -->

    <div class="page-wrapper" style="margin-left:70px !important;">
        <div class="page-content">
            @include('alerts')


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
                <h6 class="mb-0 text-uppercase">Valuations</h6>
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
                                                <label>Client</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="associatesbanks_id">
                                                    <option selected>Select Client</option>
                                                    @foreach ($associatesbank as $associatesbank)
                                                        <option value="{{ $associatesbank->id }}">
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
                                                        <option value="{{ $product->id }}"> {{ $product->products }}
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
                                                        <option value="{{ $location->id }}"> {{ $location->locations }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>


                                            <div class="col-md-3">
                                                <label>Area 
                                                    {{-- <label>[Add New]</label> --}}
                                                    <a  href="" data-bs-toggle="modal" data-bs-target="#exampleScrollableModal" style="color:blue">[Add New]</a> 
                                                </label>
                                                <select class="form-select mb-3 areas" aria-label="Default select example"
                                                    name="area_id" id="area">
                                                    <option selected>Select </option>

                                                    {{-- @foreach ($area as $area)
												<option value="{{ $area->id }}" > {{ $area->area }} </option>
												@endforeach --}}

                                                </select>
                                            </div>
                                            {{-- <div class="col"> --}}
                                                <!-- Button trigger modal -->
                                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Basic modal</button> --}}
                                                <!-- Modal -->
                                         
                                                {{-- </div> --}}
                                            {{-- </div> --}}

                                            <div class="col-md-3">
                                                <label>Field Executive</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="field_executive_id" id="field">
                                                    <option selected>Select</option>
                                                    
                                                    {{-- @foreach ($ as $associatesbank)
                                                        <option value="{{ $associatesbank->id }}">
                                                            {{ $associatesbank->bankname }} </option>
                                                    @endforeach --}}

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
                                                    name="contact_no">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Alternate Contact Number</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Alternate Contact Number"
                                                    aria-label="default input example" name="alt_cont_no">
                                            </div> 

                                            <div class="col-md-3">
                                                <label>Address of Individual</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="2" name="address"></textarea>
                                            </div>

                                            <div class="col-md-3">
                                                <label>City</label>
                                                <input class="form-control mb-3" type="text" placeholder="City"
                                                    name="city" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>State</label>
                                                <input class="form-control mb-3" type="text" placeholder="State"
                                                    name="state" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Pincode</label>
                                                <input class="form-control mb-3" type="text" placeholder="Pincode"
                                                    name="pincode" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Longitude</label>
                                                <input class="form-control mb-3" type="text" placeholder="Longitude"
                                                    name="longitude" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Latitude</label>
                                                <input class="form-control mb-3" type="text" placeholder="Latitude"
                                                    name="latitute" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Tags</label>
                                                <input class="form-control mb-3" type="text" placeholder="Tags"
                                                    name="tags" aria-label="default input example">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Due Date</label>
                                                <input type="date" class="form-control" name="date">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Comment / Remarks</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3" name="comment"></textarea>

                                            </div>

                                            <div class="col-md-3">
                                                <label>Status</label>
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    name="status" >
                                                    <option >Select </option>
                                                    <option value="ongoing">ongoing</option>
                                                    <option value="completed">completed</option>
                                                    <option value="cancelled">cancelled</option>
                                                </select>
                                            </div>


                                            <span class="doc1">

                                            <div class="row document_row"  >


                                                <div class="col-md-3">
                                                    <label>Documents Name</label>
                                                    <input class="form-control mb-3 first_input" type="text"
                                                        placeholder="Documents Name" name="docname[]"
                                                        aria-label="default input  example" id="documents_name" >
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Upload Document</label>
                                                    <input class="form-control mb-3 first_input " type="file" placeholder=""
                                                        name="upd[]" aria-label="default input example">
                                                </div>


                                                <div class="col-md-3">

                                                <button type="button" class="  btn btn-danger  remove_row" ><i
                                                        class="fadeIn animated bx bx-plus  "></i>Delete </button>
                                              
                                                </div>
                            
                                            </div>
                                     
                                        </span>

                                        <div class="col-md-3" style="padding:5px"><br>
                                            <button type="button" class="  btn btn-success add_row" ><i
                                                    class="fadeIn animated bx bx-plus  "></i>Add More </button>
                                        </div>
                                        
                                       
                                     


                                           



                                            {{-- <div class="row doc1">
                                               
                                                

                                            </div> --}}


                                            <div class="col-md-3" style="padding:8px"><br>
                                                <button type="submit" class=" btn btn-primary"><i
                                                        class="fadeIn animated bx bx-plus"></i> Submit </button>
                                            </div>


                                        </form>




                                          


                                            <div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                    <div class="modal-body">
                                                                
                                                        <form class="row g-2" action="{{ route('areainsert') }}" method="post">@csrf
                                                            <div class="row">
                                                            
                                                                <div class="col-md-6" >
                                                                    <label class="form-label">Locations<span style="color:red">*</span></label>
                                                                    <select  class="form-control"  name="location_id">
                                                                     
                                                                         <option>Select</option>
                                                                        @foreach ($data as $location)
                                                                        <option value="{{ $location->id }}"> {{ $location->locations }}
                                                                        </option>
                                                                    @endforeach
                                                                    </select> 
                                                                </div>
                     
                                                                <div class="col-md-6">
                                                                    <label for="inputFirstName" class="form-label">Area<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" id="inputFirstName"
                                                                        placeholder="Area" name="area" required>
                                                                </div>
                        
                                                                 

                                                               
                                                            </div>
                                                        </form>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>
                                       
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
                                                                <th> Alternate Contact Number</th>
                                                                <th> Address of Indiviual</th>
                                                                <th>City</th>
                                                                <th>State </th>
                                                                <th>Pincode</th>
                                                                <th>Longitute</th>
                                                                <th>Latitute</th>
                                                                <th>Tags</th>
                                                                <th>Due Date</th>
                                                                <th>Comments</th>
                                                                <th>Status</th>
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
                                                                    <td>{{ $add_new_all->field_executive }}</td>
                                                                    <td>{{ $add_new_all->assistant_valuer }}</td>
                                                                    <td>{{ $add_new_all->technical_manager }}</td>
                                                                    <td>{{ $add_new_all->technical_head }}</td>
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
                                                                        <a href="{{ route('addnewedit',$add_new_all) }}"> <button type="button"
                                                                            class="btn1 btn-outline-success"><i
                                                                                class='bx bx-edit-alt me-0'></i></button></a>

                                                                                <a href="{{ route('addnewdelete',$add_new_all) }}"> <button type="button"
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
                                            {{-- <div class="modal fade" id="exampleLargeModal" tabindex="-1"
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

                                                                        <div class="row doc">
                                                                            <tr>
                                                                                <td></td>
                                                                            <td></td>
                                                                        </tr>
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
                                            </div> --}}
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
                                                            <input type="text" id="addnew_id" name="addnew_id">

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
                                                                            <label  id="field_executive"></label>


                                                                        </div>
                                                                        <div class="col-md-4">

                                                                            <label><b>Client</b></label><br>
                                                                            <label  id="client"></label>


                                                                        </div>

                                                                        <div class="col-md-2">

                                                                            <label><b>Due Date</b></label><br>
                                                                            <label style="color: red;"  id="due_date"></label>


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
                                                                                                    <p>{{ $add_new_all->locations }}</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Area</label>
                                                                                                    <p>{{ $add_new_all->area }}</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Product</label>
                                                                                                    <p>{{ $add_new_all->products }}
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <p>{{ $add_new_all->contact_no }}</p>
                                                                                                </td>

                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p>{{ $add_new_all->alt_cont_no }}</p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address of
                                                                                                        Individual</label>
                                                                                                    <p>{{ $add_new_all->address }}
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>City</label>
                                                                                                    <p>{{ $add_new_all->city }}</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>State</label>
                                                                                                    <p>{{ $add_new_all->state }}</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Pincode</label>
                                                                                                    <p>{{ $add_new_all->pincode }}</p>
                                                                                                </td>
                                                                                            </tr>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Latitude</label>
                                                                                                    <p>{{ $add_new_all->latitute }}</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Longitude</label>
                                                                                                    <p>{{ $add_new_all->longitude }}</p>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <label>Tags</label>
                                                                                                    <p>{{ $add_new_all->tags }}</p>
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Comment /
                                                                                                        Remarks</label>
                                                                                                    <p> {{ $add_new_all->comment }}</p>
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

                                                                                <div class="col-md-6">
                                                                                    <div class="upload-btn-wrapper">
                                                                                        <<input type="file"
                                                                                        name="myfile" />
                                                                                        <button class="btn11">Upload a
                                                                                            file</button>
                                                                                       
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
                                                            <div class="row ">
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
                                                            </div>
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
                                                        @foreach ($ongoing as $ongoing)
                                                            
                                                       
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $ongoing->firstname }}</td>
                                                        <td>{{ $ongoing->locations }}</td>
                                                        <td>{{ $ongoing->bankname }}</td>
                                                        <td>{{ $ongoing->created_at }}</td>
                                                        <td>{{ $ongoing->status }}</td>
                                                        <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal1"
                                                                class="btn1 btn-outline-success view" id="{{ $ongoing->id }}"><i
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

                        <div class="tab-pane fade" id="primary-pills-complete" role="tabpanel">

                            
                       
        
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="mb-0">Completed Valuations</h5>
                                        </div>
        
                                        <div class="font-5 ms-auto">
                                            <div class="col">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleLargeModal"><a href="{{ route('addnew') }}">New Valuations</a></button>
                                 
                                            </div>
        
                                            <div class="col">
                                                <!-- Button trigger modal -->
        
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleLargeModal1" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Valuation for AASIF YUSUF
                                                                    SHAIKH
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
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
        
                                                                                <label><b>Field
                                                                                        Executive</b></label><br>
                                                                                <label>Rehaan Khan Aasif Khan</label>
        
        
                                                                            </div>
                                                                            <div class="col-md-4">
        
                                                                                <label><b>Client</b></label><br>
                                                                                <label>Cholamandalam Investment And
                                                                                    Finance
                                                                                    ltd.</label>
        
        
                                                                            </div>
        
                                                                            <div class="col-md-2">
        
                                                                                <label><b>Due Date</b></label><br>
                                                                                <label style="color: red;">17-02-2023</label>
        
        
                                                                            </div>
        
        
        
        
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
                                                                                        type="button" data-bs-toggle="collapse"
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
                                                                                                        <p>LAP-Residential
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
        
        
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <label>Contact
                                                                                                            Number</label>
                                                                                                        <p>9011154084
                                                                                                        </p>
                                                                                                    </td>
        
                                                                                                    <td colspan="2">
                                                                                                        <label>Alternate
                                                                                                            Contact
                                                                                                            Number</label>
                                                                                                        <p>9011154084
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
        
        
                                                                                                <tr>
                                                                                                    <td colspan="3">
                                                                                                        <label>Address
                                                                                                            of
                                                                                                            Individual</label>
                                                                                                        <p>MANIK CHOUK,
                                                                                                            WORD
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
                                                                                                        <p>mahrashtra
                                                                                                        </p>
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
                                                                                                        <p>PLEASE VISIT.
                                                                                                        </p>
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
                                                                                    <button type="button" class="btn btn-primary"
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
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp;
                                                                                &nbsp; &nbsp
                                                                                <br class="d-md-none">
        
                                                                            </div>
                                                                            <div class="media align-items-center">
        
        
                                                                                <div class="card-body">
                                                                                    <div class="list-group">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
        
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
    
                                                            @foreach($completed as $com)
                                                            <tr>
                                                                <td>{{ $com->index+1 }}</td>
                                                                <td>{{ $com->firstname }}</td>
                                                                <td>{{ $com->locations }}</td>
                                                                <td>{{ $com->bankname }}</td>
                                                                <td>{{ $com->created_at }}</td>
                                                                <td>{{ $com->status }}</td>
                                                                <td>
                                                                    <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleLargeModal1"
                                                                        class="btn1 btn-outline-success"><i
                                                                            class="lni lni-remove-file"></i></button>
                                                                </td>
                                                            </tr>
                                                            @endforeach
            
            
            
                                                        </tbody>
            
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
        
        
                                    </div>
                                
        
        
        
                              
                       
                        
                               
                            <div class="col">
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new reminder</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
        
        
                                                                <label>Client</label>
                                                                <select class="form-select mb-3"
                                                                    aria-label="Default select example">
                                                                    <option selected>Reminder For</option>
                                                                    <option value="1">Admin</option>
                                                                    <option value="2">Amol Suryaprakash Jawanjal
                                                                    </option>
                                                                    <option value="3">Ashish Vasantrao Bhawarkar
                                                                    </option>
                                                                    <option value="4">Pramod Kashinath Ingole
                                                                    </option>
                                                                    <option value="5">Akshay Janardan Gaikwad
                                                                    </option>
                                                                    <option value="7">Niranjan Pandurang Maighane
                                                                    </option>
                                                                    <option value="21">Gokul Sunil Khandare
                                                                    </option>
                                                                    <option value="22">Sidhant Nagorao Shejode
                                                                    </option>
                                                                    <option value="23">Mayur Sunil Khandare
                                                                    </option>
                                                                    <option value="26">Shrikant Balasaheb Khating
                                                                    </option>
                                                                    <option value="27">Dummy Amravati</option>
                                                                    <option value="28">Ankush Vijay Nimkar</option>
                                                                    <option value="29">Audumber Pandurang Hande
                                                                    </option>
                                                                    <option value="31">Sachin Shalik Dhande
                                                                    </option>
                                                                    <option value="32">Ankit Sureshrao Hanumante
                                                                    </option>
                                                                    <option value="34">Abhijeet S Dhule</option>
                                                                    <option value="38">Ajay Balbudhe</option>
                                                                    <option value="39">Rehaan Khan Aasif Khan
                                                                    </option>
                                                                    <option value="40">Ankit Prakash Bidwaik
                                                                    </option>
                                                                    <option value="41">Pallavi Mayur Khandare
                                                                    </option>
                                                                    <option value="43">Hariom G. Jagtap</option>
                                                                    <option value="44">Shubham R Kadu</option>
                                                                </select>
        
                                                                </select>
        
                                                            </div>
        
        
                                                            <div class="col-md-6">
                                                                <label>Valuation</label>
                                                                <select class="form-select mb-3"
                                                                    aria-label="Default select example">
                                                                    <option selected>Valuation</option>
                                                                    <option value="1"></option>
                                                                </select>
        
                                                            </div>
        
                                                            <div class="col-md-6">
                                                                <label class="form-label">Date </label>
                                                                <input class="result form-control" type="text"
                                                                    id="date" placeholder="Date Picker...">
                                                            </div>
        
                                                            <div class="col-md-6">
                                                                <label class="form-label">Time </label>
                                                                <input class="result form-control" type="text"
                                                                    id="time" placeholder="Date Picker...">
                                                            </div>
        
        
                                                            <div class="col-md-11">
                                                                <label>Description</label>
                                                                <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                                                            </div>
                                                        </div>
        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        
                    </div>

                    <div class="tab-pane fade" id="primary-pills-cancel" role="tabpanel">
                        <div class="page-wrapper mx-auto" >
                            <div class="page-content">
    
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Cancelled Valuations</h5>
                                    </div>
    
                                    <div class="font-5 ms-auto">
                                        <div class="col">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleLargeModal"><a href="{{ route('addnew') }}">New Valuations</a></button>
                                            <!-- Modal -->
                                            {{-- <div class="modal fade" id="exampleLargeModal" tabindex="-1"
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
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="First Name"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Middle Name"
                                                                                aria-label="default input example">
                                                                        </div>
    
                                                                        <div class="col-md-3">
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Last Name"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                    </form>
    
    
                                                                    <form class="row g-2">
    
                                                                        <div class="col-md-3">
                                                                            <label>Valuation ID</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Valuation ID"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>Client</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Client
                                                                                </option>
                                                                                <option value="12">India
                                                                                    Shelter
                                                                                    Finance Corporation
                                                                                    Ltd.</option>
                                                                                <option value="13">Bandhan Bank
                                                                                    Ltd</option>
                                                                                <option value="14">
                                                                                    Cholamandalam
                                                                                    Investment And Finance
                                                                                    ltd.</option>
                                                                                <option value="15">Easy Home
                                                                                    Finance Ltd</option>
                                                                                <option value="16">Equitas
                                                                                    Small
                                                                                    Finance Bank Ltd
                                                                                </option>
                                                                                <option value="17">Fullerton
                                                                                    India
                                                                                    Home Finance Company
                                                                                    Ltd.</option>
                                                                                <option value="18">JM Financial
                                                                                    Home Loans Ltd</option>
                                                                                <option value="19">Motilal
                                                                                    Oswal
                                                                                    Home Finance Limited
                                                                                </option>
                                                                                <option value="20">SBFC Finance
                                                                                    Pvt.Ltd.</option>
                                                                                <option value="21">Vastu
                                                                                    Housing
                                                                                    Finance Corporation Ltd
                                                                                </option>
                                                                                <option value="22">AU Small
                                                                                    Finance Bank Limited
                                                                                </option>
                                                                                <option value="23">Capri Global
                                                                                    Capital Limited</option>
                                                                                <option value="24">Piramal
                                                                                    Capital
                                                                                    & Housing finance
                                                                                    Limited.</option>
                                                                                <option value="25">Fullerton
                                                                                    India
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
                                                                                <option selected>Select Product
                                                                                </option>
                                                                                <option value="HL-Construction">
                                                                                    HL-Construction</option>
                                                                                <option value="HL-Purchase">
                                                                                    HL-Purchase</option>
                                                                                <option value="HL-Extension/Improvement">
                                                                                    HL-Extension/Improvement
                                                                                </option>
                                                                                <option value="HL-Plot Purchase+Construction">
                                                                                    HL-Plot
                                                                                    Purchase+Construction</option>
                                                                                <option value="LAP-Commercial">
                                                                                    LAP-Commercial</option>
                                                                                <option value="LAP-Residential">
                                                                                    LAP-Residential</option>
                                                                                <option value="NPA">NPA</option>
                                                                                <option value="Part Disbursement">
                                                                                    Part
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
                                                                                <option value="10">Akola
                                                                                </option>
                                                                                <option value="9">Amravati
                                                                                </option>
                                                                                <option value="12">Wardha
                                                                                </option>
                                                                                <option value="13">Washim
                                                                                </option>
                                                                                <option value="14">Hingoli
                                                                                </option>
                                                                                <option value="15">Buldhana
                                                                                </option>
                                                                                <option value="16">Jalana
                                                                                </option>
                                                                                <option value="17">Aurangabad
                                                                                </option>
                                                                                <option value="18">Parbhani
                                                                                </option>
                                                                                <option value="19">Nanded
                                                                                </option>
                                                                                <option value="20">Latur
                                                                                </option>
                                                                            </select>
    
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>Area <label>[Add
                                                                                    New]</label></label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Location
                                                                                </option>
                                                                                <option value="11">Yavatmal
                                                                                </option>
                                                                                <option value="10">Akola
                                                                                </option>
                                                                                <option value="9">Amravati
                                                                                </option>
                                                                                <option value="12">Wardha
                                                                                </option>
                                                                                <option value="13">Washim
                                                                                </option>
                                                                                <option value="14">Hingoli
                                                                                </option>
                                                                                <option value="15">Buldhana
                                                                                </option>
                                                                                <option value="16">Jalana
                                                                                </option>
                                                                                <option value="17">Aurangabad
                                                                                </option>
                                                                                <option value="18">Parbhani
                                                                                </option>
                                                                                <option value="19">Nanded
                                                                                </option>
                                                                                <option value="20">Latur
                                                                                </option>
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
                                                                                <option selected>Select Assistant
                                                                                    Valuer
                                                                                </option>
                                                                                <option></option>
    
                                                                            </select>
    
                                                                        </div>
    
    
    
                                                                        <div class="col-md-3">
                                                                            <label>City</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="City"
                                                                                aria-label="default input example">
                                                                        </div>
    
    
                                                                        <div class="col-md-3">
                                                                            <label>State</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="State"
                                                                                aria-label="default input example">
                                                                        </div>
    
                                                                        <div class="col-md-3">
                                                                            <label>Pincode</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Pincode"
                                                                                aria-label="default input example">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>Longitude</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Longitude"
                                                                                aria-label="default input example">
                                                                        </div>
    
                                                                        <div class="col-md-3">
                                                                            <label>Latitude</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Latitude"
                                                                                aria-label="default input example">
                                                                        </div>
    
                                                                        <div class="col-md-3">
                                                                            <label>Tags</label>
                                                                            <input class="form-control mb-3" type="text"
                                                                                placeholder="Tags"
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
                                                                            <label for="formFile" class="form-label">Upload
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
                                            </div> --}}
                                        </div>
    
                                        <div class="col">
                                            <!-- Button trigger modal -->
    
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleLargeModal1" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Valuation for AASIF YUSUF
                                                                SHAIKH
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
    
                                                                            <label><b>Field
                                                                                    Executive</b></label><br>
                                                                            <label>Rehaan Khan Aasif Khan</label>
    
    
                                                                        </div>
                                                                        <div class="col-md-4">
    
                                                                            <label><b>Client</b></label><br>
                                                                            <label>Cholamandalam Investment And
                                                                                Finance
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
                                                                                    type="button" data-bs-toggle="collapse"
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
                                                                                                    <p>LAP-Residential
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>
    
    
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <label>Contact
                                                                                                        Number</label>
                                                                                                    <p>9011154084
                                                                                                    </p>
                                                                                                </td>
    
                                                                                                <td colspan="2">
                                                                                                    <label>Alternate
                                                                                                        Contact
                                                                                                        Number</label>
                                                                                                    <p>9011154084
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>
    
    
                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <label>Address
                                                                                                        of
                                                                                                        Individual</label>
                                                                                                    <p>MANIK CHOUK,
                                                                                                        WORD
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
                                                                                                    <p>mahrashtra
                                                                                                    </p>
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
                                                                                                    <p>PLEASE VISIT.
                                                                                                    </p>
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
                                                                                        <button class="btn11">Upload
                                                                                            a file</button>
                                                                                        <input type="file"
                                                                                            name="myfile" />
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
                                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp;
                                                                            &nbsp; &nbsp
                                                                            <br class="d-md-none">
    
                                                                        </div>
                                                                        <div class="media align-items-center">
    
    
                                                                            <div class="card-body">
                                                                                <div class="list-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
    
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
                                                        @foreach($cancelled as $can)
                                                        <tr>
                                                            <td>{{ $can->index+1 }}</td>
                                                            <td>{{ $can->firstname }}</td>
                                                            <td>{{ $can->locations }}</td>
                                                            <td>{{ $can->bankname }}</td>
                                                            <td>{{ $can->created_at }}</td>
                                                            <td>{{ $can->status }}</td>
                                                        <td>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleLargeModal1"
                                                                class="btn1 btn-outline-success"><i
                                                                    class="lni lni-remove-file"></i></button>
                                                        </td>
    
                                                        <td><button type="button" class="btn1 btn-outline-danger"><i
                                                                    class='bx bx-trash me-0'></i></button></td>
                                                    </tr>
                                                    @endforeach
        
    
    
    
                                                </tbody>
    
                                            </table>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          ...
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
    
    
    
                            </div>
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



               



            }) 

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
                });

                $(document).on("click", ".add_row", function() {
                       
                        var mark =
                            '  <div class="row document_row"><div class="col-md-3"> <label>Documents Name</label>  <input class="form-control mb-3 " type="text"  placeholder="Documents Name" name="docname[]"  aria-label="default input  example" id="documents_name"></div> <div class="col-md-3"><label>Upload Document</label><input class="form-control mb-3 " type="file" placeholder="" name="upd[]" aria-label="default input example" id="upload"><button type="button" class="btn btn-danger remove_row">Delete</button> </div></div> ';
                       console.log($('.document_row').clone());
                            // $(".doc1").append(mark);
                            $(".doc1").append( $('.document_row:first').clone());
                            $('.document_row:first').find('.first_input').val('');
                        //empty all fields

                        // $("#details").val('');
                    })


                    $(document).on("click",".remove_row",function()
                    {
                        $(this).closest('.document_row').remove();
                    })

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
$("#field_executive").text(lable.field_executive_id);
$("#client").text(lable.associatesbanks_id);
$("#due_date").text(lable.date);

// $("#sheduletable").empty();
// $.each(schedule,function(a,b)
//           {
//             let status='pending';
//             if(b.status=='1'){
//                 status='paid';
//             }
//             if(b.status=='2'){
//                 status='unpaid';
//             }
//               $("#sheduletable").append('<tr><td>'+b.installment_number+'</td><td>'+b.due_date+'</td><td>'+b.installment_amount+'</td><td>'+status+'</td></tr>');
//           })
}
});
})
    })
</script>
   










   
    


    <!--end page wrapper -->
@stop
