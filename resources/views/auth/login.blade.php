<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>WikiPoli | Sign In</title>
        <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png">
        <link rel="shortcut icon" type="image/png"
              href="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" />
        <link rel="stylesheet" type="text/css"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/56f496c8ed.js" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


        <link rel="icon" type="img/png" href="images/favicon.png">

        <style>
            body,
            html {
                margin: 0;
                padding: 0;
                height: 100%;
                font-family: 'Lato';
                box-sizing: border-box;
                text-align: center;
            }
            #header {
                width: 100%;
                padding: 0;
            }

            #header #navbar {
                padding: 0;
            }

            #header .logo img {
                width: 150px;
            }

            #header .navbar p {
                font-size: 2rem;
                color: #6D9BF1;
            }

            #header .menu .nav-link {
                font-size: 1.1rem;
                color: rgba(0, 0, 0, 0.7);
                transition: 0.4s ease-out;
            }

            #header .menu .nav-link:hover {
                color: blue;
            }

            #header .menu #nav-register {
                background-color: #1257AE;
                align-self: center;
                color: white;
                padding: 0.4rem 1.5rem;
            }

            #header .menu #nav-register:hover {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            }

            #header .menu li {
                margin-left: 2.2rem;
            }

            #header .fa-bars {
                color: #000000;
            }

            @media (max-width: 860px) {
                #header .fa-bars {
                    margin-bottom: 1rem;
                }

                #header .menu {
                    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                    padding-bottom: 1rem;
                }

                #header .menu .nav-link {
                    font-size: 1rem;
                    padding: 0.3rem 1rem;
                }

                #header .menu #nav-register {
                    padding: 0.3rem 1rem;
                }

                #header .menu li {
                    margin-left: 0.5rem;
                }
            }

            .container {
                display: table;
                width: 100%;
                height: 100%;
                min-height: 100%;
            }
            .btn-primary {
                background-color: #213DCD;
                border-radius: 0px;
            }

            .container-inner {
                display: table-cell;
                vertical-align: top;
            }

            .cover-container {
                margin-right: auto;
                margin-left: auto;
            }

            .inner {
                padding: 2rem;
            }

            .forg {
                text-align: right;
                margin: 8px 25px 5px 0;
                text-decoration: none;
            }

            .forg a {
                color: #1257AE;
            }

            .forg p a:hover {
                color: red;
                text-decoration: none;
            }
            .text-center {
                margin-top: 12px;
                font-size: 17px;
            }
            .text-center a:hover {
                color: red;
                text-decoration: none;
            }

            .btn-block {
                background-color: #1257AE;
            }

            .fab {
                color: white;
                padding-right: 8px;
            }

            .form-signin-heading{
                text-align: center;
                font-size: 22px;
                font-weight: bold;
            }

            .form-control,
            .btn-block {
                width: 80%;
                margin-left: 12%;
                margin-bottom: 2rem;
                height: 50px;
                margin-top: 10px;
                font-size: 20px;

            }

            .login_form h2{
                font-size: 2.25rem;
                margin-left: 25px;
                margin-bottom: 20px;
                font-weight: 700;
            }
            .cover {
                padding: 0 1.5rem;
            }

            .cover .btn-lg {
                padding: .7rem 1.rem;
                font-weight: 500;
            }

            i.fab.fa-twitter,
            i.fab.fa-facebook-f {
                position: relative;
                right: 20px;
                color: #1257AE;
            }
            .btn-lg
            {
                background-color: transparent;
                color: #1257AE;
                font-size: 15px;
            }
            .btn-lg a:hover {
                background-color: #213DCD;
                color: #ffffff;
            }


            .logo img {
                width: 120px;
            }

            .nav-link {
                color: #000000;
                padding-bottom: 5px;
            }

            .nav-item.active .nav-link {
                border-bottom: 3px solid #213dcd;
                padding-bottom: 2px;
            }

            .menu a {
                color: #213DCD;
            }

            .menu li {
                padding-left: 2rem;
            }

            .fa-bars {
                color: #000000;
            }

            li.nav-item.p-3 {
                margin: -15px 0px -15px 0px;
            }


            button.register {
                float: left;
                font-size: 15px;
            }

            .navbar-light .navbar-nav .nav-link{
                color: #000000;
            }

            @media (min-width: 40em) {
                .container-inner {
                    vertical-align: middle;
                }

                .cover-container {
                    width: 100%;
                }
            }

            @media (min-width: 62em) {
                .cover-container {
                    width: 42rem;
                }
            }

            @media screen and (max-width: 576px) {
                .menu a,
                .logout {
                    font-size: .8rem;
                }

            }

            @media screen and (max-width: 991px) {
                .menu li {
                    padding-left: unset;
                }

                .nav-link {
                    width: fit-content;
                    padding-right: .3rem !important;
                }
            }



        </style>
    </head>

    <body>
        @include('layouts.guest_navbar')
        <div class="container">
            <div class="container-inner">
                <div class="cover-container">
                    <div class="inner cover">

                        <form id="login-form" class="login_form" action="{{url('login')}}" method="post">
                            @csrf
                            <h2 class="form-signin-heading">Welcome Back!</h2>
                            <p class="text-center">
                                New To WikiPoli? <a href="{{url('register')}}"> Sign up</a>
                            </p>

                            <div class="form-group">
                                <label for="email" class="sr-only">Email address</label>
                                <input type="email" value="{{ old('email') }}" id="inputEmail" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder=" Your Email Address" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input name="password" type="password" id="inputPassword" class="form-control  @error('password') is-invalid @enderror" placeholder="Your Password" minlength="5" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
                        </form>
                        <div class="forg">
                            <p class="forg"><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                        </div>
                        <a href="{{url("login/facebook")}}"> <button class="btn btn-lg btn-primary btn-block btn-facebook" ><i
                                    class="fab fa-facebook-f"></i> Login with Facebook</button></a>

                        <a href="{{url("login/twitter")}}">    <button class="btn btn-lg btn-primary btn-block btn-twitter" ><i
                                    class="fab fa-twitter"></i> Login with Twitter</button></a>
                        <div id="eresult"></div>

                        <p class="text-center">
                            By continuing you accept our <a href=""> Terms of Use</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
        </script>

    </body>

</html>

