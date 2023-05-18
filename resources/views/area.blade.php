@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-8 mx-auto" >
						<div class="card">
							{{-- @include('alert') --}}
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add Area</h5>
								</div>
								<hr>
								<form class="row g-2" action="{{route('areainsert')}}" method="post">@csrf
									<div class="row">
										<div class="col-xl-9 mx-auto">
						
									 <div class="col-md-4">
										<label for="country">Location</label>
    <select id="country" name="location">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option> 
    </select><br>
									</div> 
									<div class="mb-3">
										<label class="form-label">Locations</label>
										<select class="single-select" name='location_id' >
											@foreach($location as $location)
											<option value="{{ $location->id }}"> {{ $location->locations }}</option>
											@endforeach
										</select>
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Area*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Area" name="area" required>
									</div>
						
									<div class="col-md-3" style="margin-top:5%;" >
								       <button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i> Add </button>
									</div>
								</form>
							</div>
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
										<th>Area</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($data as $data)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $data->area }}</td>
										<td>
											<a href="{{route('areaedit',$data->id)}}"> <button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button></a>
											
											
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
	<script>
        var msg = '{{Session::get('alert ')}}';
        var exist = '{{Session::has('alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>
	@stop