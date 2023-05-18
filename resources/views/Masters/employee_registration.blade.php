@extends('layout')
@section('content')
		<!--start page wrapper -->
		<br><br><br><br><br><br><br>
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" style="margin-top: -10%;">
						<div class="card">
							{{-- @include('alert') --}}
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Employee Registration</h5>
								</div>
								<hr>
			<form class="row g-2" action="{{route('empregistinsert')}}" method="post" enctype="multipart/form-data">
									@csrf

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Role <span style="color:red">*</span></label>
                                <select class="form-select" name="role_name_id">
							        {{-- @json($role1) --}}
									<option value="" > Select </option>
									@foreach($role1 as $role1)
									
									<option value="{{ $role1->id }}" > {{ $role1->role_name }} </option>
									@endforeach
                                </select>
										
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label"> Name<span style="color:red">*</span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder=" Name" name="name" required>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Contact <span style="color:red">*</span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Contact Person" name="contact" required>
									</div>

									{{-- <div class="col-md-2">
										<label for="inputFirstName" class="form-label">Mobile<span style="color:red">*</span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder=" Enter Mobile" name="mobile" required>
									</div> --}}

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Email<span style="color:red">*</span></label>
										<input type="email" class="form-control" id="inputFirstName" placeholder="Enter Email" name="email" required>
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Bank Name<span style="color:red">*</span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Bank Name" name="bankname" required>
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">IFSC Code<span style="color:red">*</span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="IFSC Code" name="ifsc_code" required>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label"> Account Number<span style="color:red">*</span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Account no" name="account_no" required>
									</div>

									<div class="col-md-2">
										<label class="form-label">Locations<span style="color:red">*</span></label>
										<select class="single-select" name='location_id' id="location">
											<option>Select</option>
											@foreach($location as $location)
											<option value="{{ $location->id }}"> {{ $location->locations }}</option>
											@endforeach
										</select>
									</div>
		
									{{-- <div class="col-md-2">
										<label for="inputFirstName" class="form-label">Area <span
												style="color:red">*</span></label>
										<select class="multiple-select" name="area_id[]" multiple placeholder="Select Area">
											<option>Select</option>
											@foreach($areas as $area)
											<option value={{ $area->id}}> {{ $area->area }}</option>
											@endforeach
										</select>
	
									</div> --}}

									<div class="col-md-2">
										<label class="form-label">Area<span style="color:red">*</span></label>
										<select class="single-select" name='area_id' id="area">
											<option value="">Select</option>
											{{-- @foreach($areas as $areas)
											<option value="{{ $areas->id }}"> {{ $areas->area }}</option>
											@endforeach --}}
										</select>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">User ID<span style="color:red"><span style="color:red">*</span></span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder=" User id"
											name="user_id" required>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">User Name<span style="color:red"><span style="color:red">*</span></span></label>
										<input type="text" class="form-control" id="inputFirstName" placeholder=" User Name"
											name="user_name" required>
									</div>
	
	
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Password<span style="color:red"><span style="color:red">*</span></span></label>
										<input type="text" class="form-control" id="inputFirstName"
											placeholder=" Enter Password" name="password">
									</div>
		

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Upload Aadhar<span style="color:red">*</span></label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="adhar" >
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Upload PAN Card<span style="color:red">*</span></label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="pan" >
									</div>

											
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Upload Photo<span style="color:red">*</span></label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="photo" >
									</div>

											
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Upload-Other<span style="color:red">*</span></label>
										<input type="file" class="form-control" id="inputFirstName" placeholder="" name="other" >
									</div>
									
								
						
									
							
									<div class="col-md-2" style="padding:8px" ><br>
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
										<th>Role</th>  
										<th>Name</th>  
										
										<th>Bank Name</th>
										{{-- <th>City</th> --}}
										
										<th>Area</th>
										<th>Aadhar Card</th>
										<th>PAN Card</th>
										<th>Photo</th>
										<th>Other Documents</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($emp as $emp)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $emp->role_name }}</td>
										<td  data-bs-toggle="tooltip" data-bs-placement="right" title="
										    Name:- {{ $emp->name }}
                                            Contact No:- {{ $emp->contact ,}}
                                            Email:- {{ $emp->email, }}
                                           
                                            ">{{ $emp->name }}</td>
										
										<td data-bs-toggle="tooltip" data-bs-placement="right" title="
										   
                                            IFSC Code:- {{ $emp->ifsc_code ,}}
                                            AccountNumber:- {{ $emp->account_no ,}}
                                            Location:- {{ $emp->locations, }}
                                           
                                            "
										>{{ $emp->bankname }}</td>
										
										<td>{{ $emp->area}}</td>
										<td>{{ $emp->adhar }}</td>
										<td>{{ $emp->pan}}</td>
										<td>{{ $emp->photo}}</td>
										<td>{{ $emp->other}}</td>
										<td><a href="{{ route('empregistedit', $emp->id) }}">	<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>

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
		<script>
			var msg = '{{Session::get('alert ')}}';
			var exist = '{{Session::has('alert ')}}';
			if (exist) {
				alert(msg);
			}
		</script>
		@stop
		@section('js')
<script>
$(document).ready(function() {
	$(document).on("change", "#location", function() {
            $.ajax({
                url: "{{route('get_area_id')}}",
                data: {
                    id: $(this).val(),
                },
                success: function(result) {
                    $("#area").empty();
                    $.each(result, function(a, b) {
                        $("#area").append('<option value="' + b.id + '">' + b.area + '</option>');
                    })
                    $("#area").selectpicker('refresh');
                }
            });
        })

    })


	</script>

		@stop