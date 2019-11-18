<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        @yield('title')

        <style type="text/css">
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
        @yield('style')
    </head>
    <body>
        <div class="container-fluid">
            @include('layouts.guest_navbar')
            @yield('content')


            @yield('footer')

        </div>


        <script src="{{asset('js/jQuery.js')}}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

        @yield('script')
    </body>
</html>
