<!--start page wrapper -->
@extends('layout')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">


            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" role="tablist">

                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-addnew" role="tab"
                                    aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">add_new</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link " data-bs-toggle="pill" href="#primary-pills-ongoing" role="tab"
                                    aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">on_going</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-completed" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">completed</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-cancelled" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Cancelled</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="primary-pills-addnew" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-center">

                                            <h6>New Valuation</h6>
                                        </div>
                                        <hr>
                                        <form class="row g-2">

                                            <p>Valuation for</p>
                                            <div class="col-md-3">
                                                <label>First Name</label>
                                                <input class="form-control mb-3" type="text" placeholder="First Name"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Middel Name</label>
                                                <input class="form-control mb-3" type="text" placeholder="Middle Name"
                                                    aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Last Name</label>
                                                <input class="form-control mb-3" type="text" placeholder="Last Name"
                                                    aria-label="default input example">
                                            </div>




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
                                                    <option value="14">Cholamandalam Investment And Finance ltd.
                                                    </option>
                                                    <option value="15">Easy Home Finance Ltd</option>
                                                    <option value="16">Equitas Small Finance Bank Ltd</option>
                                                    <option value="17">Fullerton India Home Finance Company Ltd.
                                                    </option>
                                                    <option value="18">JM Financial Home Loans Ltd</option>
                                                    <option value="19">Motilal Oswal Home Finance Limited</option>
                                                    <option value="20">SBFC Finance Pvt.Ltd.</option>
                                                    <option value="21">Vastu Housing Finance Corporation Ltd</option>
                                                    <option value="22">AU Small Finance Bank Limited</option>
                                                    <option value="23">Capri Global Capital Limited</option>
                                                    <option value="24">Piramal Capital & Housing finance Limited.
                                                    </option>
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
                                                    <option value="HL-Extension/Improvement">HL-Extension/Improvement
                                                    </option>
                                                    <option value="HL-Plot Purchase+Construction">HL-Plot
                                                        Purchase+Construction</option>
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
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Contact Number" aria-label="default input example">
                                            </div>

                                            <div class="col-md-3">
                                                <label>Alternate Contact Number</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Alternate Contact Number"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-md-3">

                                                <label>Address of Individual</label>
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
                                                <label>Due Date</label>
                                                <input type="date" class="form-control">
                                            </div>


                                            <div class="col-md-3">
                                                <label>Comment / Remarks</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3"></textarea>

                                            </div>

                                            <div class="col-md-3">
                                                <label>Documents Name</label>
                                                <input class="form-control mb-3" type="text"
                                                    placeholder="Documents Name" aria-label="default input example"
                                                    id="documents_name">
                                            </div>
                                    
                                           <div class="col-md-3">
                                                <label>Documents Name</label>
                                                <input class="form-control mb-3" type="file"
                                                    placeholder="" aria-label="default input example"
                                                    id="upload">
                                            </div>
                                    

                                    <div class="col-md-3" style="margin-top:3.3%;">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                            id="add_row">Submit</button>
                                    </div>

                                    </form>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3"
                                                class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Upload Documents</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="doc">



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>




                        </div>


                        <div class="tab-pane fade" id="primary-pills-ongoing" role="tabpanel">

                            <!--start page wrapper -->

                            <div class="page-wrapper">
                                <div class="page-content">




                                    <div class="d-flex align-items-center max-auto">
                                        <div>
                                            <h5 class="mb-0">Ongoing Valuations</h5>
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
                                                                    <option value="4">Pramod Kashinath Ingole</option>
                                                                    <option value="5">Akshay Janardan Gaikwad</option>
                                                                    <option value="7">Niranjan Pandurang Maighane
                                                                    </option>
                                                                    <option value="21">Gokul Sunil Khandare</option>
                                                                    <option value="22">Sidhant Nagorao Shejode</option>
                                                                    <option value="23">Mayur Sunil Khandare</option>
                                                                    <option value="26">Shrikant Balasaheb Khating
                                                                    </option>
                                                                    <option value="27">Dummy Amravati</option>
                                                                    <option value="28">Ankush Vijay Nimkar</option>
                                                                    <option value="29">Audumber Pandurang Hande
                                                                    </option>
                                                                    <option value="31">Sachin Shalik Dhande</option>
                                                                    <option value="32">Ankit Sureshrao Hanumante
                                                                    </option>
                                                                    <option value="34">Abhijeet S Dhule</option>
                                                                    <option value="38">Ajay Balbudhe</option>
                                                                    <option value="39">Rehaan Khan Aasif Khan</option>
                                                                    <option value="40">Ankit Prakash Bidwaik</option>
                                                                    <option value="41">Pallavi Mayur Khandare</option>
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



                            <!--end page wrapper -->

                        </div>



                        <div class="tab-pane fade" id="primary-pills-completed" role="tabpanel">

                            <!--start page wrapper -->

                            <div class="page-wrapper">
                                <div class="page-content">




                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="mb-0">Completed Valuations</h5>
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
                                                                                    type="text"
                                                                                    placeholder="First Name"
                                                                                    aria-label="default input example">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input class="form-control mb-3"
                                                                                    type="text"
                                                                                    placeholder="Middle Name"
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
                                                                                    type="text"
                                                                                    placeholder="Valuation ID"
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
                                                                                    <option
                                                                                        value="HL-Extension/Improvement">
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
                                                                                <input type="date"
                                                                                    class="form-control">
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
                                                                            <div class="col-md-3"
                                                                                style="margin-top:3.3%;">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Submit</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Cancel</button>
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
                                                                                <label
                                                                                    style="color: red;">17-02-2023</label>


                                                                            </div>




                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-body">

                                                                        <div class="accordion" id="accordionExample">
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingOne">
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
                                                                <button type="button"
                                                                    class="btn btn-primary">Cancel</button>
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
                                                                    <option value="21">Gokul Sunil Khandare</option>
                                                                    <option value="22">Sidhant Nagorao Shejode
                                                                    </option>
                                                                    <option value="23">Mayur Sunil Khandare</option>
                                                                    <option value="26">Shrikant Balasaheb Khating
                                                                    </option>
                                                                    <option value="27">Dummy Amravati</option>
                                                                    <option value="28">Ankush Vijay Nimkar</option>
                                                                    <option value="29">Audumber Pandurang Hande
                                                                    </option>
                                                                    <option value="31">Sachin Shalik Dhande</option>
                                                                    <option value="32">Ankit Sureshrao Hanumante
                                                                    </option>
                                                                    <option value="34">Abhijeet S Dhule</option>
                                                                    <option value="38">Ajay Balbudhe</option>
                                                                    <option value="39">Rehaan Khan Aasif Khan</option>
                                                                    <option value="40">Ankit Prakash Bidwaik</option>
                                                                    <option value="41">Pallavi Mayur Khandare</option>
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








                            <!--end page wrapper -->


                        </div>



                        <div class="tab-pane fade" id="primary-pills-cancelled" role="tabpanel">


                            <!--start page wrapper -->

                            <div class="page-wrapper">
                                <div class="page-content">




                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="mb-0">Cancelled Valuations</h5>
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
                                                                                    type="text"
                                                                                    placeholder="First Name"
                                                                                    aria-label="default input example">
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input class="form-control mb-3"
                                                                                    type="text"
                                                                                    placeholder="Middle Name"
                                                                                    aria-label="default input example">
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <input class="form-control mb-3"
                                                                                    type="text"
                                                                                    placeholder="Last Name"
                                                                                    aria-label="default input example">
                                                                            </div>
                                                                        </form>


                                                                        <form class="row g-2">

                                                                            <div class="col-md-3">
                                                                                <label>Valuation ID</label>
                                                                                <input class="form-control mb-3"
                                                                                    type="text"
                                                                                    placeholder="Valuation ID"
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
                                                                                    <option value="13">Bandhan Bank
                                                                                        Ltd</option>
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
                                                                                    <option value="22">AU Small
                                                                                        Finance Bank Limited
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
                                                                                    <option value="HL-Purchase">
                                                                                        HL-Purchase</option>
                                                                                    <option
                                                                                        value="HL-Extension/Improvement">
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
                                                                                    <option value="14">Hingoli
                                                                                    </option>
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
                                                                                    <option value="14">Hingoli
                                                                                    </option>
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
                                                                                    type="text"
                                                                                    placeholder="Longitude"
                                                                                    aria-label="default input example">
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label>Latitude</label>
                                                                                <input class="form-control mb-3"
                                                                                    type="text"
                                                                                    placeholder="Latitude"
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
                                                                                <input type="date"
                                                                                    class="form-control">
                                                                            </div>


                                                                            <div class="col-md-3">
                                                                                <label>Comment / Remarks</label>
                                                                                <textarea class="form-control" id="inputAddress" placeholder="Comment / Remarks" rows="3"></textarea>

                                                                            </div>



                                                                            <div class="col-md-3">
                                                                                <label for="formFile"
                                                                                    class="form-label">Upload
                                                                                    Documents</label>
                                                                                <input class="form-control"
                                                                                    type="file" id="formFile">
                                                                            </div>
                                                                            <div class="col-md-3"
                                                                                style="margin-top:3.3%;">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Submit</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Cancel</button>
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
                                                                                <label
                                                                                    style="color: red;">17-02-2023</label>


                                                                            </div>




                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card">
                                                                    <div class="card-body">

                                                                        <div class="accordion" id="accordionExample">
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingOne">
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
                                                                                            type="checkbox"
                                                                                            value=""
                                                                                            id="flexCheckDefault1">
                                                                                        <label class="form-check-label"
                                                                                            for="flexCheckDefault1">Get
                                                                                            Appointment</label>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            value=""
                                                                                            id="flexCheckDefault">
                                                                                        <label class="form-check-label"
                                                                                            for="flexCheckDefault">Visit
                                                                                            Site</label>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            value=""
                                                                                            id="flexCheckDefault2">
                                                                                        <label class="form-check-label"
                                                                                            for="flexCheckDefault2">Do
                                                                                            Valuations</label>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            value=""
                                                                                            id="flexCheckDefault3">
                                                                                        <label class="form-check-label"
                                                                                            for="flexCheckDefault3">Upload
                                                                                            Images</label>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            value=""
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
                                                                <button type="button"
                                                                    class="btn btn-primary">Cancel</button>
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
                                                            <th>Delete</th>

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

                                                            <td><button type="button"
                                                                    class="btn1 btn-outline-danger"><i
                                                                        class='bx bx-trash me-0'></i></button></td>
                                                        </tr>



                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>









                            <!--end page wrapper -->
                        </div>


                    </div>
                </div>
            </div>
        </div>





    </div>
    </div>
@section('js')
    <script>
        $(document).ready(function() {
            $(".add_row").click(function() {
                var documents_name = $("#documents_name").val();
                var upload = $("#upload").val();
                // var details = $("#details").val();



                $("#doc").append(markup);
                //empty all fields
                $("#documents_name").val('');
                $("#upload").val('');
                // $("#details").val('');
            })
        });
    </script>
@stop









<!--end page wrapper -->
