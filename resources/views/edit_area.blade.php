@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-8 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add Area</h5>
								</div>
								<hr>
								<form class="row g-2" action="{{route('areaupdate')}}" method="post">
									@csrf
									<input type="hidden" name="id" value="{{$edit_data->id}}">			
						
									<div class="col-md-4">
										
											<label class="form-label">Locations</label>
											<select class="single-select" class="form-control" name="location_id">
												{{-- @json($location); --}}
												@foreach ($data as $locations)
													<option value="{{ $locations->id }}" @if($edit_data->location_id ==$locations->id) selected @endif> {{ $locations->locations }}
													</option>
												@endforeach
											</select>
										
									</div>

									<div class="col-md-4">
										<label for="inputFirstName" class="form-label">Area*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Area" name="area" value="{{$edit_data->area}}">
									</div>
						
									<div class="col-md-3" style="margin-top:5%;" >
								       <button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i> Update</button>
									</div>
								</form>
		
							</div>
		
						</div>
					</div>
				</div>
				

				
				<!--end page wrapper -->
				<!--start overlay-->
				<div class="overlay toggle-icon"></div>
				<hr/>
				<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr. No.</th>
									    <th>Location</th>
										<th>Area</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($area_all as $data)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $data->locations }}</td>
										<td>{{ $data->area }}</td>
										<td>
											<a href="{{route('areaedit',$data->id)}}"> <button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button></a>
											
											<a href="{{route('areadelete',$data->id)}}"> <button type="button" class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0' onclick="return confirm('Are You Sure To Delete This?')"></i></button> </a>
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
	<!--end page wrapper -->
	@stop