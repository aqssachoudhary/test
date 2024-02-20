<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 10:58:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CRM Admin Panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="{{asset('assets/bootstrap-rtl/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="{{asset('assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="{{asset('assets/dist/css/stylecrm-rtl.css')}}" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="back-link">
                <a href="index.html" class="btn btn-add">Back to Dashboard</a>
            </div>
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="help-block small">Your strong password</span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-add">Login</button>
                                <a class="btn btn-warning" href="{{url('register')}}">Register</a>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 10:58:28 GMT -->
</html>