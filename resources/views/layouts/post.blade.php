<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('styles/draft-post.css')}}">
        <link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">
        <link rel="manifest" href="{{asset('js/manifest.json')}}" />
        <link rel="stylesheet" href="{{asset('admin/assets/styles/vendor/quill.snow.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#333" />
        <style>
            .toast {
                opacity: 0.9!important;
            }
            .modal
            {
                position: fixed;
                z-index: 999;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                background-color: Black;
                filter: alpha(opacity=60);
                opacity: 0.6;
                -moz-opacity: 0.8;
            }
            .center
            {
                z-index: 1000;
                margin: 300px auto;
                padding: 10px;
                width: 130px;
                background-color: White;
                border-radius: 10px;
                filter: alpha(opacity=100);
                opacity: 1;
                -moz-opacity: 1;
            }
            .center img
            {
                height: 100px;
                width: 100px;
            }

            html 
            {
                box-sizing: border-box;
            }
            body 
            {
                font-family: 'Nunito', segoe UI, sans-serif;
            }
            #header
            {
                width: 100%;
                padding: 0;
            }
            #header #navbar
            {
                padding: 0;
            }
            #header .logo img 
            {
                width: 150px;
            }

            #header .navbar p 
            {
                font-size: 2rem;
                color:  #6D9BF1;
            }

            #header .menu .nav-link
            {
                font-size: 1.1rem;
                color:  rgba(0, 0, 0, 0.7);
                transition: 0.4s ease-out;
            }
            #header .menu .nav-link:hover
            {
                color: blue;
            }
            #header .menu #nav-register
            {
                background-color: #1257AE;
                align-self: center;
                color: white;
                padding: 0.4rem 1.5rem;
            }
            #header .menu #nav-register:hover
            {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            }

            #header .menu li 
            {
                margin-left: 2.2rem;
            }

            #header .fa-bars 
            {
                color: #000000;
            }

            @media (max-width: 860px)
            {
                #header .fa-bars 
                {
                    margin-bottom: 1rem;
                }
                #header .menu
                {
                    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                    padding-bottom: 1rem;
                }
                #header .menu .nav-link
                {
                    font-size: 1rem;
                    padding: 0.3rem 1rem;
                }
                #header .menu #nav-register
                {
                    padding: 0.3rem 1rem;
                }
                #header .menu li 
                {
                    margin-left: 0.5rem;
                }
            }
            #footer
            {
                font-family: Nunito, segoe UI, sans-serif;
                margin: 1rem auto;
                width: 100%;
            }
            #footer #hr
            {
                width: 80%;
                border: 0.5px solid rgba(0, 0, 0, 0.08);
            }
            #footer #nav-flex
            {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                margin: 2rem auto;
            }
            #footer #nav-flex .link-group
            {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }
            #footer .link-group .group-desc
            {
                color: #1257AE;
                font-weight: bolder;
                margin: 1rem 0;
            }
            #footer .link-group a
            {
                text-decoration: none;
                color: rgba(0, 0, 0, 0.8);
                margin: 0.15rem 0;
                transition: 0.4s ease-out;
            }
            #footer .link-group a:hover
            {
                color: rgb(100, 100, 200);
            }
            #footer #socials
            {
                display: flex;
                flex-direction: row;
            }
            #footer #socials .social-link
            {
                margin-right: 1rem;
                border-radius: 100%;
                height: 30px;
                border: 2px solid white;
                transition: 0.4s ease-out;
            }
            #footer #socials .social-link:hover
            {
                border: 2px solid skyblue;
            }


            @media (max-width: 860px)
            {
                #footer
                {
                    padding-bottom: 1rem;
                }
                #footer #nav-flex
                {
                    flex-direction: column;
                    margin: 1rem 2rem;
                }
                #footer .link-group .group-desc
                {
                    margin: 1.5rem 0 0.5rem;
                }
            }


        </style>
    </head>

    <body>
        @include('layouts.post_navbar')
        @yield('content')

        @yield('footer')

        <div class="modal" style="display: none">
            <div class="center">
                <img src="{{asset('images/reload.gif')}}"  >
            </div>
        </div>


        <script src="{{asset('js/jQuery.js')}}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('scripts/index.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/highlight.js')}}"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
$('#customFile').on('change', function () {
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
});

        </script>
        @yield('script')

    </body>
</html>
