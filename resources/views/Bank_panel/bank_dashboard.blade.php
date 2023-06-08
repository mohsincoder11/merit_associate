@extends('Bank_panel.bank_layout')
@section('content')
		<!--start page wrapper -->

		<div class="page-wrapper">
			<div class="page-content">
		
				<div>
					<h5 class="mb-0" style="font-weight:bold;">Valuations</h5>
				</div>
		 <hr />
		
					{{-- <form method="post" action="{{ route('technicalmanager_report') }}">
						@csrf
						<input type="hidden" id="addnew_id" name="addnew_id"> --}}
			
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
		
								<table id="example" class="table table-striped table-bordered">
		
									<thead>
										<tr>
											<th>Sr.No</th>
											<th>Valuation ID</th>
											<th>Valuation For</th>
											<th>Customer Name</th>
											<th>Location</th>
											<th>Field Executive</th>
											{{-- <th>Client</th> --}}
											<th>Assigned</th>
											<th>Status</th>
											{{-- <th>View</th> --}}
		
										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach ($bank_data as $add_new)
												
										   
											<td>{{ $loop->index+1 }}</td>
											<td>{{ $add_new->valuation_id }}</td>
											<td>{{ $add_new->products }}</td>
											<td>{{ $add_new->firstname }} {{ $add_new->lastname }}</td>
											<td>{{ $add_new->locations }}</td>
											<td>{{ $add_new->field_executive }}</td>
											<td>{{ date("d-m-Y  h:i a", strtotime($add_new->created_at)) }}</td>
											<td>{{ $add_new->statu }}</td>
											{{-- <td>
												<a href="{{ route('FE.new',$add_new->id) }}"><button type="button" data-bs-toggle="modal"
													data-bs-target="#exampleLargeModal2"
													class="btn1 btn-outline-success view1"><i
														class="lni lni-remove-file"></i></button></a>
										  
										  @if(isset($add_new->new_valuer_id))
												<a href="{{ route('FE.new_valuation',$add_new->id) }}"><button type="button" data-bs-toggle="modal"
													data-bs-target="#exampleLargeModal2"
													class="btn1 btn-outline-success view1"><i
														class="lni lni-eye"></i></button></a>
														@endif
													</td> --}}
										</tr>
										@endforeach
		
		
									</tbody>
		
								</table>
							</div>
						</div>
					</div>
				{{-- </form> --}}
		
			</div>
		</div>
@stop








		