<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<title>WikiPoli</title>
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background: gainsboro;
        height: 100vh;
    }
    .navbar {
        margin-top: -1.8em;
    }
    .nav-link {
        font-size: 1.2em;
        font-weight: 300;
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
</style>

</head>
<body>

    <div class="container-fluid bg-light">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="#"></a>
                <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" class="navimg">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
            @if (Route::has('login'))
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-primary pr-5" href="{{ url('/posts') }}">Posts <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pr-5 text-primary" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-primary  pr-2" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                    @endauth
            </div>
        </nav>

        <div class="text-center mt-5 mb-4">
            <h5 class="display-4">Know your candidate</h5>
            <br>
            <p class="lead mb-4">Don't go for that candidate until you are sure of their credibility!</p>
            <div class="d-flex justify-content-center">
                <form action="{{url('search')}}" method="get">
                    <input type="text"  name="q" value="{{request('q')}} " class="form-control m-2" placeholder="Enter Candidate's Name">
                    <button type="submit" class="btn btn-primary search h-50">Search</button>
                </form>
            </div>
        </div>



        <div class="mt-5">
            <h3 class="text-center pt-4 h3 pb-3">Recent Posts</h3>

            <div class="row disp">

                <div class="col-sm-12 col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694230/wikipoli/Goodluck_Jonathan_2014_jr8b3g.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694229/wikipoli/D0ZBtr3X0AAnfG3-500x375_mwm30v.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694230/wikipoli/olusegun-obasanjo-1_jnctdw.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694230/wikipoli/show-photo_pspnd7.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694230/wikipoli/atiku3_ivquan.png">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694230/wikipoli/ilupmC_i_400x400_rswxai.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694230/wikipoli/K5gAuCIk_400x400_q46tr9.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-lg-3 cardi">
                    <a href="#">
                        <img class="img-fluid" src="https://res.cloudinary.com/gozzycloud/image/upload/v1572694229/wikipoli/IBB_bdbbsh.jpg">
                        <div class="mt-2">
                            <p class="lead">Lorem ipsum dolor see more...</p>
                        </div>
                    </a>
                </div>
            
            </div>

        </div>

        <hr class="mt-4">
            
        <footer>
            <div class="row">
                <div class="mt-5 col-sm-12 col-md-3 col-lg-3">
                    <h4 class="h4 text-center text-primary mb-4">Legal</h4>
                    <li class="text-center list"><a href="{{ url('/Terms') }}">Terms Of Use</a></li>
                    <li class="text-center list"><a href="{{ url('/PrivacyPolicy') }}">Privacy Policy</a> </li>  
                </div>

                <div class="mt-5 col-sm-12 col-md-3 col-lg-3">
                    <h4 class="h4 text-center text-primary mb-4">Company</h4>
                        <li class="text-center list"><a href="{{ url('/About') }}">About</a></li>
                        <li class="text-center list"><a href="{{ url('/Careers') }}">Careers</a></li>
                </div>

                <div class="mt-5 col-sm-12 col-md-3 col-lg-3">
                    <h4 class="h4 text-center text-primary mb-4">Help & Support</h4>
                        <li class="text-center list"><a href="{{ url('/FAQs') }}">FAQs</a></li>
                        <li class="text-center list"><a href="{{ url('/Donation') }}">Donations</a></li>
                </div>

                <div class="mt-5 col-sm-12 col-md-3 col-lg-3">
                    <h4 class="h4 text-center text-primary mb-4">Connect With Us</h4>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="m-2"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="m-2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="m-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-center mt-4 cont">
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@wikipoli.gq</a>
                    </div>
                </div>
            </div>
            <p class="text-center  mt-5 copy">&copy;2019 WikiPoli. All Rights Reserved</p>
        </footer>
            
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>