@section('title')
<title>WikiPoli | About Us</title>
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

        a.btn.btn-primary {
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

        #footer {
            font-family: Nunito, segoe UI, sans-serif;
            margin: 1rem auto;
            width: 100%;
        }

        #footer #hr {
            width: 80%;
            border: 0.5px solid rgba(0, 0, 0, 0.08);
        }

        #footer #nav-flex {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin: 2rem auto;
        }

        #footer #nav-flex .link-group {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        #footer .link-group .group-desc {
            color: #1257AE;
            font-weight: bolder;
            margin: 1rem 0;
        }

        #footer .link-group a {
            text-decoration: none;
            color: rgba(0, 0, 0, 0.8);
            margin: 0.15rem 0;
            transition: 0.4s ease-out;
        }

        #footer .link-group a:hover {
            color: rgb(100, 100, 200);
        }

        #footer #socials {
            display: flex;
            flex-direction: row;
            margin: 0px auto;
        }

        #footer #socials .social-link {
            margin-right: 1rem;
            border-radius: 100%;
            height: 30px;
            border: 2px solid white;
            transition: 0.4s ease-out;
        }

        #footer #socials .social-link:hover {
            border: 2px solid skyblue;
        }


        @media (max-width: 860px) {
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

        @media (max-width: 860px) {
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

        span {
            color: #1257AE;
            font-weight: 700;
        }

        h5.text-justify {
            font-weight: bold;
            color: #1257AE;
            font-size: 18px ;
        }

        p.text-justify {
            font-weight: 600;
            font-size: 15px;
            line-height: 2em;
        }

        h6 {
            font-weight: bold;
            font-size: 17px;
            color: #1257AE;
        }

        p a {
            color: #1257ae;
            text-decoration: none;
        }

        p a:hover {
            color: #6D9BF1;
            text-decoration: none;
        }

        li.text-justify{
            font-weight: bold;
        }

        li a {
        color: #1257ae;
        text-decoration: none;
        }

        li a:hover {
        color: #6D9BF1;
        text-decoration: none;
        }

    </style>
@endsection
@extends('layouts.guest')
@section('content')
<section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h4 class="display-6">Privacy Policy</h4>
            </div>
        </div>
    </section>
    <section>
        ` <div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-offset-12">
                    <h5 class="text-justify"><span>Privacy Policy</span></h5>

                    <br />
                    <h6 class="text-justify">Welcome to WikiPoli</h6><br />
                    <p class="text-justify">
                        <span>WikiPoli</span> ("us", "we", or "our") operates the <a
                            href="https://wikipoli.gq/">Website</a> (the "Service").<br /><br />

                        This page informs you of our policies regarding the collection, use, and disclosure of personal
                        data when you use our Service and the choices you have associated with that data. <br /><br />

                        We use your data to provide and improve the Service. By using the Service, you agree to the
                        collection and use of information in accordance with this policy. Unless otherwise defined in
                        this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms
                        and Conditions, accessible from https://wikipoli.gq/</p>
                    <br />
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <h5 class="text-justify">Information Collection And Use</h5><br />
                    <p class="text-justify">We collect several different types of information for various purposes to
                        provide and improve our Service to you.</p><br />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-justify">Types of Data Collected</h5><br />
                    <h6 class="text-justify">Personal Data</h6><br /><br />
                    <p class="text-justify">While using our Service, we may ask you to provide us with certain
                        personally identifiable information that can be used to contact or identify you ("Personal
                        Data"). Personally identifiable information may include, but is not limited to: </p><br />

                        <ul>
                            <li class="text-justify">Email Address</li>
                            <li class="text-justify">First Name and Last Name</li>
                            <li class="text-justify">Phone Number</li>
                            <li class="text-justify">Phone Number</li>
                            <li class="text-justify">Address, State, Province, ZIP/Postal Code, City</li>
                            <li class="text-justify">Cookies and Usage Data</li>
                        </ul><br/>

                    <h6 class="text-justify">Data Usage</h6><br /><br />
                    <p class="text-justify">We may also collect information how the Service is accessed and used
                            ("Usage Data"). This Usage Data may include information such as your computer's Internet
                            Protocol address (e.g. IP address), browser type, browser version, the pages of our Service
                            that you visit, the time and date of your visit, the time spent on those pages, unique
                            device identifiers and other diagnostic data.</p><br /><br />
                    
                    <h6 class="text-justify">Tracking & Cookies Data</h6><br /><br />
                    <p class="text-justify">We use cookies and similar tracking technologies to track the activity on
                    Our Service and hold certain information.<br /><br />
                    Cookies are files with small amount of data which may include an anonymous unique identifier.
                    Cookies are sent to your browser from a website and stored on your device. Tracking technologies
                    also used are beacons, tags, and scripts to collect and track information and to improve and analyze
                    our Service.<br /><br />

                    You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.
                    However, if you do not accept cookies, you may not be able to use some portions of our
                    Service.<br /><br />

                    Examples of Cookies we use: </p><br />

                    <ul>
                        <li class="text-justify"><b>Session Cookies.</b> We use Session Cookies to operate our Service.</li>
                        <li class="text-justify"><b>Preference Cookies.</b> We use Preference Cookies to remember your preferences and various settings.</li>
                        <li class="text-justify"><b>Security Cookies.</b> We use Security Cookies for security purposes.</li>
                    </ul><br /><br />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-justify">Use of Data</h5><br /><br />
                    <p class="text-justify">WikiPoli uses the collected data for various purposes:</p><br />
                         <ul>
                             <li class="text-justify">To provide and maintain the Service</li>
                             <li class="text-justify">To notify you about changes to our Service</li>
                             <li class="text-justify">To allow you to participate in interactive features of our Service when you choose to do so</li>
                             <li class="text-justify">To provide customer care and support</li>
                             <li class="text-justify">To provide analysis or valuable information so that we can improve the Service</li>
                             <li class="text-justify">To monitor the usage of the Service</li>
                             <li class="text-justify">To detect, prevent and address technical issues</li>    
                         </ul><br /><br />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-justify">Transfer Of Data</h5><br /><br />
                    <p class="text-justify">Your information, including Personal Data, may be transferred to — and
                        maintained on — computers located outside of your state, province, country or other governmental
                        jurisdiction where the data protection laws may differ than those from your
                        jurisdiction.<br /><br />

                        If you are located outside Nigeria and choose to provide information to us, please note that we
                        transfer the data, including Personal Data, to Nigeria and process it there.<br /><br />

                        Your consent to this Privacy Policy followed by your submission of such information represents
                        your agreement to that transfer.<br /><br />

                        WikiPoli will take all steps reasonably necessary to ensure that your data is treated securely
                        and in accordance with this Privacy Policy and no transfer of your Personal Data will take place
                        to an organization or a country unless there are adequate controls in place including the
                        security of your data and other personal information.</p><br /><br />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-justify">Security Of Data</h5> <br /><br />
                    <p class="text-justify">The security of your data is important to us, but remember that no method of
                        transmission over the Internet, or method of electronic storage is 100% secure. While we strive
                        to use commercially acceptable means to protect your Personal Data, we cannot guarantee its
                        absolute security.</p><br /><br />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-justify">Service Providers</h6><br /><br />
                    <p class="text-justify">We may employ third party companies and individuals to facilitate our
                        Service ("Service Providers"), to provide the Service on our behalf, to perform Service-related
                        services or to assist us in analyzing how our Service is used.<br /><br />

                        These third parties have access to your Personal Data only to perform these tasks on our behalf
                        and are obligated not to disclose or use it for any other purpose.</p><br /><br />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-justify">Links To Other Sites</h6><br /><br />
                    <p class="text-justify">Our Service may contain links to other sites that are not operated by us. If
                        you click on a third party link, you will be directed to that third party's site. We strongly
                        advise you to review the Privacy Policy of every site you visit.<br /> <br />

                        We have no control over and assume no responsibility for the content, privacy policies or
                        practices of any third party sites or services.</p><br /> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-justify">Children's Privacy</h6><br /><br />
                    <p class="text-justify">Our Service does not address anyone under the age of 18
                        ("Children").<br /><br />

                        We do not knowingly collect personally identifiable information from anyone under the age of 18.
                        If you are a parent or guardian and you are aware that your Children has provided us with
                        Personal Data, please contact us. If we become aware that we have collected Personal Data from
                        children without verification of parental consent, we take steps to remove that information from
                        our servers.</p><br /><br />
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-justify">Changes To This Privacy Policy</h6><br /><br />
                    <p class="text-justify">We may update our Privacy Policy from time to time. We will notify you of
                        any changes by posting the new Privacy Policy on this page.<br /><br />

                        We will let you know via email and/or a prominent notice on our Service, prior to the change
                        becoming effective and update the "effective date" at the top of this Privacy
                        Policy.<br /><br />

                        You are advised to review this Privacy Policy periodically for any changes. Changes to this
                        Privacy Policy are effective when they are posted on this page.</p><br /><br />
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-justify">Contact Us</h6><br /><br />
                    <p class="text-justify">If you have any questions about this Privacy Policy, <b>Please Contact Us:</b></p><br />

                    <ul>
                        <li class="text-justify"><b>By email:</b> contact@wikipoli.gq</li>
                        <li class="text-justify">By visiting this page on our website:
                            <a href="https://wikipoli.gq/contact">https://wikipoli.gq/contact</a></li>
                    </ul><br /><br />

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p class="text-justify">These <span>Privacy Policy</span> went into effect on November 3rd, 2019.</p>
                    <br />
                </div>
            </div>

        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('footer')
@include('layouts.footer')
@endsection
@endsection