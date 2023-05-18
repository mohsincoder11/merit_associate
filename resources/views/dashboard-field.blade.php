@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">

				<h5 class="mb-0 " style="font-weight: bold;">Welcome Abhijit S Dhule,
								</h5>
							

					<div class="col-md-6" style="margin-top: 5%;">
						<div class="card">
							<div class="card-body">
								<h5 style="font-weight:bold;">Latest Valuation</h5>
								<hr>
								<div style="overflow-x:scroll;">
									<table class="table mb-0 table-striped">
										<thead>
											<tr>
												<th scope="col">VALUATION FOR</th>
												<th scope="col">LOCATION</th>
												<th>CLIENT</th>
											</tr>
												<!-- <th scope="col">Handle</th> -->
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>VILAS N NAGRE</td>
												<td>Jalna</td>
												<td>Motilal Oswal Home Finance Limited</td>
											</tr>
											<tr>
												<td>SUBHASH Sheshikala SONKAMBALE</td>
												<td>Jalna</td>
												<td>Cholamandalam Investment And Finance ltd.</td>
											</tr>
											<tr>
												<td>VISHAL CHAVHAN</td>
												<td> Jalna</td>
												<td>Motilal Oswal Home Finance Limited</td>
											</tr>

											<tr>
												<td>RAJARAM Patwaribai WAGH</td>
												<td>Jalna</td>
												<td>Cholamandalam Investment And Finance ltd.</td>
											</tr>

											<tr>
												<td>AVINASH  KHANDEBHARAD</td>
												<td>Jalna</td>
												<td>Cholamandalam Investment And Finance ltd.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6" style="margin-top: 5%;">

						<div class="card">
							<div class="card-body">
								<h6 class="mb-0" style="font-weight:bold;">Latest Reminders
								</h6>
								<hr />
									<table class="table mb-0 table-striped">
										<thead>
											<tr>
												<th scope="col">VALUATION</th>
												<th>DATE & TIME</th>
												<th scope="col">IS REMINDED</th>
												<!-- <th scope="col">Handle</th> -->
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@stop

		<!--end page wrapper -->
		