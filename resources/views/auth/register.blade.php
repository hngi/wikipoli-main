
@section('title')
<title>WikiPoli | Register</title>
@section('style')
<style>
    body {
        font-family: 'Roboto', sans-serif;
        ;
        height: 100vh;
    }


    body {
        font-family: 'Nunito', segoe UI, sans-serif;
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

    #form_container {
        width: 99%;
    }

    .btn_button {
        background: #1257AE;
        height: 50px;
        color: white;
        font-size: 17px;
        border-radius: 0px;
    }

    .input {
        border-radius: 0;
        height: 50px;
    }

    .wiki {
        width: 400px;
        padding: 4px 5px;
    }

    #wiki-head {
        font-weight: 500;
        font-size: 28px;

    }

    .login_link {
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        text-decoration-line: none;
        color: #2159A8;
        font-weight: 500;
    }

    .login_link:hover{
        text-decoration: underline;
    }
    .twitter,
    .google {
        color: #2159A8;
    }

    #hr {
        border: solid 0.5px #adacacb7;
    }

    .already {
        opacity: .7;
        font-weight: 500;
    }

    .agree {
        opacity: .7;
        font-weight: 500;
    }

    .term {
        color: #2159A8;
        font-weight: 500;
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

    @media screen and (max-width: 576px) {

        #wiki-head {
            font-size: 27px;
        }

        #nav img {
            width: 150px;
            margin-top: 10px;
        }
    }

    @media (min-width: 390px) and (max-width: 575px) {
        #form_container {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 545px) {
        .wiki {
            width: 99%;
        }
    }

    @media screen and (max-width: 284px) {

        #wiki-head {
            font-size: 27px;
        }

        #nav img {
            width: 100px;
        }
    }
</style>
@endsection
@extends('layouts.guest')
@section('content')

<div id="form_container">
    <div class="wiki mx-auto text-center">
        <h2 class=" mx-auto pr-2" id="wiki-head">
            WikiPoli was made for people like you.
        </h2>
        <p class="text-center mx-auto pr-3 my-3">
            <span class="already">Already signed up? </span><a href="{{url('login')}}" class="login_link">Log in</a></p>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-7 mx-auto">
        <form id="signup-form" action="{{route('register')}}" method="POST">
                        @csrf
            <div class="form-group form-div mt-4">
                <input id="name" name="full_name" value="{{ old('full_name') }}"  type="text" placeholder="Full Name" required  class="form-control input  @error('full_name') is-invalid @enderror" />
                @error('full_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group form-div mt-4">
                <input id="username" name="username" value="{{ old('username') }}" type="text" placeholder="Username" required class="form-control input @error('username') is-invalid @enderror" />
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group form-div  mt-4">
                <input id="email" name="email" value="{{ old('email') }}" type="email" placeholder="Your Email address" required  class="form-control input @error('email') is-invalid @enderror" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group form-div  mt-4">
                <input id="password" name="password" minlength="5" type="password" placeholder="Password" required class="form-control input  @error('password') is-invalid @enderror" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group form-div mt-4">
                <input id="confirmPassword" name="password_confirmation" type="password"
                       placeholder="Confirm Password" required minlength="5" class="form-control input"
                       onkeyup='check();' />
            </div>
            <span id='message'></span>
            <button  type="submit" class="btn btn_button btn-block btn-primary submit my-3">Sign up</button>

        </form>
        <p class="text-center mt-3 mt-xs-1 mx-auto  pr-3 " style="font-weight: 500;">
            or, continue with <a href="{{url("login/twitter")}}" class="twitter">Twitter</a> or <a href="{{url("login/google")}}" class="google">Google</a>
        </p>
        <hr id="hr" class="my-4 mx-auto ">
        <p class="mr-5 text-center ml-xs-3">
            <span class="agree">
                By continuing, you accept our
            </span>
            <a href="" class="term">Terms of Use</a>
        </p>
    </div>
</div>


@endsection
