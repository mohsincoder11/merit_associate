@extends('layout')
@section('content')
		<!--start page wrapper -->
		<br><br><br><br><br><br><br>
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" style="margin-top: -10%;">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Employee Registration</h5>
								</div>
								<hr>
			<form class="row g-2" action="{{route('empregistupdate')}}" method="post" enctype="multipart/form-data">
									@csrf 
									<input type="hidden" name="id" value="{{$edit_data->id}}">		

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Role <span style="color:red">*</span></label>
										<select class="form-select" name="role">
											<option>Select</option>
										   
											<option value="field_executive"  @if($edit_data->role =="field_executive") selected @endif>Field Executive</option>
											<option value="assistant_valuer" @if($edit_data->role =="assistant_valuer") selected @endif>Assistant Valuer</option>
											<option value="technical_manager" @if($edit_data->role =="technical_manager") selected @endif >Technical Manager</option>
										   
											<option value="technical_head" @if($edit_data->role =="technical_head") selected @endif >Technical Head</option>
										</select>
	
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label"> Name</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder=" Name" name="name" value="{{$edit_data->name}}">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Contact  </label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Contact Person" name="contact" value="{{$edit_data->contact}}">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Mobile </label>
										<input type="text" class="form-control" id="inputFirstName" placeholder=" Enter Mobile" name="mobile" value="{{$edit_data->mobile}}">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Email </label>
										<input type="email" class="form-control" id="inputFirstName" placeholder="Enter Email" name="email" value="{{$edit_data->email}}">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Bank Name </label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Bank Name" name="bankname" value="{{$edit_data->bankname}}">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">IFSC Code </label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="IFSC Code" name="ifsc_code" value="{{$edit_data->ifsc_code}}">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label"> Account Number </label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Account no" name="account_no" value="{{$edit_data->account_no}}">
									</div>

									<div class="col-md-2">
										<label class="form-label">Locations</label>
										<select class="single-select" name='location_id' >
											<option>Select</option>
											@foreach($location as $location)
											<option value="{{ $location->id }}" @if($edit_data->location_id ==$location->id) selected @endif> {{ $location->locations }}</option>
											@endforeach
										</select>
									</div>

									<div class="col-md-2">
										<label class="form-label">Area<span style="color:red">*</span></label>
										<select class="single-select" name='area_id' >
											<option>Select</option>
											@foreach($area as $area)
											<option value="{{ $area->id }}" @if($edit_data->area_id ==$area->id) selected @endif> {{ $area->area }}</option>
											@endforeach
										</select>
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Upload Aadhar</label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="adhar" value="{{$edit_data->adhar}}">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Upload PAN Card</label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="pan" value="{{$edit_data->pan}}">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Upload Photo </label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="photo" value="{{$edit_data->photo}}">
									</div>
									
									
										
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Upload Other </label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="other" value="{{$edit_data->other}}">
									</div>
						
									
							
									<div class="col-md-3" style="padding:8px" ><br>
										<button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i>Update </button>
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
										<th>Role</th>  
										<th>Name</th>  
										<th>Contact </th> 
										<th>Mobile</th> 
										<th>Email</th>
										<th>Bank Name</th>
										<th>City</th>
										<th>IFSC</th>
										<th>Account No.</th>
										<th>Location</th>
										<th>Area</th>
										<th>Aadhar Card</th>
										<th>PAN Card</th>
										<th>Photo</th>
									
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($emp as $emp)
									<tr>
										
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $emp->role }}</td>
										<td>{{ $emp->name }}</td>
										<td>{{ $emp->contact }}</td>
										<td>{{ $emp->mobile }}</td>
										<td>{{ $emp->email }}</td>
										<td>{{ $emp->bankname }}</td>
										<td>{{ $emp->city }}</td>
										<td>{{ $emp->ifsc_code }}</td>
										<td>{{ $emp->account_no}}</td>
										<td>{{ $emp->locations}}</td>
										<td>{{ $emp->area}}</td>
										<td>{{ $emp->adhar }}</td>
										<td>{{ $emp->pan}}</td>
										<td>{{ $emp->photo}}</td>
										<td></td>
									
									
										<td>	<a href="{{ route('empregistedit', $emp->id) }}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>

											<a href="{{ route('empregistdelete', $emp->id) }}"><button type="button" class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0'></i></button> </a>	
								

											
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
		<!--end page wrapper -->
		@stop
		