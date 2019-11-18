@section('title')
<title>WikiPoli | User Profile {{Auth::user()->username}}</title>
@endsection
@section('style')
<style>
  
    .profile-input input, .profile-input select, .profile-input textarea{
        width: 50%!important;
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
    }



    @media (max-width: 860px) {
        .profile-input input, 
        .profile-input select, 
        .profile-input textarea{
            width:100%!important;
        }

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

    .posts a {
        text-decoration: none;
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
</style>
@endsection
@extends('layouts.guest')
@section('content')

<div class="container mb-5">
    <h3>Edit User Profile</h3>
    @if(session()->has('message.alert'))
    <div class="text-center">
        <button class=" alert alert-{{ session('message.alert') }}"> 
            {!! session('message.content') !!}
        </button>
    </div>
    @endif
      <form action="{{route('edit-profile')}}" method="POST">
                        @csrf
        <!--      User info section to edit user info-->
        <div class="card my-4">
            <div class="card-header font-weight-bold">User Info</div>
            <div class="card-header">
                <div class="form-inline mx-auto">
                    <label for="firstName" class="col-sm-3 col-lg-2 control-label font-weight-bold">First Name</label>
                    <div class=" col-sm-9 col-lg-10 profile-input">
                        <input type="text" placeholder="First Name" name="first_name" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->first_name: '' }}" class="form-control  border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="lastName" class="col-sm-3 col-lg-2 control-label font-weight-bold">Last Name</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="text"  name="last_name" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->last_name: '' }}" id="lastName" placeholder="Last Name" class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="birthDate" class="col-sm-3 col-lg-2 control-label font-weight-bold">Date of Birth</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="date"  name="dob" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->dob: '' }}"  class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="birthDate" class="col-sm-3 col-lg-2 control-label font-weight-bold">Gender</label>
                    <div class="col-sm-9 col-lg-10 form-inline">
                        <label for="male" class="mr-1">Male</label> <input id="male" type="radio" name="gender" value="Male" class="mr-4" @if(empty(Auth::user()->userProfile->gender)) @else {{Auth::user()->userProfile->gender == 'Male' ? 'checked' : '' }} @endif>
                        <label for="female" class="mr-1">Female</label> <input type="radio" name="gender" value="Female" @if(empty(Auth::user()->userProfile->gender)) @else {{Auth::user()->userProfile->gender == 'Female' ? 'checked' : '' }} @endif>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="state" class="col-sm-3 col-lg-2 control-label font-weight-bold">State</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <select class="form-control border border-primary" name="state" id="state" autofocus>
                            <option disabled selected>--Select State--</option>
                            <option value="Abia" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Abia' ? 'selected' : '' }} @endif>Abia</option>
                            <option value="Adamawa" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Adamawa' ? 'selected' : '' }} @endif>Adamawa</option>
                            <option value="Akwa Ibom" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Akwa Ibom' ? 'selected' : '' }} @endif>Akwa Ibom</option>
                            <option value="Anambra" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Anambra' ? 'selected' : '' }} @endif>Anambra</option>
                            <option value="Bauchi" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Bauchi' ? 'selected' : '' }} @endif>Bauchi</option>
                            <option value="Bayelsa" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Bayelsa' ? 'selected' : '' }} @endif>Bayelsa</option>
                            <option value="Benue" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Benue' ? 'selected' : '' }} @endif>Benue</option>
                            <option value="Borno" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Borno' ? 'selected' : '' }} @endif>Borno</option>
                            <option value="Cross River" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Cross River' ? 'selected' : '' }} @endif>Cross River</option>
                            <option value="Delta" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Delta' ? 'selected' : '' }} @endif>Delta</option>
                            <option value="Ebonyi" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Ebonyi' ? 'selected' : '' }} @endif>Ebonyi</option>
                            <option value="Edo" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Edo' ? 'selected' : '' }} @endif>Edo</option>
                            <option value="Ekiti" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Ekiti' ? 'selected' : '' }} @endif>Ekiti</option>
                            <option value="Enugu" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Enugu' ? 'selected' : '' }} @endif>Enugu</option>
                            <option value="FCT" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'FCT' ? 'selected' : '' }} @endif>Federal Capital Territory</option>
                            <option value="Gombe" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Gombe' ? 'selected' : '' }} @endif>Gombe</option>
                            <option value="Imo" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Imo' ? 'selected' : '' }} @endif>Imo</option>
                            <option value="Jigawa" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Jigawa' ? 'selected' : '' }} @endif>Jigawa</option>
                            <option value="Kaduna" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Kaduna' ? 'selected' : '' }} @endif>Kaduna</option>
                            <option value="Kano" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Kano' ? 'selected' : '' }} @endif>Kano</option>
                            <option value="Katsina" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Katsina' ? 'selected' : '' }} @endif>Katsina</option>
                            <option value="Kebbi" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Kebbi' ? 'selected' : '' }} @endif>Kebbi</option>
                            <option value="Kogi" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Kogi' ? 'selected' : '' }} @endif>Kogi</option>
                            <option value="Kwara" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Kwara' ? 'selected' : '' }} @endif>Kwara</option>
                            <option value="Lagos" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Lagos' ? 'selected' : '' }} @endif>Lagos</option>
                            <option value="Nasarawa" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Nasarawa' ? 'selected' : '' }} @endif>Nasarawa</option>
                            <option value="Niger" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Niger' ? 'selected' : '' }} @endif>Niger</option>
                            <option value="Ogun" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Ogun' ? 'selected' : '' }} @endif>Ogun</option>
                            <option value="Ondo" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Ondo' ? 'selected' : '' }} @endif>Ondo</option>
                            <option value="Osun" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Osun' ? 'selected' : '' }} @endif>Osun</option>
                            <option value="Oyo" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Oyo' ? 'selected' : '' }} @endif>Oyo</option>
                            <option value="Plateau" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Plateau' ? 'selected' : '' }} @endif>Plateau</option>
                            <option value="Rivers" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Rivers' ? 'selected' : '' }} @endif>Rivers</option>
                            <option value="Sokoto" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Sokoto' ? 'selected' : '' }} @endif>Sokoto</option>
                            <option value="Taraba" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Taraba' ? 'selected' : '' }} @endif>Taraba</option>
                            <option value="Yobe" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Yobe' ? 'selected' : '' }} @endif>Yobe</option>
                            <option value="Zamfara" @if(empty(Auth::user()->userProfile->state)) @else {{Auth::user()->userProfile->state == 'Zamfara' ? 'selected' : '' }} @endif>Zamfara</option>
                        </select>
                    </div>
                </div>


            </div>

        </div>

        <!--      User info section to edit user info-->
        <div class="card my-4">
            <div class="card-header font-weight-bold">Contact Info</div>
            <div class="card-header">
                <div class="form-inline my-2">
                    <label for="address" class="col-sm-3 col-lg-2 control-label font-weight-bold">Contact Address</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="text"  name="address" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->address: '' }}" id="address" placeholder="Contact Address" class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="email" class="col-sm-3 col-lg-2 control-label font-weight-bold">Email</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="email"  name="email" value="{{Auth::user()->email}}" id="email" placeholder="example@wikipoli.com" class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="phone" class="col-sm-3 col-lg-2 control-label font-weight-bold">Phone</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="number"   name="phone" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->phone: '' }}" id="phone" placeholder="2348100000000" class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="facebook" class="col-sm-3 col-lg-2 control-label font-weight-bold">Facebook URL</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="text" id="facebook"  name="facebook_url" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->facebook_url: '' }}" placeholder="Facebook URL" class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="twitter" class="col-sm-3 col-lg-2 control-label font-weight-bold">Twitter URL</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="text" id="twitter" placeholder="Twitter URL"   name="twitter_url" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->twitter_url: '' }}"class="form-control border border-primary" autofocus>
                    </div>
                </div>
                <div class="form-inline my-2">
                    <label for="linkedin" class="col-sm-3 col-lg-2 control-label font-weight-bold">Linkedin URL</label>
                    <div class="col-sm-9 col-lg-10 profile-input">
                        <input type="text" id="linkedin" placeholder="Linkedin URL"  name="linkedin_url" value="{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->linkedin_url: '' }}" class="form-control border border-primary" autofocus>
                    </div>
                </div>
            </div>

        </div>

        <!--
                    <div class="card my-4">
                        <div class="card-header font-weight-bold">Biography</div>
                        <div class="card-header form-inline">
                           <label for="" class="col-sm-3 col-lg-2 control-label font-weight-bold"></label>
                            <div class="form-group my-2 col-sm-9 col-lg-10 profile-input">
                                <textarea class="form-control border border-primary" name="biography" rows="5" id="biography" placeholder=" Your Biography" autofocus></textarea>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="card my-4">
                        <div class="card-header font-weight-bold">Education History</div>
                        <div class="card-header form-inline">
                           <label for="" class="col-sm-3 col-lg-2 control-label font-weight-bold"></label>
                            <div class="form-group my-2 col-sm-9 col-lg-10 profile-input">
                                <textarea class="form-control border border-primary" name="education" rows="5" id="education" placeholder="full detail of your Education history" autofocus></textarea>
                            </div>
                        </div>
        
                    </div>
                    <div class="card my-4">
                        <div class="card-header font-weight-bold">Career History</div>
                        <div class="card-header form-inline">
                           <label for="" class="col-sm-3 col-lg-2 control-label font-weight-bold"></label>
                            <div class="form-group my-2 col-sm-9 col-lg-10 profile-input">
                                <textarea class="form-control border border-primary" name="career" rows="5" id="career" placeholder="Your Career Journey" autofocus></textarea>
                            </div>
                        </div>
        
                    </div>
                    <div class="card my-4">
                        <div class="card-header font-weight-bold">Political History</div>
                        <div class="card-header form-inline">
                           <label for="" class="col-sm-3 col-lg-2 control-label font-weight-bold"></label>
                            <div class="form-group my-2 col-sm-9 col-lg-10 profile-input">
                                <textarea class="form-control border border-primary" name="political" rows="5" id="political" placeholder="Your Political History" autofocus></textarea>
                            </div>
                        </div>
        
                    </div>
        -->
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary font-weight-bold px-5" value="Save">
        </div>
    </form>
</div>


@section('footer')
@include('layouts.footer')
@endsection
@endsection