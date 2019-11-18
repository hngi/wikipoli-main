@section('title')
<title>WikiPoli | Welcome</title>
@endsection
@section('style')
<style tye="text/css">
            body,
            html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Nunito', sans-serif;
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

            #header .menu #nav-accounts {
            background-color: #1257AE;
            align-self: center;
            color: white;
            padding: 0.4rem 1.5rem;
            }

            #header .menu #nav-accounts:hover {
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

            #header .menu #nav-accounts {
            padding: 0.3rem 1rem;
            }

            #header .menu li {
            margin-left: 0.5rem;
                }
            }

            a.btn.btn-primary{
            float: left;
            }
            a.nav-link {
            float: left;
            color: black;
            font-size: 18px;
            margin-left: 20px;
            }

            button.accounts {
            float: left;
            font-size: 15px;
            }

            .jumbotron.jumbotron-fluid {
                background-color: #1257AE;
                color: #ffffff;
                letter-spacing: 1px;
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
            margin: 0px auto;
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
            }

            @media (max-width: 860px)
            {
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
            }       

            span{
                color: #1257AE;
                font-weight: 700;
            }

            h5.text-justify{
                font-weight: bold;
                color: #1257AE;
                font-size: 17px;
            }

            p.text-justify{
                font-weight: 600;
                font-size: 15px;
                line-height: 2em;
            }

            p a{
                color: #1257ae;
                text-decoration: none;
            }

            p a:hover{
                color: #6D9BF1;
                text-decoration: none;
            }

            h6 {
            font-weight: bold;
            font-size: 17px;
            color: #1257AE;
            }


        </style>

@endsection
@extends('layouts.guest')
@section('content')
<section>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h4 class="display-6">Terms of Use</h4>
        </div>
    </div>
</section>
<section>    
` <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-12">
                <h5 class="text-justify"><span>Terms of Use</span></h5>

                <br />
                <h6 class="text-justify">Welcome to WikiPoli</h6>
                <p class="text-justify">Terms and Conditions commonly abbreviated as (T&C) are the legal agreement between a service
                    provider and a person who want wants to use that service.</p><br />
                <br />
                <p class="text-justify">These terms and conditions outline the rules and regulations for the use of  <a
                        href="index.html">&nbsp; WikiPoli</a> <br /><br />
                    By accessing this website we assume you accept these terms and conditions. Do not continue to use <a href="index.html"> WikiPoli</a> if you
                    do not agree to take all of the terms and conditions stated on this page.</p><br />
            </div>
        </div>

        <div class="row">
            
            <div class="col-lg-12">
                <h5 class="text-justify">Vision</h5><br />
                <p class="text-justify">WikiPoli is a nonprofit organization whose mission is to empower and engage
                    people around the world to know the candidate of their choice before going for him or her and also
                    to collect and develop content under a free license or in the public domain, and to desseminate it
                    effectively and globally, free of charge.</p><br /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-justify">1. Overview</h5><br />
                <p class="text-justify">You are welcome to join as a contributor, editor, or author but please be aware
                    that you are responsible for all of your contributions, edits, and re-use of WikiPoli content under
                    the law of the Federal Republic of Nigeria and other applicable laws ( which may include the laws of
                    where you live or where you view or edit content). This means it is important that you use caution
                    when posting content. In light of this we have some rules about what you cannot post, most of which
                    is either for your own protection or for the protection of other users like yourself. Please keep in
                    mind that the content we host is for general information purposes only, so if you need expert advice
                    for a particular question ( such as medical, legal, or financial issues), you should seek the help of
                    licensed or qualified professional. We also include other important notices and disclaimers, so
                    please read these Terms of Use in their entirety.</p><br /><br />

                <p class="text-justify"><span>a. We do not take an editorial role:</span> Because the WikiPoli Projects are collaboratively edited, all of
                    the content that we host is provided by users like yourself, and we do not take an editorial role.
                    This means that we do not monitor or edit the content of the project websites, and we do not take
                    responsibility for this content.</p><br /><br />

                <p class="text-justify"><span>b. You are responsible for your own actions:</span> You are legally responsible for your edits and
                        contributions on WikiPoli, so four your own protection you should exercise caution and avoid
                        contributing any content that may result in criminal or civil liablity under any applicable
                        laws.</p><br /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-justify">2. Privacy Policy</h5><br />
                <p class="text-justify">We ask that you review the terms of our Privacy Policy, so that you are aware of
                    how we collect and use your information. Because our services are used by people all over the world,
                    personal information that we collect may be stored and processed in the Nigeria or any other country
                    in which we or our agents maintain facilities. By using our services, you consent to any transfer of
                    information outside your country.</p><br /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-justify">3. DMCA Compliance</h5><br />
                <p class="text-justify">The WikiPoli foundation wants to ensure that the content that we host can be
                    re-used by other users without the fear of liability and that it is not infringing the propriety
                    rights of others (Digital Millennium Copyright Act (DMCA) ).</p><br /><br />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-justify">4. Disclaimers</h5> <br />
                <p class="text-justify">At WikiPoli we expressly disclaim all express or implied warranties of all
                    kinds, including but not limited to the implied warranties of merchantability, fitness for a
                    particular purpose, and non-infringement.</p><br /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h6 class="text-justify">Thank You!</h6><br />
                <p class="text-justify">We appreciate you taking the time to read these Terms of Use, and we are very
                    happy to have you contributing to the Projects and using our Services. Through your contributions,
                    you are helping to build something really big - not only an important collection of collaboratively
                    edited reference projects that provides education and information to millions who might otherwise
                    lack access, but also a vibrant community of like-minded and engage peers, focused on a very noble
                    goal.</p><br /><br />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="text-justify">These <span>Terms of Use</span> went into effect on November 3rd, 2019.</p>
                <br />
            </div>
        </div>

    </div>
</section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

@section('footer')
@include('layouts.footer')
@endsection
@endsection