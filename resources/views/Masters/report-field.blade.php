@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div>
				<div class="container-fluid">
					<div class="row">
						<div col-lg="12">
							<div>
								<div>
									<br>
							<h5 class="mb-0" style="font-weight:bold";>Valuation Reports</h5>
							<p style="color:red; font-weight:500;"></p>
						
				    <div class="col-lg-8">
					<div class="card">
						<div class="card-body">

					<div class="tab-content py-3">
								<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
									<div class="row">
										<div class="col-md-4">

											<label style="font-weight: bold;">Date Range</label>
											<input class="form-control" placeholder="start-date">


										</div>
										<div class="col-md-1" style="margin-top:5vh;margin-left:10px;" >
											<label>To</label>
										</div>
										<div class="col-md-4">
											<label></label>
											<input class="form-control" placeholder="End-date">
											
											
										</div>

										<div class="col-md-2" style="margin-top: 17px;">
											<button type="button" class="btn btn-primary" data-bs-toggle="modal"
												data-bs-target="#exampleExtraLargeModal"> Generate</button>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="col">
			<!-- Button trigger modal -->
			<!-- Modal -->
			<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="card-header">
							
						</div>
						<div class="row">

				<h6 class="mb-0 " style="font-weight: bold; margin-left:10px; margin-top:2vh;">Welcome Abhijit S Dhule,
								</h6>
								<br>
								<br>
								<br>


					<div class="col-md-6">
						<div class="card" style="margin-top:4vh;">
							<div class="card-body">
								<h6 style="font-weight:bold;">Latest Valuation</h6>
								<hr>
								<div style="overflow-x:scroll;">

										<table id="example" class="table table-striped table-bordered">

											<thead>
												<tr>
													<th>Valuation For</th>
													<th>Location</th>
													<th>Client</th>


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

					<div class="col-md-5" style="margin-bottom: 5%;">

						<div class="card" style="margin-top:4vh" >
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
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col">
			<!-- Button trigger modal -->

			<!-- Modal -->
			<div class="modal fade" id="exampleLargeModal1" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Valuation for GAURAV ASHOKRAO DAHAKE</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"
								aria-label="Close"></button>
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
											<label>Cholamandalam Investment And Finance ltd.</label>


										</div>

										<div class="col-md-2">

											<label><b>Due Date</b></label><br>
											<label >17-02-2023</label>


										</div>




									</div>

								</div>
							</div>

							<div class="card">
								<div class="card-body">
								
									<div class="accordion" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingOne">
												<button class="accordion-button" type="button"
													data-bs-toggle="collapse"
													data-bs-target="#collapseOne" aria-expanded="true"
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
														<table class="table table-bordered">

															<tr>
																<td>
																	<label>Location</label>
																	<p>Amravati</p>
																</td>

																<td>
																	<label>Area</label>
																	<p>BARI PURA TIOSA</p>
																</td>

																<td>
																	<label>Product</label>
																	<p>HL-Construction</p>
																</td>
															</tr>


															<tr>
																<td>
																	<label>Contact Number</label>
																	<p>917219005373</p>
																</td>

																<td colspan="2">
																	<label>Alternate Contact
																		Number</label>
																	<p>918600849244</p>
																</td>
															</tr>


															<tr>
																<td colspan="3">
																	<label>Address of Individual</label>
																	<p>PROPERTY NO.364, WARD NO.04, BARI PURA,NEAR SBI BANK, AT POST-KURHA, TEHSIL-TIOSA, DISTRICT-AMRAVATI,
																	</p>
																</td>
															</tr>


															<tr>
																<td>
																	<label>City</label>
																	<p>Amravati</p>
																</td>

																<td>
																	<label>State</label>
																	<p>mahrashtra</p>
																</td>

																<td>
																	<label>Pincode</label>
																	<p>4444701</p>
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
																	<label>Comment / Remarks</label>
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
								<div class="col-md-7">

									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<h6>VALUATION DOCUMENTS </h6>
												</div>

												<div class="col-md-6">
													<div class="upload-btn-wrapper">
														<button class="btn11">Upload a file</button>
														<input type="file" name="myfile" />
													</div>
												</div>
											</div>
											<hr>

										</div>
										<div class="media align-items-center">


											<div class="card-body" style="padding: 0.1rem;">
												<div class="list-group">



													<a href="assets/images/upload1/SALE_DEED_230211054217957.pdf"
														class="list-group-item list-group-item-action"
														download="Tech Valuation (17).pdf">SALE_DEED_230211054217957.pdf</a><a
														href="assets/images/upload1/AGREEMENT_OF_SALE_230211054344938.pdf"
														class="list-group-item list-group-item-action"
														download="Tech Valuation (16).pdf">AGREEMENT_OF_SALE_230211054344938.pdf</a><a
														href="assets/images/upload1/PERMS_OF_CONSTRUCTION_230211054231679.pdf"
														class="list-group-item list-group-item-action"
														download="Tech Valuation (15).pdf">PERMS_OF_CONSTRUCTION_230211054231679.pdf</a><a
														href="assets/images/upload1/COPY_OF_APPROVED_PLAN_230211054247858.pdf"
														class="list-group-item list-group-item-action"
														download="Dinanath sale deed 1.pdf">COPY_OF_APPROVED_PLAN_230211054247858.pdf</a>

												</div>
											</div>




										</div>



									</div>
								</div>

								<div class="col-md-5">
									<div class=" card">
										<div class="card-body">
											<div class="table-responsive">
												<div class="card-header text-uppercase ">IMAGES &nbsp;
													&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp
													<br class="d-md-none">
													<button type="button"
														class="btn btn-success waves-effect waves-light m-1"
														data-toggle="modal" data-target="#formemodal2"> <i
															class="fa fa-plus"></i> <span>UPLOAD
															IMAGES</span> </button>
	
	
	
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
							<button type="button" class="btn btn-primary">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<!-- Button trigger modal -->
			<!-- Modal -->
			<div class="modal fade" id="exampleExtraLargeModal12" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">

										<table id="example" class="table table-striped table-bordered">

											

												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Cholamandalam Investment<br> And Finance ltd.</td>
													<td>niketandc@chola.<br>murugappa.com</td>
													<td>9922402232</td>
													<td>27AAACC1226H1Z4</td>
													<td>
														<button type="button" data-bs-toggle="modal"
															data-bs-target="#exampleLargeModal12"
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
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<!-- Button trigger modal -->

			<!-- Modal -->
			<div class="modal fade" id="exampleLargeModal12" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Valuation for MAHANANDA W/O UDDHAV INGOLE</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"
								aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="card">
								<h5 align="center">Valuation Details</h5>
								<div class="card-body">
									<div class="row">
										<div class="col-md-3">

											<label><b>Valuation Id</b></label><br>
											<label>10158071</label>


										</div>

										<div class="col-md-3">

											<label><b>Field Executive</b></label><br>
											<label>Pramod Kashinath Ingole</label>


										</div>
										<div class="col-md-4">

											<label><b>Client</b></label><br>
											<label>India Shelter Finance Corporation Ltd.</label>


										</div>

										<div class="col-md-2">

											<label><b>Due Date</b></label><br>
											<label >08-02-2023</label>


										</div>




									</div>

								</div>
							</div>

							<div class="card">
								<div class="card-body">
								
									<div class="accordion" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingOne">
												<button class="accordion-button" type="button"
													data-bs-toggle="collapse"
													data-bs-target="#collapseOne" aria-expanded="true"
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
														<table class="table table-bordered">

															<tr>
																<td>
																	<label>Location</label>
																	<p>Hingoli</p>
																</td>

																<td>
																	<label>Area</label>
																	<p>SENGAON</p>
																</td>

																<td>
																	<label>Product</label>
																	<p>HL-Purchase</p>
																</td>
															</tr>


															<tr>
																<td>
																	<label>Contact Number</label>
																	<p>9561853378</p>
																</td>

																<td colspan="2">
																	<label>Alternate Contact
																		Number</label>
																	<p>9011217105</p>
																</td>
															</tr>


															<tr>
																<td colspan="3">
																	<label>Address of Individual</label>
																	<p>AT DATTA NAGAR SENGAON TQ SEMGAON DIST HINGOLI
																	</p>
																</td>
															</tr>


															<tr>
																<td>
																	<label>City</label>
																	<p>Hingoli</p>
																</td>

																<td>
																	<label>State</label>
																	<p>mahrashtra</p>
																</td>

																<td>
																	<label>Pincode</label>
																	<p>444601</p>
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
																	<label>Comment / Remarks</label>
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
								<div class="col-md-7">

									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<h6>VALUATION DOCUMENTS </h6>
												</div>

												<div class="col-md-6">
													<div class="upload-btn-wrapper">
														<button class="btn11">Upload a file</button>
														<input type="file" name="myfile" />
													</div>
												</div>
											</div>
											<hr>

										</div>
										<div class="media align-items-center">


											<div class="card-body" style="padding: 0.1rem;">
												<div class="list-group">



											
													<a href="assets/images/upload2/AP-10158071 MAHANANDA W-O UDDHAV INGOLE 79-ATS (Agreement to sale).pdf"
														class="list-group-item list-group-item-action"
														download="Tech Valuation (17).pdf">AP-10158071 MAHANANDA W-O UDDHAV INGOLE 79-ATS (Agreement to sale).pdf</a>

												</div>
											</div>




										</div>



									</div>
								</div>

								<div class="col-md-5">
									<div class=" card">
										<div class="card-body">
											<div class="table-responsive">
												<div class="card-header text-uppercase ">IMAGES &nbsp;
													&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp
													<br class="d-md-none">
													<button type="button"
														class="btn btn-success waves-effect waves-light m-1"
														data-toggle="modal" data-target="#formemodal2"> <i
															class="fa fa-plus"></i> <span>UPLOAD
															IMAGES</span> </button>
	
	
	
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
							<button type="button" class="btn btn-primary">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		@stop