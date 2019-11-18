
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>WikiPoli | Forgot Password</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{ asset('css/styles/forgotpassword.css') }}"/>
 <link rel="icon" type="img/png" href="images/favicon.png">
 <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
 <style>
    body {
 font-family: 'Lato';
}
 
.heading {
  font-size: 2.25rem;
  margin-left: 25px;
  margin-bottom: 20px;
  font-weight: 700;
}

#forgot-form {
  width: 500px;
  margin-left: auto;
  margin-right: auto;
}

#forgot-form #forgotemail {
  /* border: 1px solid #213dcd; */
  height: 55px;
  margin-bottom: 25px;
  border-radius: 0;
}

.btn-blue {
  background-color: #6d9bf1;
  border: 1px solid #213dcd;
}

.btn-primary:hover {
  background-color: rgb(105, 145, 219) !important;
}

@media (max-width: 585px) {
  .form-container {
    width: 99%;
    margin-left: auto;
    margin-right: auto;
  }

  #forgot-form {
    width: 99%;
  }
}

@media (max-width: 450px) {
  .heading {
    font-size: 35px;
  }
}
 
 </style>
</head>

<body>
 <div class="container mx-auto text-center mt-5 form-container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <div>
   <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1571736654/wikiPoli5_8_yrgvwn.png" alt=""
    class="img-fluid">
  </div>

  <h1 class="display-4 heading">Forgot your Password?</h1>
  <p>Please enter the email address registered on your account.</p>

  <form method="post" id="forgot-form" action="{{ route('password.email') }}">
    @csrf
   <div class="form-group mx-auto mt-3">

    <input type="text" name="email" id="forgotemail" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Your Email Address" required autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    <input type="submit" name="submit" value="Send Password Reset Link" class="btn btn-lg btn-primary btn-blue btn-block mt-3">

   </div>
  </form>
 </div>
</body>


</html>



<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

