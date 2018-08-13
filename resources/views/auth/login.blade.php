<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garda Warta</title>
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/fontawesome-all.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/iofrm-style.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/iofrm-theme7.css") }}">
</head>
<body>
<div class="form-body" class="container-fluid">
    <div class="website-logo">
        <a href="{{ url('') }}">
            <div class="logo">
                <img class="logo-size" src="{{ asset("images/logo-light.svg") }}" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{ asset("images/graphic3.svg") }}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <div class="page-links">
                        {{--<a href="#" class="active">Login</a><a href="register7.html">Register</a>--}}
                    </div>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="E-mail Address" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Login</button>
                        </div>
                    </form>
                    <div class="other-links">
                        <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset("js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/popper.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/main.js") }}"></script>
</body>
</html>
