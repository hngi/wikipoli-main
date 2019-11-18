@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<style>
       

        h1 {
            color: #1257AE;
            margin-bottom: 50px;
        }


        .form-control {
            border: 1px solid rgb(148, 148, 148);
            border-radius: 0;
        }

        .send-email {
            background: #1257AE;
            color: white;
            border-radius: 0;
        }

        .send-email:hover {
            background: rgb(69, 115, 202);
        }

        .send-email:hover {
            color: white;
        }

        .search-content a {
            font-weight: bold;
            color: #6D9BF1;
        }


        #footer {
            margin-top: 200px;
            padding-top: 10px;
            height: 300px;
            width: 100%;
        }

        .links {
            padding-top: 20px;
        }

        .quick-links li {
            list-style-type: none;
            padding-top: 5px;
        }

        .quick-links li:first-child {
            color: #ffffff;
            padding-bottom: 10px;
            font-weight: bold;
        }

        .main-body .fas,
        .main-body .fab {
            display: inline-block;
            margin-right: 2rem;
        }

        .fas {
            /* background-color: #1257AE; */
            color: #1257AE;
        }

        .icons-row {
            padding: 0 3rem;
        }

        .icons-row a {
            color: #333;
        }

        .icons-row a:hover {
            color: #555;
        }

        .secondrow-content {
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #333;
        }

        .secondrow-content>* {
            margin-bottom: 1rem;
        }

        .quick-links li a {
            color: #ffffff;
            text-decoration: none;
        }

        .social-links a span {
            color: #ffffff;
            letter-spacing: 20px;
        }

        .copyright p {
            padding-top: 10px;
            color: #ffffff;
            font-size: 12px;
        }

        @media screen and (max-width: 768px) {
            .input-group {
                width: 100%;
                margin-left: 12%;
            }
        }

        @media screen and (max-width: 375px) {
            .input-group {
                width: 120%;
                margin-left: 4%;
            }
        }



        .img-center{
            
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 70%;
                  
        }
    </style>
@endsection
@extends('layouts.guest')
@section('content')
        <div class="container mx-auto">
            <h1 class="text-center mt-3 mb-5 pb-3">{{$politician->first_name}} {{$politician->last_name}}</h1>
            <div class="row ">
                <div class="col-md-3 mb-4 img-center" >
                    <img src="{{asset($politician->file)}}"
                        class="img-fluid" alt="{{$politician->slug}}">
                </div>
                <div class="col-md-9">
                    <p>
                      
                        {!! nl2br($politician->biography) !!}
                    </p>
                    <br>
                    
                    <br>
                    <h3>Education</h3>
                    <hr />
                    <p>
                        {!! nl2br($politician->education) !!}
                    </p>
                   <p>
                        {!! nl2br($politician->education_history) !!}
                    </p>
                    <br>
                    <br>
                    <h3>Legal career</h3>
                    <hr>
                    <p>
                        {!! nl2br($politician->career) !!}
                    </p>
                  
                    <br>
                    
                    <h3>Political history</h3>
                    <hr>
                    <p>
                      {!! nl2br($politician->political_history) !!}
                    </p>
                   
                    <br>
                  
                </div>
            </div>
        </div>

@section('footer')

@include('layouts.footer')

@endsection
@endsection