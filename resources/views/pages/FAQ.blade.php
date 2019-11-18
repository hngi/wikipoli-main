@section('title')
<title>WikiPoli | Frequently Asked Questions</title>
@endsection
@section('style')
<style type="text/css">
	html Profile
	{
	  	bProfile
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
  

  /* FOR THE FOOTER */
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
    .log_out {
			background: #1257AE;
			color: #ffffffff !important;
		}


		/* FOR THE MAIN PAGE  */
    .acc {
      width: 100%;
      color: #ffffffff;
      font-weight: bold;
    }
    .acc:hover {
      color: #ffffffff;
    }
    .actext {
      float: left;
      text-align: left;
    }

    .card-header {
      background-color: #1257AE;
      
    }
    
		
</style>
@endsection
@extends('layouts.guest')
@section('content')
                                        
<div class="container">
          <h2>Frequently Asked Questions</h2>
          <br>
          <br>
          <!-- <p>Login and Registration Issues</p> -->
          <div class="accordion" id="Loginaccordion">
            <div class="card z-depth-0 bordered">
              <div class="card-header" id="heading1">
                <h5 class="mb-0">
                  <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse1"
                    aria-expanded="true" aria-controls="collapse1">
                    <span class="actext">What is WikiPoli?</span> 
                    <i class="fa fa-plus float-right"></i>
                  </button>
                </h5>
              </div>
              <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                data-parent="#Loginaccordion">
                <div class="card-body">
                    It is a special type of website designed to make contribution
                    on everything politics easy. Many people are constantly 
                    improving WikiPOLIS, making thousands of edits every
                    minute.

                </div>
              </div>
            </div>
            
            <!-- SECOND  -->
    
            <div class="card z-depth-0 bordered">
              <div class="card-header" id="heading2">
                <h5 class="mb-0">
                  <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse2"
                    aria-expanded="true" aria-controls="collapse2">
                    <span class="actext">How can I contribute?</span> 
                    <i class="fa fa-plus float-right"></i>
                  </button>
                </h5>
              </div>
              <div id="collapse2" class="collapse" aria-labelledby="heading2"
                data-parent="#Loginaccordion">
                <div class="card-body">
                    You may not have to, however, in order to post messages
                    you must sign up/log in. Also, registration gives you access
                    to additional features not available to guest users such as 
                    private messaging the administrator, subscription to latest 
                    news on this site, etc. It only takes a few moments to 
                    register so it is recommended you do so.
                </div>
              </div>
            </div>
    
            <!-- THIRD -->
    
            <div class="card z-depth-0 bordered">
              <div class="card-header" id="heading3">
                <h5 class="mb-0">
                  <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="true" aria-controls="collapse3">
                    <span class="actext ">Who owns WikiPoli?</span> 
                    <i class="fa fa-plus float-right"></i>
                  </button>
                </h5>
              </div>
              <div id="collapse3" class="collapse" aria-labelledby="heading3"
                data-parent="#Loginaccordion">
                <div class="card-body">

                  WikiPoli is owned by a group of individuals who had a common goal of educating people about political candidates
                    <!--First, check your username and password. If they are 
                    correct, then one of two things may have happened. 
                    If you were sent an email, follow the instructions. 
                    If you did not receive an email, you may have
                    provided an incorrect email address or the 
                    email may have been picked up by a spam filer. 
                    If you are sure the email address you provided is 
                    correct, try contacting an administrator.-->
              
                </div>
              </div>
            </div>
    
            <!-- FORTH -->
    
            <div class="card z-depth-0 bordered">
              <div class="card-header" id="heading4">
                    <h5 class="mb-0">
                    <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse4"
                    aria-expanded="true" aria-controls="collapse4">
                   <span class="actext">Is my Privacy Secured?</span> 
                   
                    <i class="fa fa-plus float-right"></i>
                    </button>
                    
                    </h5>
              </div>
              <div id="collapse4" class="collapse" aria-labelledby="heading4"
                data-parent="#Loginaccordion">
                <div class="card-body">
                  Don’t panic! While your password cannot be retrieved, 
                  it can easily be reset. Visit the login page and click 
                  <em>I forgot my password</em>. Please note that only information you wish to display will be used
                </div>
              </div>
            </div>


            <!-- FIFTH-->
    
            <div class="card z-depth-0 bordered">
                <div class="card-header" id="heading5">
                      <h5 class="mb-0">
                      <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse5"
                      aria-expanded="true" aria-controls="collapse5">
                      <span class="actext">Can I delete my Contribution?</span> 
                      <i class="fa fa-plus float-right"></i>
                      </button>
                      </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5"
                  data-parent="#Loginaccordion">
                  <div class="card-body">
                    Don’t panic! While your password cannot be retrieved, 
                    it can easily be reset. Visit the login page and click 
                    <em>I forgot my password</em>. 
                    Follow the instructions and you should be able 
                    to log in again shortly.<br />
                    However, if you are not able to reset your 
                    password, contact a board administrator.
                  </div>
                </div>
              </div>

              <!--SIXTH-->
        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading6">
            <h5 class="mb-0">
              <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse6"
                aria-expanded="true" aria-controls="collapse6">
                <span class="actext"> Who writes the articles on WikiPoli?</span>
                <i class="fa fa-plus float-right"></i>
              </button>
            </h5>
          </div>
          <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#Loginaccordion">
            <div class="card-body">
              Almost all articles on WikiPoli are written by multiple editors, not just one. If you click on the "View
              history" tab at the top of an article, a list will be displayed of all the contributors to the article and
              when their contribution was made.
            </div>
          </div>
        </div>

                      <!--SEVENTH-->
        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading7">
            <h5 class="mb-0">
              <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse7"
                aria-expanded="true" aria-controls="collapse7">
                <span class="actext">How do I create a new page?</span>
                <i class="fa fa-plus float-right"></i>
              </button>
            </h5>
          </div>
          <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#Loginaccordion">
            <div class="card-body">
              You are required to have a WikiPoli account to create a new article, you can register <a href="signup.html">here.</a> To see other
              benefits to creating an account, see Why create an account?
              
            </div>
          </div>
        </div>

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading8">
            <h5 class="mb-0">
              <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse8"
                aria-expanded="true" aria-controls="collapse8">
                <span class="actext">How do I edit a page?</span>
                <i class="fa fa-plus float-right"></i>
              </button>
            </h5>
          </div>
          <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#Loginaccordion">
            <div class="card-body">
              Editing most WikiPOli pages is easy, just click the "Edit" tab WikiPOli page (or on a. This will take you to a new page with a text box containing the editable text of the
              page you were viewing. In this box you can type in the text that you want to add or format the text and add other elements like images.<!-- When you have finished editing you should
              write a short edit summary in the small field below the edit-box describing your changes.-->
            </div>
          </div>
        </div>

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading9">
            <h5 class="mb-0">
              <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse9"
                aria-expanded="true" aria-controls="collapse9">
                <span class="actext">Can I rely on WikiPoli for advice on political related contents</span>
                <i class="fa fa-plus float-right"></i>
              </button>
            </h5>
          </div>
          <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#Loginaccordion">
            <div class="card-body">
              In a word, no. If you need specific advice on political related contents,
              please seek a professional who is licensed or knowledgeable in that area. That is not to say that you will
              not find valuable and accurate information in WikiPoli; much of the time you will. However, WikiPoli
              cannot guarantee the validity of the information found here. The content of any given article may recently
              have been changed or altered by someone whose opinion does not correspond with the state of
              knowledge in the relevant fields.
            </div>
          </div>
        </div>

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading5">
            <h5 class="mb-0">
              <button class="btn btn-link acc" type="button" data-toggle="collapse" data-target="#collapse5"
                aria-expanded="true" aria-controls="collapse5">
                <span class="actext">I think I spotted an error. How can I get that fixed on the site?</span>
                <i class="fa fa-plus float-right"></i>
              </button>
            </h5>
          </div>
          <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#Loginaccordion">
            <div class="card-body">
              Mistakes do appear on the website occasionally, so please point out apparent errors as soon as possible by
              e-mailing contact@wikipoli.gq. To help us investigate further, please include as much supporting evidence as you
              can. We do this for two reasons: 
              <ul>
                <ul>1. To confirm that it is truly an error (as you can imagine,
                  sometimes people will ask for accurate information on our site to be changed or deleted);</ul>
                  <ul>2. So that the error doesn't recur the next time we download the data from the source.</ul>
              </ul>
                 Thanks for helping us keep
              Wikipuli.gq accurate.
            </div>
          </div>
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