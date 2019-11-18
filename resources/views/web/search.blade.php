@section('title')
<title>WikiPoli | Search</title>
@endsection
@extends('layouts.guest')
@section('style')
<style>
    
        /*Search results style starts here*/
        .blog-entries .blog-entry .blog-content-body {
            padding: 20px;
            border: 1px solid #efefef;
            border-top: none;
        }

        .blog-entries .blog-entry img {
            max-width: 100%;
        }

        .blog-entries .blog-entry h2 {
            font-size: 18px;
            line-height: 1.5;
        }

        .blog-entries .blog-entry p {
            font-size: 13px;
            color: gray;
        }

        .blog-entries .post-meta {
            margin-bottom: 20px;
            color: #b3b3b3;
        }

        a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #000;
            font-family: "Josefin Sans", arial, sans-serif;
        }

        .category {
            display: inline-block;
            background: #007bff;
            padding: 2px 8px;
            line-height: 1.5;
            font-size: 12px;
            border-radius: 4px;
            text-transform: uppercase;
            color: #fff !important;
            margin-right: 10px;
        }



        .blog-entries .blog-entry {
            display: block;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
            margin-bottom: 30px;
            position: relative;
            -webkit-box-shadow: 0 1px 10px -2px rgba(0, 0, 0, 0.2) !important;
            box-shadow: 0 1px 10px -2px rgba(0, 0, 0, 0.2) !important;
        }

        .blog-entries .blog-entry:hover,
        .blog-entries .blog-entry:focus {
            opacity: .7;
            top: -1px;
            -webkit-box-shadow: 0 3px 50px -2px rgba(0, 0, 0, 0.2) !important;
            box-shadow: 0 3px 50px -2px rgba(0, 0, 0, 0.2) !important;
        }



        /* Responsive styling */
        @media screen and (max-width: 768px) {
            h1 {
                font-size: 30px;
            }

        }


  .search {
        margin-top: 0.5em;
        width: 10em;
    }
</style>
@endsection
@section('content')

<section class="site-section py-sm search-results-container">
        <div class="container ">
            <div class="row search-line pt-4">
                <div class="">
                    <h3 class="mb-4 text-success">Search Results for <span id="search-keyword">"{{request('q')}}"</span></h3>
                    <!-- <h4>Results found for Keyword</h4> -->
                </div>    &nbsp;    &nbsp;    &nbsp;    &nbsp;

                 <form action="{{url('search')}}" method="get" >
                 
        <div class="d-flex justify-content-center ">

            <input type="text" class="form-control m-2" name="q" placeholder="Enter Candidate's Name">
            <button type="submit"  class="btn  search h-50" style="background-color:#1257AE;color:#fff" >Search</button>

        </div>
    </form>

            </div>
            <div>
                <ul class="nav nav-tabs d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active text-bold" data-toggle="tab" href="#profile_results">Politicians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#post_results">Posts</a>
                    </li>
                </ul>
            </div>
     
            <div class="row blog-entries tab-content">
                <!--------------------------------------->
                <!--   Profile result starts here-->
                <!--------------------------------------->
                <div class="col-md-12 col-lg-12 main-content tab-pane active" id="profile_results"><br>
                    <div class="row justify-content-between">
                    @forelse($results as $result)
                   
                        <div class="card col-lg-3 col-12 col-md-4 mb-5 blog-entry"><a href="{{url('details/'.$result->slug)}}">
                                <img class="card-img-top img-fluid" src="{{$result->file}}" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{$result->first_name }} {{$result->last_name }}</h4>

                                </div>
                            </a>
                        </div>
                   
                    @empty
                    No Record Of Politician
                    @endforelse
                        
                    </div>
                </div>
                <!--------------------------------------->
                <!--Profile result ends here-->
                <!--------------------------------------->
                <!--.................................-->
                <!--post results starts here-->
                <!--.............................................-->
                <div class="col-md-12 col-lg-12 main-content tab-pane fade" id="post_results">
                    <div class="row">

                        <!--                         Search box result starts here-->
                        <div class="col-md-12 my-1">
                              @foreach($results as $result)
                                @foreach($result->politicianpost as $read)
                                @foreach($read->post as $p)
                            <a href="{{url('posts/'.$p->slug)}}" class="blog-entry element-animate" data-animate-effect="fadeIn">   
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col  d-flex justify-content-center"><img src="{{$p->file}}" alt="{{$p->cutTitle()}}" class="img-fluid" style=""></div>
                                    <div class="blog-content-body col-md-10 col-lg-10">
                                        <div class="post-meta">
                                            <span class="category">{{$p->user->username}}</span>
                                            <span class="category mr-2">{{ date('F d, Y', strtotime($p->created_at)) }}</span> 
                                        </div>
                                        <h2>{{$p->cutTitle()}}</h2>
                                        <p>{{$p->cutBody()}}</p>
                                    </div>
                                </div>
                            </a>

                            @endforeach
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

@section('footer')
@include('layouts.footer')
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection