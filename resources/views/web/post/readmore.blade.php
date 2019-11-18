@section('title')
<title>{{$post->title}}</title>
<meta property="og:type" content="article" />
<meta  itemprop="description" name="description" content="{{$post->cutBody()}}">
<meta itemprop="keywords" name="keywords" content="{{$post->title}}"/>
<meta  itemprop="author" name="author" content="Wikipoli">
<meta  property="og:type" content="Wikipoli"/>
<meta itemprop="title" property="og:title" content="{{$post->title}}"/>
<meta  property="og:title" content="{{$post->title}}"/>
<meta itemprop="url" property="og:url" content="{{url('posts/'.$post->slug)}}"/>
<meta  property="article:publisher" content="Wikipoli"/>
<meta  property="article:section" content="Article"/>
<meta itemprop="datePublished" property="article:published_time" content="{{$post->created_at}}"/>
<meta itemprop="dateModified" property="article:modified_time" content="{{$post->updated_at}}"/>
<meta  property="fb:app_id" content="1233444" />
<meta itemprop="image" property="og:image" content="{{url($post->file) }}" />
<meta itemprop="image" property="og:image:secure_url" content="{{url($post->file) }}" />
<meta itemprop="width" property="og:image:width" content="500" />
<meta itemprop="height" property="og:image:height" content="500" />
<meta property="og:image:alt" content="Wikipoli" />
<meta name="twitter:card" content="summary_large_image" />
<meta itemprop="description" name="twitter:description" content="{{$post->cutBody()}}">
<meta itemprop="keywords" name="keywords" content="{{$post->title}}" />
<meta  name="twitter:site" content="@wikipoli" />

@endsection
@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<style>
    .toast {
        opacity: 0.9!important;
    }



    /* Beginning */

    .img-fluid {
        object-fit: cover;
        height: 19em;
        width: 100%;
    }

    .numb {
        margin-left: -10px;
        font-size: 0.7em;
    }

    .lead a {
        text-decoration: none;
    }

    .share {
        font-size: 2em;
        color: #1257AE;
    }

    .react {
        font-size: 1.5rem;
        color: #1257AE;
    }

    .comment-btn {
        background-color: #1257AE;
        color: #ffffff;
    }

    .main-text {
        font-size: 1.1em;
    }

    .comment-div {
        display: flex;
        margin-top: 3em;
    }

    .icon {
        font-size: 5em;
        margin-left: 16px;
    }

    .text {
        margin-top: 1em;
        align-self: center;
    }
    .text a {
        text-decoration: none;
    }

    .sub-text {
        /* display: flex; */
        overflow-wrap: break-word;
    }

    .follow {
        font-size: 1.1em;
    }


    /* Reducing On Mobile */
    @media only screen and (max-width: 425px) {
        .icon {
            font-size: 3em;
            align-self: center;
        }

        .text {
            margin-top: auto;
            overflow: hidden;
        }

        .sub-text h4 {
            font-size: 1.2em;
        }
        .sub-text span {
            font-size: 0.8em;
        }

        .follow {
            font-size: 0.9em;
            margin-top: 0.1em;
            display: flex;
        }
    }

