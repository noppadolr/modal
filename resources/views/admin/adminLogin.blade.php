
<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>Log In | Ubold - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css/') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.cs') }}s" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <div class="auth-brand">
                                <a href="" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="22">
                                            </span>
                                </a>

                                <a href="" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="22">
                                            </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required="" name="email" placeholder="Enter your email" value="riyasarn.n@gmail.com">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="123">
{{--                                    <div class="input-group-text" data-password="false">--}}
{{--                                        <span  id="togglePassword"  class="password-eye"></span>--}}
                                    <div class="input-group-text"   data-password="false">
                                        <span    class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>

                        </form>



                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="" class="text-white-50 ms-1">Forgot your password?</a></p>
                        <p class="text-white-50">Don't have an account? <a href="" class="text-white ms-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<footer class="footer footer-alt">
    2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a>
</footer>
<script src="{{asset('jquery-3.7.0.min.js')}}"></script>
<!-- Authentication js -->
<script src="{{ asset('admin/assets/js/pages/authentication.init.js') }}"></script>

{{--<script>--}}
{{--    const togglePassword = document.querySelector('#togglePassword');--}}
{{--    const password = document.querySelector('#password');--}}

{{--    togglePassword.addEventListener('click', function (e) {--}}
{{--        // toggle the type attribute--}}
{{--        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';--}}
{{--        password.setAttribute('type', type);--}}
{{--        // toggle the eye slash icon--}}
{{--        // this.classList.toggle('fe-eye-off');--}}
{{--    });--}}
{{--</script>--}}
<!-- Sweet Alerts js -->
<script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script type="text/javascript">



    {{--        <script type="text/javascript">--}}
    @if(Session::has('PasswordUpdated'))
    $(document).ready( function () {
        // alert('test');

        Swal.fire({

            timerProgressBar: true,
            position: "top-end",
            icon: "success",
            title: "Your Password has been Updated",
            showConfirmButton: !1,
            timer: 1500,

        });
    });
    @endif
    @if(Session::has('logedout'))
    $(document).ready( function () {
    // alert('logedout');
        Swal.fire({

            timerProgressBar: true,
            position: "top-end",
            icon: "success",
            title: "You Logout Successfully !",
            showConfirmButton: !1,
            timer: 1500,

        });
    });
    @endif
</script>
</body>
</html>
