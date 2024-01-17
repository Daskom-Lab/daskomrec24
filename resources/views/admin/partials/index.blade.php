    <!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title> {{ $title }} | DLOR 2024</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
       <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/assets/admin/images/favicon.ico') }}">
        
       @yield('styles') 

        <!-- Sweet Alert-->
        <link href="{{ asset('/assets/admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ asset('/assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/assets/admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

         <style>
            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity and color as needed */
                z-index: 0; /* Ensure the overlay is on top of the background image */
            }
            body {
                /* Specify the background image URL */
                overflow-x: hidden;
                background-image: url('/assets/admin/images/Tunnel 7.png');
    
                /* Set background size to cover the entire element */
                background-size: cover;
    
                /* Set background position to center */
                background-position: center;

                /* Set the background attachment to fixed */
                background-attachment: fixed;
    
                /* Set background repeat to no-repeat */
                background-repeat: no-repeat;
                /* Optionally, set a background color as a fallback */
                background-color: #f0f0f0;
            }
        </style>
    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

             @include('admin.partials.nav')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                     <!-- yield content -->
                        @yield('content')
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    PHP ARTISAN MIGRAIN
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- set pass Modal -->
        <div class="modal fade setAdmin-detailModal" tabindex="-1" role="dialog" aria-labelledby="setAdmin-detailModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="setAdmin-detailModal">Set Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.set.pass',auth()->guard('admin')->user()->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" name="confirmPassword" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <div class="row float-end">
                            <div class="">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal -->
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        
        <!-- JAVASCRIPT -->
        
        <script src="{{ asset('/assets/admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/node-waves/waves.min.js') }}"></script>
        
       
        
        <!-- App js -->
        <script src="{{ asset('/assets/admin/js/pages/saas-dashboard.init.js') }}"></script>
        <script src="{{ asset('/assets/admin/js/app.js')}}"></script>
        @yield('extras')

        <!-- Datatable init js -->
        <script src="{{ asset('/assets/admin/js/pages/datatables.init.js') }}"></script>    
        <!-- Autodismiss alert -->
        <script type="text/javascript">
            let alert_list = document.querySelectorAll('.alert')
            alert_list.forEach(function(alert) {
                new bootstrap.Alert(alert);

                let alert_timeout = alert.getAttribute('data-timeout');
                setTimeout(() => {
                    bootstrap.Alert.getInstance(alert).close();
                }, +alert_timeout);
            });
        </script>
       
    </body>
</html>
