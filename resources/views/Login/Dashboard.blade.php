@extends('layout')
@section('content')
		<!--start page wrapper -->

		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">


					<div class="col-md-6">
						<h6 class="mb-0 text-uppercase">Welcome Admin,</h6>
						<hr />
						<div class="card">
							<div class="card-body">
								<h6 class="mb-0 ">Latest Valuations
								</h6>
								<hr />
								<div style="overflow-x: scroll;">
									<table class="table mb-0 table-striped">
										<thead>
											<tr>
												<th scope="col">VALUATION FOR</th>
												<th colspan="2">ASSIGNED</th>
												<th scope="col">CLIENT</th>
												<!-- <th scope="col">Handle</th> -->
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>MAHALAXMI HARDWARE AND ELECTRICAL</td>
												<td colspan="2">Amol Suryaprakash Jawanjal</td>
												<td>AU Small Finance Bank Limited</td>
											</tr>
											<tr>
												<td>M/S BM ELECTRICAL ENGINEERS CONTRACTORS AND CONTR</td>
												<td colspan="2">Ankit Sureshrao Hanumante</td>
												<td>AU Small Finance Bank Limited</td>
											</tr>
											<tr>
												<td>Sagar Ramdasrao Belsare</td>
												<td colspan="2"> Amol Suryaprakash Jawanjal</td>
												<td>Piramal Capital & Housing finance Limited.</td>
											</tr>

											<tr>
												<td>PRAVIN BALAKRISHNA NAGARNAIK</td>
												<td colspan="2">Rehaan Khan Aasif Khan</td>
												<td>Motilal Oswal Home Finance Limited</td>
											</tr>

											<tr>
												<td>SUBHANAND SHRIKRUSHA PANDE</td>
												<td colspan="2">Amol Suryaprakash Jawanjal</td>
												<td>Equitas Small Finance Bank Ltd</td>
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
								<h6 class="mb-0 ">Latest Reminders
								</h6>
								<hr />
								<div style="overflow-x: scroll;">
									<table class="table mb-0 table-striped">
										<thead>
											<tr>
												<th scope="col">REMINDER FOR</th>
												<th colspan="2">REMINDER FOR</th>
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








		