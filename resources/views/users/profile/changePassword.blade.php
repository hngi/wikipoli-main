@section('title')
<title>WikiPoli | User Profile {{Auth::user()->username}}</title>
@endsection
@section('style')
<style>
  
    .profile-input input, .profile-input select, .profile-input textarea{
        width: 50%!important;
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



    @media (max-width: 860px) {
        .profile-input input, 
        .profile-input select, 
        .profile-input textarea{
            width:100%!important;
        }

    }

  
    .form-control {
        width: 35em;
    }

    .search {
        margin-top: 0.5em;
        width: 10em;
    }

    .link {
        text-decoration: none;
    }

    .row {
        align-self: auto;
        justify-content: center;
    }

    .cardi {
        margin: 1em;
        max-width: 100%;
    }

    .cardi a {
        text-decoration: none;
    }

    .img-fluid {
        height: 15rem;
        width: 100%;
        object-fit: cover;
    }

    .posts a {
        text-decoration: none;
    }

    .lead {
        font-size: medium;
    }

    .list {
        list-style-type: none;
        line-height: 2em;
    }

    .list a {
        text-decoration: none;
        color: darkslategrey;
    }

    .cont a {
        text-decoration: none;
    }

    .copy {
        font-size: 12.5px;
    }

    @media only screen and (max-width: 568px) {
        .navimg {
            margin-left: -5em;
            height: 150px;
            width: 190px;
        }
    }

    @media only screen and (min-width: 1024px) {
        .disp {
            display: grid;
            grid-template-columns: auto auto auto auto;
            overflow-x: hidden;
            margin-right: 0.5em;
        }
    }

    @media only screen and (max-width: 768px) {
        .form-control {
            width: 27em;
        }
    }

    @media only screen and (width: 375px) {
        .navimg {
            margin-left: -8em;
        }
    }
    @media only screen and (width: 425px) {
        .navimg {
            margin-left: -10em;
        }
    }

    body {
            min-height: 100%
        }

        body {
            background: #f6f6f6;
            background-size: cover;
            font-family: 'Nunito', segoe UI, sans-serif;
            font-size: 14px;
            margin: 0
        }

        #box {
            width: 400px;
            margin: auto;
            text-align: center;
            background: #f6f6f6;
            padding: 20px 50px;
            box-sizing: border-box;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.2);
            border-radius: 2%
        }

        h1 {
            margin-bottom: 1.5em;
            font-size: 30px;
            color: #484548;
            font-weight: 100;
        }

        h1 span,
        small {
            display: block;
            font-size: 14px;
            color: #989598;
        }

        small {
            font-style: italic;
            font-size: 11px;
        }

        form p {
            position: relative;
        }

        .password {
            width: 90%;
            padding: 10px 12px;
            margin-bottom: 5px;
            border: 1px solid #e5e5e5;
            border-bottom: 2px solid #ddd;
            background: rgba(255, 255, 255, 0.2) !important;
            color: #555;
        }

        .password+.unmask {
            position: absolute;
            right: 5%;
            top: 10px;
            width: 25px;
            height: 25px;
            background: transparent;
            border-radius: 50%;
            cursor: pointer;
            border: none;
            font-family: 'fontawesome';
            font-size: 14px;
            line-height: 24px;
            -webkit-appearance: none;
            outline: none
        }

        .password+.unmask:before {
            content: "\f06e";
            position: absolute;
            top: 0;
            left: 0;
            width: 25px;
            height: 25px;
            background: rgba(205, 205, 205, 0.2);
            z-index: 1;
            color: #aaa;
            border: 2px solid;
            border-radius: 50%;
        }

        .password[type="text"]+.unmask:before {
            content: "\f070";
            background: rgba(105, 205, 255, 0.2);
            color: #06a
        }

        #valid {
            font-size: 12px;
            color: #daa;
            height: 15px
        }

        #strong {
            height: 20px;
            font-size: 12px;
            color: #daa;
            text-transform: capitalize;
            background: rgba(205, 205, 205, 0.1);
            border-radius: 5px;
            overflow: hidden
        }

        #strong span {
            display: block;
            box-shadow: 0 0 0 #fff inset;
            height: 100%;
            transition: all 0.8s
        }
        #strong .none {
            box-shadow: 0 0 0 #fff inset;
        }

        #strong .weak {
            box-shadow: 5em 0 0 red inset;
        }

        #strong .medium {
            color: #da6;
            box-shadow: 10em 0 0 #da6 inset
        }

        #strong .strong {
            color: #595;
            box-shadow: 50em 0 0 #ada inset
        }

        .profile-input input,
        .profile-input select,
        .profile-input textarea {
            width: 50% !important;
        }

        @media (max-width: 860px) {

.profile-input input,
.profile-input select,
.profile-input textarea {
    width: 100% !important;
}

#footer {
    padding-bottom: 1rem;
}

#footer #nav-flex {
    flex-direction: column;
    margin: 1rem 2rem;
}

#footer .link-group .group-desc {
    margin: 1.5rem 0 0.5rem;
}
#box{
    width: 100%;
    margin: 10% auto;
    padding: 20px 4vw;
}
.password {
width: 90%;
padding: 5px 12px;
}
.password+.unmask {
position: absolute;
right: 5%;
top: 6px;
width: 15px;
height: 15px;
font-size: 12px;
line-height: 17px;
-webkit-appearance: none;
outline: none
}

.password+.unmask:before {
content: "\f06e";
position: absolute;
top: 0;
left: 0;
width: 20px;
height: 20px;
background: rgba(205, 205, 205, 0.2);
z-index: 1;
color: #aaa;
border: 2px solid;
border-radius: 50%;
}
}
</style>
@endsection
@extends('layouts.guest')
@section('content')

<div id="box">
        
            <h1>Change Password <span>choose a good one!</span></h1>
            @if(session()->has('message.alert'))
            <div class="text-center">
                <button class="alert alert-{{ session('message.alert') }}"> 
                    {!! session('message.content') !!}
                </button>
            </div>
            @endif
            <form action="{{ route('change.password') }}" method="post" autocomplete="off" id="myform-search">
            @csrf 
                 
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach 
                <p>
                    <input type="password" name="current_password" value="" placeholder="Enter Current Password" id="password" class="password" required>
                    <button class="unmask mr-3" type="button"></button>
                </p>
                <p>
                    <input type="password" name="new_password" value="" placeholder="Enter New Password" id="new_password" class="password" required>
                    <button class="unmask mr-3" type="button"></button>
                </p>
                <p>
                    <input type="password" name="new_confirm_password" value="" placeholder="Confirm New Password" id="confirmpass" class="password" required>
                    <button class="unmask mr-3" type="button"></button>
                    <div id="valid" class="mb-2"></div>
                    <input type="submit" value="Change Password" class="btn btn-success" onclick="return Validate()">
                </p>
            </form>
    </div>


@section('footer')
@include('layouts.footer')
@endsection
@section('script')
<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("new_password").value;
            var confirmPassword = document.getElementById("confirmpass").value;
            if (password != confirmPassword) {
                document.getElementById("valid").innerHTML=("Passwords Don't Match");
                return false;
            }
            return true;
        }
        
    
    </script>
    <script>
            $('.unmask').on('click', function(){  
        if($(this).prev('input').attr('type') == 'password')
            $(this).prev('input').prop('type', 'text');  
        else
            $(this).prev('input').prop('type', 'password');  
        return false;
        });
    
    </script>
@endsection
@endsection