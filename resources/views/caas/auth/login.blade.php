<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | CASS DLOR 2024</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/assets/admin/images/favicon.ico') }}">

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
                overflow: hidden;
                background-image: url('/assets/admin/images/bg_login_admin.png');
    
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

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-dark bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-dark p-4">
                                            <h5 class="text-dark">Welcome Adventurer!!</h5>
                                            <p>Sign in to venture the deep.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        {{-- <img src="{{ asset('/assets/admin/images/DLOR/logo/logo-black.png') }}" alt="" class="img-fluid"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('/assets/admin/images/DLOR/logo/logo-black.png') }}" alt="" class="rounded-circle" height="57">
                                            </span>
                                        </div>
                                    </a>

                                    <a class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('/assets/admin/images/DLOR/logo/logo-black.png') }}" alt="" class="rounded-circle" height="57">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post" action="{{ route('caas.login.check') }}">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label for="ascode" class="form-label">NIM</label>
                                            <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim" autofocus required>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-dark waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white">
                            
                            <div>
                                <p>© <script>document.write(new Date().getFullYear())</script> Mau Beli Truk</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/assets/admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/libs/node-waves/waves.min.js') }}"></script>
        
        
        <!-- apexcharts -->
        <script src="{{ asset('/assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('/assets/admin/js/app.js')}}"></script>
    </body>
</html>
