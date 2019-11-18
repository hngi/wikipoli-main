@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@section('style')
<style>
    html {
        box-sizing: border-box;
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

    .jumbotron {
        margin-top: -2em;
        height: 20em;
        width: 100%;
        background: url("https://res.cloudinary.com/ufonumo/image/upload/v1571835995/photo-1531206715517-5c0ba140b2b8_l0vc2u.jpg");
    }

    .navbar-toggler {
        margin-top: -2em;
    }

    .fa {
        font-size: 2em;
    }

    .don {
        margin-top: 1em;
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


    @media only screen and (max-width: 574px) {
        .don {
            margin-top: 1.5em;
        }

        .jumbotron {
            margin-top: 0.5em;
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

    @media only screen and (max-width: 568px) {
        .navimg {
            margin-left: -5em;
            height: 150px;
            width: 190px;
        }
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

        #footer {
            padding-bottom: 1rem;
            text-align: center;
        }

        #footer #nav-flex {
            flex-direction: column;
            margin: 1rem 2rem;
        }

        #footer .link-group .group-desc {
            margin: 1.5rem 0 0.5rem;
        }
    }
</style>

@endsection
@extends('layouts.guest')
@section('content')

<div class="jumbotron col-sm-12 col-md-12 col-lg-12">
            <h2 class="display-4 text-white text-center don">Make A Donation</h2>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3 class="h2 mb-3 text-dark mt-5">Where Your Donation Goes</h3>
                    <p class="text-primary lead">Servers, bandwidth, maintenance, development. Donate to support a wide
                        variety of projects,
                        making your donation a great investment in a highly-efficient not-for-profit organization.
                        <br>
                        Wikipoli is one of the top 10 websites in the world, and it runs on a fraction of what other top
                        websites spend.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="#" role="button">N100</a>
                        <a class="btn btn-primary m-3" href="#" role="button">N200</a>
                        <a class="btn btn-primary m-3" href="#" role="button">N400</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="#" role="button">N500</a>
                        <a class="btn btn-primary m-3" href="#" role="button">N1000</a>
                        <a class="btn btn-light m-3" href="#" role="button">Other</a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-dark col-sm-6 col-md-10 col-lg-9 mt-3"
                            onClick="payWithRave()">DONATE NOW</button>
                    </div>
                </div>
            </div>
        </div>

@section('footer')
@include('layouts.footer')
@endsection
@endsection