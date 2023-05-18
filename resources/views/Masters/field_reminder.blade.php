
@extends('layout')
@section('content')
		<!--start page wrapper -->

		<div class="page-wrapper">
			<div class="page-content">

				


				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-0">Reminders</h5>
					</div>

					<div class="font-5 ms-auto">
						<div class="col">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#exampleLargeModal">Add new</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Add new Reminder</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="card">
												<div class="card-body">
													<h5 class="modal-title">Reminder</h5><br>

													<div class="row">
														<div class="col-md-6">
				
														
																<label>Client</label>
																<select class="form-select mb-3" aria-label="Default select example">
																	<option selected>Reminder For</option>
																	<option value="1">Admin</option><option value="2">Amol Suryaprakash Jawanjal</option><option value="3">Ashish Vasantrao Bhawarkar</option><option value="4">Pramod Kashinath Ingole</option><option value="5">Akshay Janardan Gaikwad</option><option value="7">Niranjan Pandurang Maighane</option><option value="21">Gokul Sunil Khandare</option><option value="22">Sidhant Nagorao Shejode</option><option value="23">Mayur Sunil Khandare</option><option value="26">Shrikant Balasaheb Khating</option><option value="27">Dummy Amravati</option><option value="28">Ankush Vijay Nimkar</option><option value="29">Audumber Pandurang Hande</option><option value="31">Sachin Shalik Dhande</option><option value="32">Ankit Sureshrao  Hanumante</option><option value="34">Abhijeet S Dhule</option><option value="38">Ajay Balbudhe</option><option value="39">Rehaan Khan Aasif Khan</option><option value="40">Ankit Prakash Bidwaik</option><option value="41">Pallavi Mayur Khandare</option><option value="43">Hariom G. Jagtap</option><option value="44">Shubham R Kadu</option>                      </select>
				
																</select>
								
														</div>
				
				
														<div class="col-md-6">
															<label>Valuation</label>
														<select class="form-select mb-3" aria-label="Default select example">
															<option selected>Valuation</option>
															<option value="1"></option> 
														 </select>
				
														</div>
				
														<div class="col-md-6">
																<label class="form-label">Date </label>
																<input class="result form-control" type="text" id="date" placeholder="Date Picker...">
														</div>
				
														<div class="col-md-6">
															<label class="form-label">Time </label>
													<input class="result form-control" type="text" id="time" placeholder="Date Picker...">
														</div>
				
														
														<div class="col-md-11">
															<label >Description</label>
														  <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
														</div>
													</div>
				

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
										<th>Reminder For</th>
										<th>Valuations</th>
										<th>Is Reminded</th>
										<th>Date & Time</th>
									
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Cholamandalam Investment<br> And Finance ltd.</td>
										<td>niketandc@chola.<br>murugappa.com</td>
										<td>9922402232</td>
										<td>27AAACC1226H1Z4</td>
									
										<td><button type="button" data-bs-toggle="modal"
												data-bs-target="#exampleLargeModal1" class="btn1 btn-outline-success"><i
													class='bx bx-edit-alt me-0'></i></button> <button type="button"
												class="btn1 btn-outline-danger"><i
													class='bx bx-trash me-0'></i></button> </td>
									</tr>
								


								</tbody>

							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
@stop

		<!--end page wrapper -->
		