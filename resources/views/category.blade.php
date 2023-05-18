@extends('layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 mx-auto" style="margin-top: -10%;">
                <br><br><br><br><br><br><br>
                <div class="card">

                    <div class="card-body">


                        <div class="card-title d-flex align-items-center">
                        
                            <h5 class="mb-0 text-primary">Category</h5>
                        </div>
                        <hr>
                        <form class="row g-2">
                           

                            <div class="col-md-3">
                                <label class="form-label">Category</label>
                                <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                                    <option value="United States" selected>United States</option>
                                    <option value="United Kingdom" selected>United Kingdom</option>
                                    <option value="Afghanistan" selected>Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                </select>
                            </div>

                        
                    
                            <div class="col-md-3" style="padding:8px" ><br>
                                <button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i>Add </button>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
        

        
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
    
        <!-- <h6 class="mb-0 text-uppercase">DataTable</h6> -->
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Floor</th>  
                            
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. Abhay pande</td>
                                <td></td>
                            
                            
                                <td>	<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> 	
                        

                                    
                                </td>
                    
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</div>
@stop