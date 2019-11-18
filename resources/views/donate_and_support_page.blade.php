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
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles/style.css') }}"/>
<title>Title</title>
<style>
    /* * {
        padding: 0;
        margin: 0;
    } */
    body {
        font-family: 'Lato', sans-serif;
        overflow: inherit;
    }
    .navimg {
        margin-top: -0.4em;
        margin-left: -1em;
        height: 150px;
        width: 190px;
    }
    .jumbotron {
        margin-top: 1em;
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
        margin-top: 2em;
    }

    @media only screen and (max-width: 425px) {
        .navbtn {
            display: none;
        }
        .don {
            margin-top: 3em;
        }
    }

    .list {
        list-style-type: none;
    }

	.logo img {
    width: 120px;
}

.navbar p {
    font-size: 2rem;
    color:  #6D9BF1;
}

.menu a {
    font-size: 1.5rem;
    color:  #6D9BF1;
}

.menu li {
    padding-left: 2.5rem;
}

.fa-bars {
    color: #000000;
}

.button-signup {
    background-color:  #6D9BF1;
    border: none;
    box-shadow: none;
    color: #ffffff;
    padding: 6px;
    font-size: 1.5rem;
    text-align: center;
    width: 150px;
    margin-left: 2.5rem;
}

.button-signup:hover {
    color: white;
    text-decoration: none;
    background: rgb(24, 24, 133);
}

.button-search {
    background-color:  #6D9BF1;
    border: none;
    box-shadow: none;
    color: #ffffff;
    font-size: 2rem;
    padding: 1px;
    width: 150px;
}

.button-search:hover {
    background: rgb(24, 24, 133);
}

.form-content {
    width: 80%;
    margin-top: 15%;
}

.input-group {
    width: 80%;
    margin-left: 23%;
}

.form-control {
    height: 50px;
    padding: 15px;
    border-radius: 0;
    border: 1px solid  #6D9BF1;
}

h1 {
    margin-left: 23%;
    color:  #6D9BF1;
    margin-bottom: 50px;
}

.search-content {
    font-size: 1.2rem;
    margin-left: 23%;
    color: #676871;
    padding-top: 20px;
    font-weight: bold;
}

.search-content a {
    font-weight: bold;
    color:  #6D9BF1;
}


#footer {
    background-color:  #6D9BF1;
    margin-top: 32%;  /* YOU CAN PULL THIS OUT WHEN YOU IMPLEMENT YOUR PAGE.*/
    padding-top: 10px;
    /* height: 300px; */
    width: 100%;
}

.links {
    padding-top: 5px;
}

.social-links h3,
.quick-links li {
    list-style-type: none;
    padding-top: 5px;
}

.social-links h3,
.quick-links li:first-child {
    color: #ffffff;
    padding-bottom: 10px;
    font-weight: bold;
}

.quick-links li a {
    color: #ffffff;
    text-decoration: none;
}

.social-links a span {
    color: #ffffff;
    letter-spacing: 20px;
}

.social-links p,
.copyright p {
    padding-top: 10px;
    color: #ffffff;
    font-size: 12px;
}

.line{
    display: none;
}

/* Responsive styling */
@media screen and (max-width: 768px) {
    h1 {
        font-size: 30px;
    }
    #footer {
        padding-top: 10px;
        height: 450px;
        width: 100%;
    }
}

@media screen and (max-width: 768px) {
    .input-group {
        width: 100%;
        margin-left: 12%;
    }
    .form-control {
        height: 50px;
        padding: 20px;
        border-radius: 0;
        border: 1px solid  #6D9BF1;
    }
    .button-search {
        background-color:  #6D9BF1;
        border: none;
        box-shadow: none;
        color: #ffffff;
        font-size: 1.2rem;
        padding: 1px;
        width: 80px;
    }
    .search-content {
        font-size: 1rem;
        width: 100%;
        margin-left: 13%;
        color: #676871;
        padding-top: 20px;
        font-weight: bold;
    }
}

@media screen and (max-width: 375px) {
    .input-group {
        width: 120%;
        margin-left: 4%;
    }

    .search-content {
        font-size: 1rem;
        width: 120%;
        margin-left: 8%;
        color: #676871;
        padding-top: 20px;
        font-weight: bold;
    }

    .line{
        display: block;
        margin: 0 auto;
        padding: 0;
        height: 0px;
        border: 1px solid #ffffff;
        width: 25%;
        background: #000;
    }
}
</style>
</head>
<body>

	
    <div class="container-fluid">
	    <div>
            @include('layouts.header')
        </div>
        <div class="jumbotron col-sm-12 col-md-12 col-lg-12">
            <h2 class="h2 text-white text-center don">Make A Donation</h2>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3 class="h3 mb-3 text-dark mt-5">Where Your Donation Goes</h3>
                    <p class="text-primary">Servers, bandwidth, maintenance, development. Donate to support a wide variety of projects,
                            making your donation a great investment in a highly-efficient not-for-profit organization.
                            <br>
                             Wikipoli is one of the top 10 websites in the world, and it runs on a fraction of what other top websites spend.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-5 align-middle">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-3" href="#" role="button">N100</a>
                        <a  class="btn btn-primary m-3" href="#" role="button">N200</a>
                        <a  class="btn btn-primary m-3" href="#" role="button">N400</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a  class="btn btn-primary m-3" href="#" role="button">N500</a>
                        <a  class="btn btn-primary m-3" href="#" role="button">N1000</a>
                        <a  class="btn btn-light m-3" href="#" role="button">Other</a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button  type="button" class="btn btn-dark col-sm-6 col-md-10 col-lg-9 mt-3" onClick="payWithRave()">DONATE NOW</button>
                    </div>
					
                </div>
            </div>
			
        </div>
		
        
    </div>
	@include('layouts.footer')


  <!-- the flutterwave api integration -->
<script>
    const API_publicKey = "FLWPUBK_TEST-2c7dd09d63d44deae5cbf3e9728aa289-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>
<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>