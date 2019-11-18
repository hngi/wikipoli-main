@section('title')
<title>WikiPoli | User Profile {{Auth::user()->username}}</title>
@endsection
@section('style')
<style>
    aside {
        /* width: 30%; */
        background: #ffffffff;
    }

    .post_cont {
        margin: 2rem;
        min-height: 200px;
    }

    .post_cont img {
        /* display: block; */
        float: left;
        height: 100%;
        margin-right: 2rem;
    }

    .post_det {
        display: flow-root;
    }

    .post_det h3 {
        font-weight: bold;
        font-size: 20px;
        color: #1257AE;
    }

    .post_det h3 span {
        font-weight: 100;
        font-size: 15px;
        color: rgba(0, 0, 0, 0.55);
    }

    aside h3 {
        font-size: bold;
        color: #1257AE;
    }

    .contact h1,
    .contact h2 {
        color: rgba(0, 0, 0, 0.55);
    }

    .contact h1 {
        font-weight: bold;
        font-size: 26px;
    }

    .contact h2 {
        font-size: 18px;
    }

    aside .fa-star {
        color: yellowgreen;
    }

    aside .whit {
        color: beige;
    }

    .edit_profile {
        display: block;
        margin-bottom: 1rem;

    }

    .log_out {
        background: #1257AE;
        color: #ffffffff !important;
    }

    #right {
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 50px 15px;
    }



    .accountSettings,
    .notificationSettings,
    .viewSettings,
    .doneButton,
    .deleteMyAccount {
        border-radius: 8px;
        margin-bottom: 20px;
        margin-left: 30px;
        padding: 10px;
        line-height: 30px;
    }

    .fa-toggle-on {
        font-size: 50px;
        color: #1257AE;
    }

    .fa-toggle-off {
        font-size: 50px;
        color: #1257AE;
        display: none;
    }

    .doneButton {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .doneButton button {
        background-color: #1257AE;
        color: #ffffff;
        height: 40px;
        width: 100px;
        padding: 5px;
        font-size: 16px;
        border: none;
        outline: none;
        cursor: pointer;
    }

    .deleteMyAccount {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        text-align: center;
    }

    .deleteMyAccount button {
        background-color: #1257AE;
        color: #ffffff;
        height: 45px;
        width: 150px;
        padding: 5px;
        font-size: 16px;
        border: none;
        outline: none;
        cursor: pointer;
    }

    #viewSettingsContent select {
        background-color: #1257AE;
        color: #ffffff;
        width: 100px;
        height: 40px;
        padding: 5px;
        font-size: 16px;
        border: none;
        outline: none;
        cursor: pointer;
    }

    #viewSettingsContent button i {
        margin-left: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    .accountSettings h3,
    .notificationSettings h3,
    .viewSettings h3 {
        margin-bottom: 20px;
        Font-weight:700;
    }

    #accountSettingsContent,
    #notificationSettingsContent,
    #viewSettingsContent {
        border: 1px solid #1257AE;
        border-radius: 8px;
        margin-left: 5px;
        padding: 10px;
    }

    .edits,
    .edit {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .edits p {
        width: 44%;
        align-self: flex-start;
    }

    #different {
        margin-left: initial;
    }

    .edit p {
        width: 65%;
    }


    .edits span {
        width: 45%;
        display: flex;
        justify-content: flex-start;
    }

    .edit span {
        display: flex;
        justify-content: flex-end;
        width: 20%;
    }

    .last {
        margin-bottom: initial;
    }

    .edits button,
    .edit button {
        height: 30px;
        width: 100px;
        padding: 5px;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
    }

    .rightInnerWrapper {
        width: 70%;
    }

    a:hover,
    button:hover {}

    @media screen and (max-width: 800px) {
        #formButton {
            width: 70px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 16px;
        }

        #main {

            flex-direction: column;

        }

        #left {
            width: 100%;
            height: 250px;
            background-color: inherit;
            border: none;

        }

        #right {
            width: 100%;
        }

        .accountSettings,
        .notificationSettings,
        .viewSettings,
        .doneButton,
        .deleteMyAccount {
            width: 100%;
        }

        .rightOutterWrapper {
            width: 100%;
        }

        .rightInnerWrapper {
            width: 75%;
        }

        #headerLogo {
            height: 80px;
        }

        #headerButton {
            border: none;
        }

        #focus {
            font-size: 25px;
        }

        #form,
        #focus,
        #main {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .rightOutterWrapper,
        .accountSettings,
        .notificationSettings,
        .viewSettings,
        .doneButton,
        .deleteMyAccount {
            margin-left: 0;
            margin-right: 0;
            padding: 15px 10px;
        }

        .rightOutterWrapper button {
            width: 60px;
            font-size: 14px;
            padding: 2px;
        }

        #viewSettingsContent select {
            width: 80px;
            font-size: 14px;
            padding: 2px;
        }
    }

    @media screen and (max-width: 768px) {

        #formButton,
        #form input {
            height: 40px;
        }

        #focus {
            padding-left: 25px;
        }

        #form {}

        #leftButton {
            font-size: 14px;
        }

        #left p {
            font-size: 18px;
        }
    }

    @media screen and (max-width: 450px) {
        #left p {
            font-size: 13px;
        }

        #name {
            font-size: 15px;
        }

        #viewSettingsContent button {
            height: 25px;
            padding: 2px;
            width: 70px;
            font-size: 12px;
        }

        .edits p {
            width: 50%;
            font-size: 14px;
        }

        .edits span {
            font-size: 14px;
            width: 40%;
        }



        #header button {
            height: 35px;
        }

        #formButton,
        #form input {
            height: 35px;
        }

        .rightInnerWrapper p {
            width: 85%;
        }

        .doneButton button {
            height: 30px;
            width: 80px;
            padding: 2px;
            font-size: 13px;

        }

        .deleteMyAccount button {
            height: 35px;
            width: 130px;
            font-size: 13px;
            border-radius:0px ;
        }

        #left {
            height: 220px;
        }

        #right {
            padding: 25px 15px;
        }

    }

