@section('title')
<title>WikiPoli | Contact Us</title>
@endsection
@section('style')
<style>
  .social-links h3 {
  font-size: 1rem;
  line-height: 1.5;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Lato', sans-serif;
}

.logo img {
  width: 120px;
}

.navbar p {
  font-size: 2rem;
  color: #6D9BF1;
}

.menu a {
  font-size: 1.5rem;
  color: #6D9BF1;
}

.fa-bars {
  color: #000000;
}

.posts-nav-link {
   background-color: #6D9BF1 !important;
  
  color: #ffffff !important;
  padding: .6rem 1.7rem;
}

.posts-nav-link:hover {
   text-decoration: none;
    background-color: rgb(69, 115, 202) !important;
}

.button-signup {
  background-color: #6D9BF1;
  border: none;
  box-shadow: none;
  color: #ffffff;
  padding: 6px;
  font-size: 1.5rem;
  width: 150px;
  margin-left: 2.5rem;
}

.button-signup:hover {
   background: rgb(69, 115, 202);
}

.user-name-link {
  color: black !important;
}

.button-search {
  background-color: #6D9BF1;
  border: none;
  box-shadow: none;
  color: #ffffff;
  font-size: 2rem;
  padding: 1px;
  width: 150px;
}

.form-content {
  width: 80%;
  margin-top: 15%;
}

.input-group {
  width: 80%;
  margin-left: 23%;
}

h1 {
  color: #6D9BF1;
  margin-bottom: 50px;
}

.search-content {
  font-size: 1.2rem;
  margin-left: 23%;
  color: #676871;
  padding-top: 20px;
  font-weight: bold;
}

.form-control {
  border: 1px solid rgb(148, 148, 148);
  border-radius: 0;
}

.send-email {
  background: #6D9BF1;
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
  /* background-color: #6D9BF1; */
  margin-top: 200px;
  padding-top: 10px;
  height: 300px;
  width: 100%;
}
#footer #hr {
  margin: auto;
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

.secondrow-content > * {
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

/* Responsive styling */
@media screen and (max-width: 768px) {
    h1 {
      font-size: 30px;
    }
    #footer {
      margin-top: 150px;
      padding-top: 10px;
      height: 450px;
      width: 100%;
   }
    .social-links {
      margin-left: 40px;
  }

  .fa-2x {
    font-size: 1.3rem !important;
  }
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
  </style>
@endsection
@extends('layouts.guest')
@section('content')

    <div class="container mx-auto">
      <h1 class="text-center mt-3 mb-5 pb-3">Get in Touch</h1>
      <div class="main-body row">
        <div class="col-md-6 mb-5">
          <form class="mb-5"  id="main-form" action="https://formspree.io/eronmmer@gmail.com" method="POST">
           <div class="form-group">
              <input type="text" placeholder="Your name" class="form-control" required name="name">
           </div>
           <div class="form-group"><input class="form-control" placeholder="Your email address" type="email" required name="_replyto"></div>
            <div class="form-group">
              <textarea name="message" class="form-control" id="message" cols="30" placeholder="Enter you message" rows="10"></textarea>
            </div>
            <input class="btn btn-block send-email" type="submit" value="Send">
          </form>
        </div>
        <div mt-5 class="col-md-6 mx-auto text-center ">
            <div class="icons-row">
              <div class="secondrow-content mx-auto">
                <div class="email"> <a href="mailto:gmail@gmail.com"><i class="fas fa-2x fa-envelope-square"></i></a> wikipoli@gmail.com</div>
                <div class="phone"> <a href="tel:+2349999999999"><i class="fas fa-2x fa-phone"></i></a> +234 9999999999</div>
                <div class="location"> <a href="google.com"><i class="fas fa-2x fa-map-marker-alt"></i></a> 8th floor, HNG Towers</div>
              </div>
              <div class="social-icons">
                <a href="instagram.col-md-4"><i class="fab fa-2x fa-instagram"></i></a>
                <a href="facebook.com"><i class="fab fa-2x fa-facebook"></i></a>
               <a href="twitter.com"><i class="fab fa-2x fa-twitter"></i></a>
            
              </div>
            </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

@section('footer')
@include('layouts.footer')
@endsection
@endsection