</style>
@endsection
@extends('layouts.guest')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="{{url($post->file) }}"  alt="{{$post->title}}"  class="img-fluid" >
        </div>

        <div class="col-12 col-md-6 m-auto">
            <h3 class="h1">{{$post->title}}</h3>
            <h5 class="lead">Posted  on {{ date('F d, Y', strtotime($post->created_at)) }}</h5>
            <h5 class="lead">Published by <a href="#" data-toggle="modal" data-target="#userInfoModal"><img src="/uploads/avatars/{{$post->user->avatar}}" class=" justify-content-center" alt="" style="width:30px; height:30px; border-radius:20%; margin:5px;"> {{$post->user->username}}</a></h5>
            <a href="#" onclick="window.open('http://twitter.com/share?text={{$post->title}} -&amp; url={{url('posts/'.$post->slug)}}', 'twitterShare', 'width=626,height=436');
                return false;" title="Tweet This Post"  class="share"><i class="fa fa-twitter-square "></i></a>
            <a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u={{url('posts/'.$post->slug)}} &amp; t={{$post->title}}', 'facebookShare', 'width=626,height=436');
                return false;" title="Share on Facebook"  class="share ml-3"><i class="fa fa-facebook-square"></i></a>
        </div>
    </div>

    <div class="col-12 mt-4 main-text">
        {!! $post->body !!}
    </div>

    <div class="container">
        <a href="#" class="react"><i class="fa fa-thumbs-up pr-3 p-like" aria-hidden="true"></i><span class="numb">
                <span class='u-updatelike'> {{App\Http\Controllers\Converter::number_format_short(intval($post->likeunlike->where('type', 'like')->count()))}}</span>

            </span></a>
        <a href="#" class="react"><i class="fa fa-thumbs-down ml-3 pr-3 p-unlike" aria-hidden="true"></i><span class="numb">
                <span class='u-updateunlike'> {{App\Http\Controllers\Converter::number_format_short(intval($post->likeunlike->where('type', 'unlike')->count()))}}</span>


            </span></a>
        @Auth
        <a href="#" class="react" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-exclamation-circle ml-4 text-danger" aria-hidden="true"></i></a>
       @endAuth
        <p class="text-primary mt-3 count">{{count($post->comments)}} @if(count($post->comments) < 2) Comment @else Comments @endif</p>
    </div>
    @Auth
    <form id="comment_post" method="post">
        <input  type="hidden" id="post_id" value="{{$post->id}}">

        <div class="form-group mt-4">
            <textarea class="form-control"  name="comment" id="comment"  rows="3" placeholder="Type your comment..."></textarea>
            <button type="submit" class="btn btn-lg mt-3 comment-btn">Comment</button>
            <div class="text-center">
                <span id="wait" style="display:none"> <img src="{{asset('images/reload.gif')}}" width="80" height="80" ></span>
            </div>
        </div>


    </form>
    @else
    <br/>
    <div class="alert alert-danger"><h4>Comments disabled! You must signin before you can comment, click the button below to login<br><br> <a href="{{url('login')}}" class="btn btn-primary">Login</a></h4></div>

    @endAuth

    <span class="countcomments">
        @forelse($post->comments as $comment)
        <div class="container">
            <div class="comment-div">
                <div class="icon">
                    <a href="#" data-toggle="modal" data-target="#commentInfoModal-{{$comment->user->id}}">
                        <img src="/uploads/avatars/{{ $comment->user->avatar }}" style="width:70px; height:70px; border-radius:5%; margin:5px;">
                    </a>
                </div>
                <div class="ml-5 text">
                    <div class="sub-text">
                        <a href="#" data-toggle="modal" data-target="#commentInfoModal-{{$comment->user->id}}"><h4 class="text-primary">{{$comment->user->username}}</h4></a>
                        <span class="ml-2">{{ date('F d, Y', strtotime($comment->created_at)) }}</span>
                    </div>
                    <p class="follow">  {!! nl2br($comment->comment) !!}</p>
                </div>
            </div>
            <hr>

        </div>

        <!--Commenter Info Modal-->
        <div class="modal fade" id="commentInfoModal-{{$comment->user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12" style="display:block; margin-left:auto; margin-right:auto;">
                        <img src="/uploads/avatars/{{$comment->user->avatar}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                </div>
                <br>
                <br>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" >
                    <h4 class="text-center">Name: {{$comment->user->username}}</h4> 
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 class="text-center">Email: {{$comment->user->email}}</h4> 
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
                
            </div>
            </div>
        </div>
        </div>

        @empty
        <div class="text-center">
            No Reaction's Yet
        </div>
        @endforelse
    </span>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Why are you reporting this post?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="takedown" method="post">
                     <input  type="hidden" id="post_id" value="{{$post->id}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input  value="Spamming" type="checkbox"  aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <p class="form-control" aria-label="Text input with checkbox">Spamming</p>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" value="Contains hate speech" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <p class="form-control" aria-label="Text input with checkbox">Contains hate speech</p>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" value="Post is Tribalistic" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <p class="form-control" aria-label="Text input with checkbox">Post is Tribalistic</p>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" value="Contains fake or unverified content" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <p class="form-control" aria-label="Text input with checkbox">Contains fake or unverified content</p>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger take">Report</button>
                    <span id="wait-takedown" style="display:none"> <img src="{{asset('images/reload.gif')}}" width="80" height="80" ></span>
            </div>
        </div>
        </form>
    </div>
</div>
<!--User Info Modal-->
<div class="modal fade" id="userInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12" style="display:block; margin-left:auto; margin-right:auto;">
                <img src="/uploads/avatars/{{$post->user->avatar}}" class="img-fluid img-thumbnail" alt="">
            </div>
        </div>
        <br>
        <br>
        <hr>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <h4 class="text-center">Name:{{$post->user->username}}</h4> 
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <h4 class="text-center">Email:{{$post->user->email}}</h4> 
            </div>
        </div>
       
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<form id="like" method="POST">
    <input type="hidden" name="actions"  value="like">
    <input type='hidden' name='slug' value="{{$post->slug}}" />
    <input type='hidden' name='post_id' value="{{$post->id}}" />
