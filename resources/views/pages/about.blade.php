@section('title')
<title>WikiPoli | About Us</title>
@endsection
@section('style')
<style>
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

    .img-fluid {
        height: 17em;
        width: 100%;
        object-fit: cover;
    }

    .cardi {
        box-shadow: 0.8px 0 0 gainsboro ;
    }

	.search {
		background: #1257AE;
		color: #ffffff;
		width: 6.2em;
	}

	.lead a {
		text-decoration: none;
	}

	.lock {
		display: flex;
		flex-direction: row;
	}
	.lock::before,
	.lock::after{
		content: "";
		flex: 1 1;
		border-bottom: 1.3px solid gainsboro;
		margin: auto;
	}

	.awe {
		border: 1px solid #1257AE;
		width: 10px;
		height: 30px;
		position: absolute;
		background: #1257AE;
	}

	.about {
		margin-top: 5em;
	}

	.form-control {
		width: 20em;
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
			display: block;
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

	
    @media only screen and (width: 375px) {
        .navimg {
            margin-left: -8em;
        }
		.form-control {
			width: 13em;
		}
    }
    @media only screen and (width: 320px) {
		.form-control {
			width: 10em;
		}
    }
    @media only screen and (width: 425px) {
        .navimg {
            margin-left: -10em;
        }
		.form-control {
			width: 15em;
		}
    }

    @media only screen and (max-width: 568px) {
        .navimg {
            margin-left: -5em;
            height: 150px;
            width: 190px;
        }
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
        
        #footer
			{
				padding-bottom: 1rem;
				text-align:center;
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

	html 
	{
	  	box-sizing: border-box;
	}
	body 
	{
	 	font-family: 'Nunito', segoe UI, sans-serif;
	}
</style>

@endsection
@extends('layouts.guest')
@section('content')

<div class="container">
		<div class="about">
			<h4 class="display-4 text-center text-primary">About Us</h4>
		</div>
        

        <div class="pb-3 mt-4">
            <p class="lead text-dark">
					Wikipoli was founded by a team of interns during the <a href="https://hng.tech" class="words">HNG Internship</a> program (HNG 6.0).
					It is a free web and mobile responsive application where registered users can air out with no
					 restrictions their thoughts on politics and as well write about a politician in their area or state.
					<br>
					WikiPoli is dynamic, it is open to a large contributor base also there are not qualification required to write articles or posts about a politician.					
            </p>
        </div>

        <hr>

        <div class="row pb-4 mt-5 justify-content-center">
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4 cardi">
				<div class="awe"></div><h4 class="h4 ml-4 pb-3"> Our Awesome Service</h4>
                <img src="https://res.cloudinary.com/gozzycloud/image/upload/v1573029068/wikipoli/images_roc3xu.jpg" class="img-fluid">
                <p class="lead mt-4">We provide a global platform where you can publicize politicians in your zone anywhere you are in the world.
						<a href="aboutus.html" class="words">Contact us</a> to feature your events on our platform.</p>
            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4 cardi">
					<div class="awe"></div><h4 class="h4 ml-4 pb-3">Who We Are</h4>
                <img src="https://res.cloudinary.com/gozzycloud/image/upload/v1573029090/wikipoli/politicians-participating-political-debate-concept-260nw-1164676552_tgetsk.JPEG" class="img-fluid">
                <p class="lead mt-4">
						WikiPoli is that for us, we are driven by our desire to proffer solutions. 
						We are bringing politicians and updates about the political space right in front of you.
				</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mt-4 cardi">
					<div class="awe"></div><h4 class="h4 ml-4 pb-3">Events</h4>
                <img src="https://res.cloudinary.com/gozzycloud/image/upload/v1573026157/wikipoli/2996780_1_rt1w1o.svg" class="img-fluid">
                <p class="lead mt-4">Life as a Politician.  Public and Family expectations.
						December 13th, 2019.
						KFA Events, Lekki Phase 1, Lagos.
						<br>
						<br>
						Why I'd be contesting for President in 2023- Donald Dork.
						January 3rd, 2020.
						Landmark Events, Lekki, Lagos.
						</p>
            </div>
		</div>

        
        <h4 class="text-center h2 mt-5 lock">How It Works</h4>

        <div class="mt-5">
            <p class="lead text-dark">
					In order to enjoy all the juicy features like creating a post, commenting on a post to using your favourite emoticon,
					First, <a href="{{ url('/register') }}" class="words">Sign Up</a> as a User on WikiPoli, you could sign up using your Google account or Facebook account and if you don't have one you could just input in your data.
					
					Now, <a href="{{ url('/login') }}" class="words">Log In</a> in order to view and interact with recent posts as well as creating posts.
					Update your profile, write a catchy bio for yourself and enjoy the WikiPoli experience.					
            </p>
            <div class="d-flex justify-content-center mt-5">
                <a class="btn btn-primary btn-lg" href="{{ url('/login') }}" role="button">Get Started</a>
            </div>
        </div>
			</div>


@section('footer')
@include('layouts.footer')
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection