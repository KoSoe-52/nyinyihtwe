<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{url('/storage/images/logo.jpg')}}" alt="logo" title="logo" height="80" class='mb-4' style="border-radius:50%">
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to Thara Whin.</p>
                    </div>
                    <form  method="POST" action="{{ url('/login') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left">
                            <label for="login">Username</label>
                            <div class="position-relative">
                                <input id="login" type="text" class="form-control" 
                                class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                name="login" value="{{ old('username') ?: old('email') }}" autocomplete="off" required autofocus>
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                            @if ($errors->has('username') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <!-- <a href="auth-forgot-password.html" class='float-right'>
                                     <small>Forgot password?</small>
                                </a> -->
                            </div>
                            <div class="position-relative">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <!-- <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label> -->
                                <!-- 987423 thanhtun -->
                            </div>
                            <div class="float-right">
                                <!-- <a href="auth-register.html">Don't have an account?</a> -->
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-right"> <i data-feather="log-in"></i> Login</button>
                        </div>
                    </form>
                    <!-- <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
