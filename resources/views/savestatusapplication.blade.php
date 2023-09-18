<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('index') }}">{{ env('APP_NAME') }}</a </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu m-4"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <div class="nav-profile-text">
                                    <p class="mb-1 text-black text-center">Admin</p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.log.out') }}">
                                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                              </div>
                        </li>
                        <li class="nav-item d-none d-lg-block full-screen-link">
                            <a class="nav-link">
                                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                            </a>
                        </li>
                </div>
                </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="/assets/images/faces/face1.jpg" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">Admin</span>
                                <span class="text-secondary text-small">Project Manager</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Admin</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('create-users') }}">Create
                                        Students</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('create-users') }}">Create
                                        Teachers</a></li>

                                <li class="nav-item"> <a class="nav-link" href="{{ route('view.applications') }}">Users
                                        Requests</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Teachers</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('download.admin.view') }}">View-Time-Table</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('view-note') }}">View-Notice</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('view-teachers') }}">View-Teachers</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Students</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('view-users') }}">View-Students</a></li>
                            </ul>
                        </div>
                    </li>
                    <div class="mt-4">
                        <div class="border-bottom">
                            <p class="text-secondary"></p>
                        </div>
                    </div>
                    </span>
                    </li>
                </ul>
            </nav>


            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
                integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                crossorigin="anonymous">



            <div class="card bg-light mx-auto h-25 w-50 d-flex"><br />
                @if ($message = Session::get('success'))
                <div class="alert alert-success d-block"><strong>{{ $message }}</strong></div>
            @endif
                <article class="card-body mx-auto" style="max-width: 400px; d-flex">
                    <h4 class="card-title mt-3 text-center">Add Status</h4>

                    <div class="form-group input-group">

                        <textarea name="description" class="form-control" type="text" rows="10" cols="10">
{{ $data->description }}
                        </textarea>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                    <div class="d-flex">

                        <form method="POST" action="/admin/panel/{{ $data->id }}/store/application/status"
                        enctype="multipart/form-data" class="d-flex">
                        @csrf



                        <input type="text" name="status" value="accept" class="d-none">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary d-flex m-5" >Accept</button>
                        </div> <!-- form-group// -->
                    </form>

                    <form method="POST" action="/admin/panel/{{ $data->id }}/store/application/status/reject"
                        enctype="multipart/form-data" class="d-flex">
                        @csrf
                        @method('PUT')

                        <input type="text" name="status" value="reject" class="d-none">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary d-flex m-5" >Reject</button>
                        </div> <!-- form-group// -->
                    </form>

                    </div>
                </article>
            </div> <!-- card.// -->

        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="/assets/js/off-canvas.js"></script>
        <script src="/assets/js/hoverable-collapse.js"></script>
        <script src="/assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="/assets/js/dashboard.js"></script>
        <script src="/assets/js/todolist.js"></script>
        <!-- End custom js for this page -->