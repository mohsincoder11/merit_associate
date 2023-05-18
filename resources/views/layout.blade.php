<!doctype html>
<html lang="en">
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"><!--favicon-->
    <link rel="icon" href="{{ asset('images/logo1.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header-colors.css') }}" />
    <title>Merit Associates</title>

    <style>
        .popup-container {
            position: relative;
        }

        .popup-content {
            display: none;
            position: absolute;
            z-index: 1;
            top: 100%;
            left: 0;
            background-color: #F9F9F9;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .popup-container:hover .popup-content {
            display: block;
        }

        .popup-btn {
            /* background-color: #f2f2f2; */
            color: black;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .popup-btn:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('images/icon1.png') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">
                        <img src="{{ asset('images/logo-img1.png') }}" width="100%" height="30%" alt="logo icon">
                    </h4>
                </div>
                <div class="toggle-icon ms-auto">
                </div>
            </div>
            @php
                
                $permission = get_user_permission();
                //   echo json_encode($permission);
            @endphp
            <!--navigation-->
            <ul class="metismenu" id="menu">
                @if (in_array('dashboard', $permission) || in_array('all', $permission))
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div class="parent-icon"><i class='bx bx-home-circle' style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>

                    </li>
                @endif
                @if (in_array('associatesbank', $permission) || in_array('all', $permission))

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-list" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Masters</div>
                        </a>
                        <ul>
                            {{-- <li> <a href="{{ route('tabledesign') }}"><i class="bx bx-right-arrow-alt"></i> Table</a>
						</li> --}}


                            @if (in_array('associatesbank', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('associatesbank') }}"><i class="bx bx-right-arrow-alt"></i>
                                        Associates Bank/ NBFC</a>
                                </li>
                            @endif

                            @if (in_array('location', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('location') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Location/Area</a>
                                </li>
                            @endif
                            @if (in_array('branch', $permission) || in_array('all', $permission))
                                <li> <a href=" {{ route('branch') }}"><i class="bx bx-right-arrow-alt"></i>Merit's
                                        Branch</a>

                                </li>
                            @endif
                            @if (in_array('empregistration', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('empregistration') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Employee Registration</a>
                                </li>
                            @endif
                            @if (in_array('products', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('products') }}"><i class="bx bx-right-arrow-alt"></i>Bank/NBFC
                                        Products</a>

                                </li>
                            @endif
                            @if (in_array('property', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('property') }}"><i class="bx bx-right-arrow-alt"></i>Property
                                        Type</a>

                                </li>
                            @endif

                            @if (in_array('floor', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('floor') }}"><i class="bx bx-right-arrow-alt"></i>Floor Type/
                                        Category</a>

                                </li>
                            @endif
                            {{-- <li> <a href="{{ route('cat') }}"><i class="bx bx-right-arrow-alt"></i>Category</a>
						
						</li> --}}

                            @if (in_array('tag', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('tag') }}"><i class="bx bx-right-arrow-alt"></i> Category
                                        Tags</a>

                                </li>
                            @endif
                            @if (in_array('status', $permission) || in_array('all', $permission))
                                <li> <a href="{{ route('status') }}"><i class="bx bx-right-arrow-alt"></i>Status</a>

                                </li>
                            @endif



                        </ul>
                    </li>
                @endif
                {{-- <li>
					<a href="{{ route('client') }}">
						<div class="parent-icon"><i class="bx bx-user-circle" style="font-size: 17px;"></i></i>
						</div>
						<div class="menu-title">Clients</div>
					</a>

				</li> --}}
                {{-- <li>
					<a href="javascript:;" class="">
						<div class="parent-icon"><i class="fadeIn animated bx bx-merge" style="font-size: 17px;"></i>
						</div>
						
					</a>
				</li>                            --}}
                {{-- <ul> --}}
                {{-- <li> <a href=""><i class="bx bx-right-arrow-alt"></i>New Valuation</a>
						</li> --}}
                {{-- <li> <a href="ongoing.html"><i class="bx bx-right-arrow-alt"></i>Ongoing</a>
						</li>
						<li> <a href="completed.html"><i class="bx bx-right-arrow-alt"></i>Completed</a>
						</li>
						
						<li> <a href="cancelled.html"><i class="bx bx-right-arrow-alt"></i>Cancelled</a>
						</li> --}}


                {{-- @if ($auth_user->role_name == 'Operator' && $auth_user->role_name == 'Field Executive' && $auth_user->role_name == 'Assistant Valuer' && $auth_user->role_name == 'Technical Manager' && $auth_user->role_name == 'Technical Head') --}}
                {{-- @json($permission) --}}
                @if (in_array('addnew', $permission) || in_array('all', $permission))
                    <li>
                        <a href="{{ route('addnew') }}">
                            <div class="parent-icon"><i class="bx bx-right-arrow-alt" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">New Valuation</div>
                        </a>
                    </li>
                @endif
                @if (in_array('FE.ongoingmodel', $permission) || in_array('all', $permission))
                    <li>
                        <a href="{{ route('FE.ongoingmodel') }}">
                            <div class="parent-icon"><i class="bx bx-right-arrow-alt" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Field Executive</div>
                        </a>
                    </li>
                @endif

                @if (in_array('AV.ongoingmodel', $permission) || in_array('all', $permission))
                    <li>
                        <a href="{{ route('AV.ongoingmodel') }}">
                            <div class="parent-icon"><i class="bx bx-right-arrow-alt" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Assistant Valuers</div>
                        </a>
                    </li>
                @endif

                @if (in_array('technicalmanager_report', $permission) || in_array('all', $permission))
                    <li>
                        <a href="{{ route('technicalmanager_report') }}">
                            <div class="parent-icon"><i class="bx bx-right-arrow-alt" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Technical Manager</div>
                        </a>
                    </li>
                @endif

                @if (in_array('technicalhead_report', $permission) || in_array('all', $permission))
                    <li>
                        <a href="{{ route('technicalhead_report') }}">
                            <div class="parent-icon"><i class="bx bx-right-arrow-alt" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Technical Head</div>
                        </a>
                    </li>
                @endif




                {{-- <ul>
					<li><a href="{{ route('technicalmanager_report') }}">
						<div class="parent-icon"><i class="bx bx-right-arrow-alt" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Technical Manager</div>
					</a></li>
				</ul> --}}
                <hr>

                @if (in_array('user_role', $permission) || in_array('all', $permission))
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-list" style="font-size: 17px;"></i>
                            </div>
                            <div class="menu-title">Settings</div>
                        </a>
                        <ul>


                            <li>
                                <a href="{{ route('user_role') }}">
                                    <div class="parent-icon"><i class="bx bx-right-arrow-alt"
                                            style="font-size: 17px;"></i>
                                    </div>
                                    <div class="menu-title">Usesr Role</div>
                                </a>

                            </li>

                        </ul>
                    </li>
                @endif
            </ul>

            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">

                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">

                            <li class="nav-item dropdown dropdown-large">

                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="row row-cols-3 g-3 p-3">
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-cosmic text-white"><i
                                                    class='bx bx-group'></i>
                                            </div>
                                            <div class="app-title">Teams</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-burning text-white"><i
                                                    class='bx bx-atom'></i>
                                            </div>
                                            <div class="app-title">Projects</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-lush text-white"><i
                                                    class='bx bx-shield'></i>
                                            </div>
                                            <div class="app-title">Tasks</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
                                                    class='bx bx-notification'></i>
                                            </div>
                                            <div class="app-title">Feeds</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-blues text-dark"><i
                                                    class='bx bx-file'></i>
                                            </div>
                                            <div class="app-title">Files</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                                    class='bx bx-filter-alt'></i>
                                            </div>
                                            <div class="app-title">Alerts</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">

                                <div class="dropdown-menu dropdown-menu-end">

                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i
                                                        class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Customers<span
                                                            class="msg-time float-end">14 Sec
                                                            ago</span></h6>
                                                    <p class="msg-info">5 new user registered</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i
                                                        class="bx bx-cart-alt"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">You have recived new orders</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class="bx bx-file"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">24 PDF File<span
                                                            class="msg-time float-end">19
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">The pdf files generated</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i
                                                        class="bx bx-send"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Time Response <span
                                                            class="msg-time float-end">28 min
                                                            ago</span></h6>
                                                    <p class="msg-info">5.1 min avarage time response</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-info text-info"><i
                                                        class="bx bx-home-circle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Product Approved <span
                                                            class="msg-time float-end">2 hrs ago</span></h6>
                                                    <p class="msg-info">Your new product has approved</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i
                                                        class="bx bx-message-detail"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Comments <span
                                                            class="msg-time float-end">4
                                                            hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">New customer comments recived</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class='bx bx-check-square'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Your item is shipped <span
                                                            class="msg-time float-end">5 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully shipped your item</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i
                                                        class='bx bx-user-pin'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New 24 authors<span
                                                            class="msg-time float-end">1 day
                                                            ago</span></h6>
                                                    <p class="msg-info">24 new authors joined last week</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i
                                                        class='bx bx-door-open'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Defense Alerts <span
                                                            class="msg-time float-end">2 weeks
                                                            ago</span></h6>
                                                    <p class="msg-info">45% less alerts last 4 weeks</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Messages</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-1.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson <span
                                                            class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-2.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Althea Cabardo <span
                                                            class="msg-time float-end">14
                                                            sec ago</span></h6>
                                                    <p class="msg-info">Many desktop publishing packages</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-3.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Oscar Garner <span
                                                            class="msg-time float-end">8
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">Various versions have evolved over</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-4.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Katherine Pechon <span
                                                            class="msg-time float-end">15
                                                            min ago</span></h6>
                                                    <p class="msg-info">Making this the first true generator</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-5.png" class="msg-avatar') }}"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Amelia Doe <span
                                                            class="msg-time float-end">22
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-6.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Cristina Jhons <span
                                                            class="msg-time float-end">2 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">The passage is attributed to an unknown</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-7.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">James Caviness <span
                                                            class="msg-time float-end">4 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">The point of using Lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('assets/images/avatars/avatar-8.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Peter Costanzo <span
                                                            class="msg-time float-end">6 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">It was popularised in the 1960s</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-9.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">David Buckley <span
                                                            class="msg-time float-end">2 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Various versions have evolved over</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-10.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Thomas Wheeler <span
                                                            class="msg-time float-end">2 days
                                                            ago</span></h6>
                                                    <p class="msg-info">If you are going to use a passage</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{ asset('images/avatars/avatar-11.png') }}"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Johnny Seitz <span
                                                            class="msg-time float-end">5
                                                            days
                                                            ago</span></h6>
                                                    <p class="msg-info">All the Lorem Ipsum generators</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Messages</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/avatars/user.png') }}" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{auth()->user()->name}}</p>
                                <p class="designattion mb-0"></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            {{-- <li><a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-cog"></i><span>Settings</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-home-circle'></i><span>Dashboard</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-download'></i><span>Downloads</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li> --}}
                            <li><a class="dropdown-item" href="{{route('log_out')}}"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        @yield('content')

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0" style="color: red;"><b>Merit </b><span
                    style="color:rgb(33, 100, 145)"><b>Associates</b></span></p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->

    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/table-datatable.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/form-select2.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script src="{{ asset('js/popover-tooltip.js') }} "></script>


    <script>
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        var radius = canvas.height / 2;
        ctx.translate(radius, radius);
        radius = radius * 0.90
        setInterval(drawClock, 1000);

        function drawClock() {
            drawFace(ctx, radius);
            drawNumbers(ctx, radius);
            drawTime(ctx, radius);
        }

        function drawFace(ctx, radius) {
            var grad;
            ctx.beginPath();
            ctx.arc(0, 0, radius, 0, 2 * Math.PI);
            ctx.fillStyle = 'white';
            ctx.fill();
            grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
            grad.addColorStop(0, '#333');
            grad.addColorStop(0.5, 'white');
            grad.addColorStop(1, '#333');
            ctx.strokeStyle = grad;
            ctx.lineWidth = radius * 0.1;
            ctx.stroke();
            ctx.beginPath();
            ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
            ctx.fillStyle = '#333';
            ctx.fill();
        }

        function drawNumbers(ctx, radius) {
            var ang;
            var num;
            ctx.font = radius * 0.15 + "px arial";
            ctx.textBaseline = "middle";
            ctx.textAlign = "center";
            for (num = 1; num < 13; num++) {
                ang = num * Math.PI / 6;
                ctx.rotate(ang);
                ctx.translate(0, -radius * 0.85);
                ctx.rotate(-ang);
                ctx.fillText(num.toString(), 0, 0);
                ctx.rotate(ang);
                ctx.translate(0, radius * 0.85);
                ctx.rotate(-ang);
            }
        }

        function drawTime(ctx, radius) {
            var now = new Date();
            var hour = now.getHours();
            var minute = now.getMinutes();
            var second = now.getSeconds();
            //hour
            hour = hour % 12;
            hour = (hour * Math.PI / 6) +
                (minute * Math.PI / (6 * 60)) +
                (second * Math.PI / (360 * 60));
            drawHand(ctx, hour, radius * 0.5, radius * 0.07);
            //minute
            minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
            drawHand(ctx, minute, radius * 0.8, radius * 0.07);
            // second
            second = (second * Math.PI / 30);
            drawHand(ctx, second, radius * 0.9, radius * 0.02);
        }

        function drawHand(ctx, pos, length, width) {
            ctx.beginPath();
            ctx.lineWidth = width;
            ctx.lineCap = "round";
            ctx.moveTo(0, 0);
            ctx.rotate(pos);
            ctx.lineTo(0, -length);
            ctx.stroke();
            ctx.rotate(-pos);
        }
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({

                scrollCollapse: true,
                paging: true,
                fixedColumns: {
                    leftColumns: 0,
                    right: 1
                }
            });
        });
    </script>
    @yield('js')



</body>