</style>
@endsection
@extends('layouts.guest')
@section('content')

<div class="container">
    <div class="row">
        <aside class=" justify-content-center text-center col-12 col-md-3">
            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class=" justify-content-center" alt="" style="width:150px; height:150px; border-radius:50%; display:block; margin-left:auto; margin-right:auto;">
            <h3 class="text-center">{{ Auth::user()->full_name }}</h3>
            <p>Human activist</p>
            <span class="edit_profile"> <a href="{{url('profile')}}">Edit Profile</a></span>
                <span class="edit_profile"> <a href="{{ url('/changePassword') }}">Change Password</a></span>
                
                            <span> &nbsp;&nbsp;|&nbsp;&nbsp; {{count($posts)}} post(s) </span>
                            <hr id="hr">


                            <div class="contact">
                                <h1>Contact Information</h1>
                                <h2>Email Address:</h2>
                                <p><i class="fa fa-messages"></i> {{ Auth::user()->email }}</p>

                                <h2>Phone: </h2>
                                <p><i class="fa fa-phone"></i> {{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->phone: '' }}</p>

                                <h2>Address</h2>
                                <p>{{ isset(Auth::user()->userProfile) ? Auth::user()->userProfile->address: '' }}</p>

                            </div>

                            </aside>
                            <section class="col-12 col-sm-9">
                                <div id="right">
                                    <div class="accountSettings">
                                        <h3>Account Settings</h3>

                                        <div id="accountSettingsContent">
                                            <div class="edits">
                                                <form enctype="multipart/form-data" action="/profile" method="post">
                                                    <b>Change Profile Picture</b>
                                                    <input type="file" name="avatar">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <span><input type="submit" value="Update Avatar" class="btn btn-primary btn-sm"></span>                                        
                                                </form>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="notificationSettings">
                                        <h3>Notification Settings</h3>
                                        <div id="notificationSettingsContent">
                                            <div class="edit">
                                                <p>If someone likes a post I contributed to</p>
                                                <span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i
                                                        onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
                                            </div>
                                            <div class="edit">
                                                <p>if someone comments on post I contributed to</p>
                                                <span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i
                                                        onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
                                            </div>
                                            <div class="edit">
                                                <p>If someone comments on my post</p>
                                                <span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i
                                                        onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
                                            </div>
                                            <div class="edit">
                                                <p>If someone likes my post</p>
                                                <span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i
                                                        onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
                                            </div>
                                            <div class="edit last">
                                                <p>Recent post on politician</p>
                                                <span class="toggle"><i onclick="toggleOn(this)" class="fa fa-toggle-on"></i><i
                                                        onclick="toggleOff(this)" class="fa fa-toggle-off"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doneButton">
                                        <button type="click" class="btn btn-primary btn-lg">Done</button>
                                    </div>
                                    <div class="deleteMyAccount">
                                        <button type="click" class="btn btn-primary btn-lg">Delete my account</button>
                                    </div>
                                    <!--<div class="rightOutterWrapper">
                                            <div class="rightInnerWrapper">
                                                <h4>Font Size</h4>
                                                <p>Adjust font size for better readability</p>
                                            </div>
                                            <button type="click">Regular</button>
                                        </div>-->
                                </div>

                            </section>
                            </div>


                            </div>
                            @section('script')
                            <script>
                                function toggleOn(obj) {
                                    obj.style.display = "none";
                                    obj.nextElementSibling.style.display = "inline";
                                }

                                function toggleOff(obj) {
                                    obj.style.display = "none";
                                    obj.previousElementSibling.style.display = "inline";
                                }
                            </script>

                            @endsection


                            @section('footer')
                            @include('layouts.footer')
                            @endsection
                            @endsection