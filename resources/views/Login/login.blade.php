<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('css/pace.min.css" rel="stylesheet')}}" />
	<script src="{{ asset('js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="{{ asset('css/app.css" rel="stylesheet')}}">
	<link href="{{ asset('css/icons.css" rel="stylesheet')}}">
	<title></title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
					<img src="{{asset('images/meritlogo.png')}}" width="150" alt="111" /> 
						</div>
						<div class="card">
							<div class="card-body">
								
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Login</h3>
									
									</div>
							
									<div class="login-separater text-center mb-4"> <span>login</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" method="post" action="{{ route('authenticate') }}">
											@csrf
											<div class="col-12">
												<label for="Username" class="form-label">Username</label>
												<input type="text" class="form-control"  name="user_name" id="inputEmailAddress" placeholder="Username">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword"  placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<!-- <div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div> -->
											<div class="col-12">
												<div class="d-grid">
												<button type="submit" class="btn btn-primary"> Login</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	
	<!--app JS-->
	<script src="{{ asset('js/app.js')}}"></script>
</body>


</html>