</form>
<form id="unlike" method="POST">
    <input type="hidden" name="actions"  value="unlike">
    <input type='hidden' name='slug' value="{{$post->slug}}" />
    <input type='hidden' name='post_id' value="{{$post->id}}" />
</form>
<form id="love" method="POST">
    <input type="hidden" name="actions"  value="unlike">
    <input type='hidden' name='slug' value="{{$post->slug}}" />
    <input type='hidden' name='post_id' value="{{$post->id}}" />
</form>

@section('footer')

@include('layouts.footer')
@endsection

@section('script')
<script>

    $('#comment_post').submit(function (event) {
    $(".mt-3").hide();
    $("#wait").show();
    event.preventDefault();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    jQuery.ajax({
    url: "{{url('post-comments')}}",
            type: 'POST',
            data: {
            comment: jQuery('#comment').val(),
                    post_id: jQuery('#post_id').val()

            },
            success: function (data) {
            if (data.status === 401) {
            jQuery.each(data.message, function (key, value) {
            var message = ('' + value + '');
            toastr.error(message, {timeOut: 50000});
            $(".mt-3").show();
            $("#wait").hide();
            });
            return false;
            }
            if (data.status === 200) {
            var message = data.message;
            toastr.success(message, {timeOut: 50000});
            $(".mt-3").show();
            $("#wait").hide();
            $(".count").load(" .count");
            $(".countcomments").load(" .countcomments");
            return false;
            }

            if (data.status === 422) {
            var message = data.message;
            toastr.info(message, {timeOut: 50000});
            $(".mt-3").show();
            $("#wait").hide();
            /* $(".results-wrapper").load(" .results-wrapper");*/
            $(".count").load(" .count");
            $(".countcomments").load(" .countcomments");
            return false;
            }
            }

    });
    });</script>
<script>

    $('#takedown').submit(function (event) {
        var myCheckboxes = new Array();
    $("input:checked").each(function () {
        myCheckboxes.push($(this).val());
    });
    $(".take").hide();
    $("#wait-takedown").show();
    event.preventDefault();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    jQuery.ajax({
    url: "{{url('post-takedown')}}",
            type: 'POST',
            data: {
            reason: myCheckboxes,
                    post_id: jQuery('#post_id').val()

            },
            success: function (data) {
            if (data.status === 401) {
            jQuery.each(data.message, function (key, value) {
            var message = ('' + value + '');
            toastr.error(message, {timeOut: 50000});
            $(".take").show();
            $("#wait-takedown").hide();
            });
            return false;
            }
            if (data.status === 200) {
            var message = data.message;
            toastr.success(message, {timeOut: 50000});
            $(".take").show();
            $("#wait-takedown").hide();
               $(".modal").hide();
              $(".modal").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            return false;
            }

            if (data.status === 422) {
            var message = data.message;
            toastr.info(message, {timeOut: 50000});
            $(".take").show();
            $("#wait-takedown").hide();
            /* $(".results-wrapper").load(" .results-wrapper");*/
            $(".count").load(" .count");
            $(".countcomments").load(" .countcomments");
            return false;
            }
            }

    });
    });</script>

<script>

    jQuery(document).on('click', '.p-like', function(event){
    var formData = jQuery("#like").serialize();
    event.preventDefault();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    jQuery.ajax({
    url: "{{url('/like-post')}}",
            type: 'POST',
            data:  formData,
            success: function (data) {
            if (data.status == 200) {

            $(".u-updatelike").load(" .u-updatelike");
            return false;
            }
            if (data.status === 422) {
            var message = data.message;
            toastr.error(message, {timeOut: 50000});
            return false;
            }

            }

    });
    });</script> 
<script>

    jQuery(document).on('click', '.p-unlike', function(event){
    var formData = jQuery("#unlike").serialize();
    event.preventDefault();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    jQuery.ajax({
    url: "{{url('/like-post')}}",
            type: 'POST',
            data:  formData,
            success: function (data) {
            if (data.status == 200) {

            $(".u-updateunlike").load(" .u-updateunlike");
            return false;
            }
            if (data.status === 422) {
            var message = data.message;
            toastr.error(message, {timeOut: 50000});
            return false;
            }
            }

    });
    });</script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection
@endsection
