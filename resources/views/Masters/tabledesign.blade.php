@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto">
						<div class="card">
							<div class="card-body">
								
                                <form class="row g-2" style="border:#cccccc solid 2px;">	 
                               
                                <table width="100%" style="margin-top:0;">
                                  <tr border="1" width="100%">
                                    <td border="1" width="100%" style="background-color: #D9FFD9; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Basic Employee Details</strong></td>
                                  </tr>
                                  <tr border="1" width="100%">
                                  	<td border="1" width="15%">
                                    	<div style="padding:5px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Select Location</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>AMRAVATI</option>
                                                <option value="1">NAGPUR</option>
                                                <option value="2">CHANDRAPUR</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td border="1" width="10%">
                                    	<div style="padding:3px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Employee ID</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
										</div>
                                    </td>
                                     <td border="1" width="20%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Employee Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                     <td border="1" width="25%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Address</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div> 
                                    </td>
                                     <td border="1" width="10%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Mobile</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                     <td border="1" width="20%" colspan="2">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Email</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                  </tr>
                                 </table> 
                                 <table width="100%" style="margin-top:0;"> 
                                  <tr>
                                     <td border="1" width="20%">
                                    	<div style="padding:5px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">ID Proof</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </td>
                                    <td border="1" width="20%">
                                    	<div style="padding:2px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">Address Proof</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">DOB</label>
                                            <input type="date" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">SIN</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">BC DL/ID</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Bank Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                  </tr>
                                </table>
                                
                                <table width="100%" style="margin-top:0;"> 
                                  <tr>
                                     <td border="1" width="20%">
                                    	<div style="padding:5px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">Account Number</label>
                                            <input type="text" class="form-control" id="inputFirstName">
                                        </div>
                                    </td>
                                    <td border="1" width="30%">
                                    	<div style="padding:2px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">Bank Details</label>
                                            <textarea class="form-control" id="inputAddress" rows="1"></textarea>
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="margin-top:20px; padding:20px;">
                                           <button type="button" class="btn1 btn-outline-success"><i class='bx bx-trophy me-0'></i> Submit</button>
                                        </div>
                                    </td>
                                    <td border="1" width="10%"></td>
                                    <td border="1" width="10%"></td>
                                    <td border="1" width="10%"></td>
                                    <td border="1" width="10%"></td>
                                  </tr>
                                </table>
                               
                                <table width="100%" style="margin-top:0;">
                                  <tr border="1" width="100%">
                                    <td border="1" width="100%" style="background-color: #C6F3FF; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Basic Employee Details</strong></td>
                                  </tr>
                                  <tr border="1" width="100%">
                                  	<td border="1" width="15%">
                                    	<div style="padding:5px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Select Location</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>AMRAVATI</option>
                                                <option value="1">NAGPUR</option>
                                                <option value="2">CHANDRAPUR</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td border="1" width="10%">
                                    	<div style="padding:3px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Employee ID</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
										</div>
                                    </td>
                                     <td border="1" width="20%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Employee Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                     <td border="1" width="25%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Address</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div> 
                                    </td>
                                     <td border="1" width="10%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Mobile</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                     <td border="1" width="20%" colspan="2">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Email</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                  </tr>
                                 </table> 
                                 <table width="100%" style="margin-top:0;"> 
                                  <tr>
                                     <td border="1" width="20%">
                                    	<div style="padding:5px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">ID Proof</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </td>
                                    <td border="1" width="20%">
                                    	<div style="padding:2px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">Address Proof</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">DOB</label>
                                            <input type="date" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">SIN</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">BC DL/ID</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Bank Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"> 
                                        </div>
                                    </td>
                                  </tr>
                                </table>
                                
                                <table width="100%" style="margin-top:0;"> 
                                  <tr>
                                     <td border="1" width="20%">
                                    	<div style="padding:5px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">Account Number</label>
                                            <input type="text" class="form-control" id="inputFirstName">
                                        </div>
                                    </td>
                                    <td border="1" width="30%">
                                    	<div style="padding:2px;">
                                            <label for="formFile" class="form-label" style="margin-bottom:-5px">Bank Details</label>
                                            <textarea class="form-control" id="inputAddress" rows="1"></textarea>
                                        </div>
                                    </td>
                                    <td border="1" width="15%">
                                    	<div style="margin-top:20px; padding:20px;">
                                           <button type="button" class="btn1 btn-outline-primary"><i class='bx bx-trophy me-0'></i> Submit</button>
                                        </div>
                                    </td>
                                    <td border="1" width="10%"></td>
                                    <td border="1" width="10%"></td>
                                    <td border="1" width="10%"></td>
                                    <td border="1" width="10%"></td>
                                  </tr>
                                </table>
								</form>
                             
                             
                             
		
							</div>
		
						</div>
					</div>
				</div>
			</div>
		</div>

        <hr>

        <div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto">
						<div class="card">
							<div class="card-body">
								
                                <form class="row g-2" style="border:#cccccc solid 2px;">	 
                               
                                <table width="100%" style="margin-top:0;">
                                  <tr border="1" width="100%">
                                    <td border="1" width="14%" style="background-color: #D9FFD9; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Plot Area <br>&nbsp;&nbsp;(Dimention in Feet)</strong></td>
                                    <td border="1" width="14%" style="background-color: #C6F3FF; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Plot Area <br>&nbsp;&nbsp;(Built Up Area)</strong></td>
                                    <td border="1" width="14%" style="background-color: #E4CBE4; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Construction Year</strong></td>
                                    <td border="1" width="14%" style="background-color: #FFE8C4; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Four Borders</strong></td>
                                    <td border="1" width="14%" style="background-color: #FFDDEE; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Whether <br>&nbsp;&nbsp;Boundaries Matching</strong></td>
                                    <td border="1" width="14%" style="background-color: #E1E1F4; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Side Marginal <br>&nbsp;&nbsp;(Distance in Feet)</strong></td>
                                    <td border="1" width="16%" style="background-color: #FFFFCC; color:#000000; padding-top:5px; padding-bottom:5px;" colspan="8"><strong>&nbsp;&nbsp;Description Of Property <br>&nbsp;&nbsp;(1BHK/2BHK)</strong></td>
                                  </tr>
      							</table>
                                <table width="100%" style="margin-top:0;">	
                                  <tr border="1" width="100%">
                                  	
                                    <td border="1" width="14%">
                                    	<div style="padding:3px;">
                                        	
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">East</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="1"> 
										</div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Ground Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="5"> 
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Ground Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="9"> 
                                        </div> 
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">East</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="13"> 
                                        </div>
                                    </td>
                                   	<td border="1" width="14%">
                                    	<div style="padding:5px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Select Location</label>
                                            <select class="form-select" aria-label="Default select example" tabindex="17">
                                                <option selected>YES</option>
                                                <option value="1">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Front</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="21"> 
                                        </div>
                                    </td>
                                     <td border="1" width="16%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Ground Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="25"> 
                                        </div>
                                    </td>
                                  </tr>
                                  
                                  <tr border="1" width="100%">
                                  	
                                    <td border="1" width="14%">
                                    	<div style="padding:3px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">West</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="2"> 
										</div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">First Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="6"> 
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">First Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="10"> 
                                        </div> 
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">West</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="14"> 
                                        </div>
                                    </td>
                                   	<td border="1" width="14%">
                                    	<div style="padding:5px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Select Location</label>
                                            <select class="form-select" aria-label="Default select example" tabindex="18">
                                                <option selected>YES</option>
                                                <option value="1">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Back</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="22"> 
                                        </div>
                                    </td>
                                     <td border="1" width="16%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">First Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="26"> 
                                        </div>
                                    </td>
                                  </tr>
                                  
                                  <tr border="1" width="100%">
                                  	
                                    <td border="1" width="14%">
                                    	<div style="padding:3px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">North</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="3"> 
										</div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Second Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="7"> 
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Second Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="11"> 
                                        </div> 
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">North</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="15"> 
                                        </div>
                                    </td>
                                   	<td border="1" width="14%">
                                    	<div style="padding:5px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Select Location</label>
                                            <select class="form-select" aria-label="Default select example" tabindex="19">
                                               <option selected>YES</option>
                                                <option value="1">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Left</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="23"> 
                                        </div>
                                    </td>
                                     <td border="1" width="16%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Second Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="27"> 
                                        </div>
                                    </td>
                                  </tr>
                                  
                                  <tr border="1" width="100%">
                                  	
                                    <td border="1" width="14%">
                                    	<div style="padding:3px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">South</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="4"> 
										</div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Third Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="8"> 
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Third Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="12"> 
                                        </div> 
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">South</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="16"> 
                                        </div>
                                    </td>
                                   	<td border="1" width="14%">
                                    	<div style="padding:5px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Select Location</label>
                                            <select class="form-select" aria-label="Default select example" tabindex="20">
                                               <option selected>YES</option>
                                                <option value="1">NO</option>
                                            </select>
                                        </div>
                                    </td>
                                     <td border="1" width="14%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Right</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="24"> 
                                        </div>
                                    </td>
                                     <td border="1" width="16%">
                                    	<div style="padding:2px;">
                                            <label for="inputFirstName" class="form-label" style="margin-bottom:-5px">Third Floor</label>
                                            <input type="text" class="form-control" id="inputFirstName" tabindex="28"> 
                                        </div>
                                    </td>
                                  </tr>
                                 </table> 
                                
                                
                               
								</form>
                             
                             
                             
		
							</div>
		
						</div>
					</div>
				</div>
			</div>
		</div>





		<!--end page wrapper -->
		@stop