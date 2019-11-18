@section('title')
<title>WikiPoli | Posts</title>
@endsection
@section('style')
<style>


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

    .post {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .numb {
        margin-left: -10px;
        font-size: 13px;
    }

    .cardi {
        margin: 1em;
        max-width: 100%;
        overflow: clip;
        overflow-wrap: break-word;
    }

    .cardi a {
        text-decoration: none;
    }

    .img-fluid {
        height: 15rem;
        width: 100%;
        object-fit: cover;
    }

    .posts a{
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

    .first {
        margin-left: 3.5em;
        margin-right: 3.5em;
        margin-top: -1em;
    }
    .first a {
        text-decoration: none;
    }

    @media only screen and (max-width: 425px) {

        .first {
            margin-left: -1em;
        }
    }

    @media only screen and (width: 375px) {
    
        .first {
            margin: auto;
        }
    }
    
    @media only screen and (width: 425px) {
        
        .first {
            margin: auto;
        }
    }

    @media only screen and (max-width: 320px) {
        
        .first {
            margin: auto;
        }
    }


</style>
@endsection
@extends('layouts.guest')
@section('content')


<h5 class="h3 text-dark text-center pb-4">Recent Posts</h5>
@Auth

<div class="d-flex first">
    <a href="{{url('create-post')}}" class="ml-auto h5" style="color:#1257AE"><i class="fas fa-plus-circle"></i> Add Post</a>
</div>
@endAuth

 <div class="row disp">
        @forelse($posts as $post)
        <div class="col-sm-12 col-md-3 col-lg-3 cardi">
            <a href="{{url('posts/'.$post->slug)}}">
                <img class="img-fluid" src="{{asset($post->file)}}">
                <div>
                    <h5 class="h5 mb-2 mt-2" style="color:#1257AE">{{$post->cutTitle()}}</h5>
                    <p class="text-dark">{{$post->cutBody()}}</p>
                </div>
            </a>


            @section('script')
            <script>

                $('.like').submit(function (event) {

                    event.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: "{{url('/like-post')}}",
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (data) {
                            if (data.status == 200) {
                                $(".likeupdate" + data.post_id).load(" .likeupdate" + data.post_id);
                                $(".unlikeupdate" + data.post_id).load(" .unlikeupdate" + data.post_id);
                                return false;
                            }
                            if (data.status === 422) {
                                var message = data.message;
                                toastr.error(message, {timeOut: 50000});

                                return false;
                            }

                        }

                    });
                });

            </script> 
            <script>

                $('.unlike').submit(function (event) {
                event.preventDefault();
                        $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                        jQuery.ajax({
                        url: "{{url('/like-post')}}",
                                type: 'POST',
                                data: $(this).serialize(),
                                success: function (data) {
                                if (data.status == 200) {

                                $(".unlikeupdate" + data.post_id).load(" .unlikeupdate" + data.post_id);
                                        $(".likeupdate" + data.post_id).load(" .likeupdate" + data.post_id);
                                        return false;
                                }

                                if (data.status === 422) {
                                var message = data.message;
                                        toastr.error(message, {timeOut: 50000});
                                        return false;
                                }

                                }

                        }
                        );
                }
                );

            </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

            @endsection
            <div>
                <form class="like" method="POST" style="display:inline-block!important">
                    <input type="hidden" name="actions"  value="like">
                    <input type='hidden' name='slug' value="{{$post->slug}}" />
                    <input type='hidden' name='post_id' value="{{$post->id}}" />
                    <button type="submit" style="border: none!important;cursor: pointer;background: none;color: inherit;
                            border: none;
                            padding: 0;
                            font: inherit;
                            cursor: pointer;
                            outline: inherit;"> <i class="fa fa-thumbs-up pr-3" aria-hidden="true"  style="color:#1257AE"></i><span class="numb">
                            <span class='likeupdate{{$post->id}}'>{{App\Http\Controllers\Converter::number_format_short(intval($post->likeunlike->where('type', 'like')->count()))}}</span>
                        </span>
                    </button>
                </form>
                <form class="unlike" method="POST" style="display:inline-block!important">
                    <input type="hidden" name="actions"  value="unlike">
                    <input type='hidden' name='slug' value="{{$post->slug}}" />
                    <input type='hidden' name='post_id' value="{{$post->id}}" />
                    <button type="submit" style="border: none!important;cursor: pointer;background: none;color: inherit;
                            border: none;
                            padding: 0;
                            font: inherit;
                            cursor: pointer;
                            outline: inherit;">     <i class="fa fa-thumbs-down ml-3 pr-3" aria-hidden="true"  style="color:#1257AE"></i><span class="numb unlikeupdate{{$post->id}}">
                            <span class='unlikeupdate{{$post->id}}'> {{App\Http\Controllers\Converter::number_format_short(intval($post->likeunlike->where('type', 'unlike')->count()))}}</span>
                        </span>
                    </button>
                </form>



                <a href="{{url('posts/'.$post->slug)}}"><i class="fa fa-reply ml-3" aria-hidden="true"  style="color:#1257AE"></i></a>
                <a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u={{url('posts/'.$post->slug)}}& amp; t={{$post->title}}', 'facebookShare', 'width=626,height=436');
                        return false;" title="Share on Facebook"><i class="fab fa-facebook  float-right" aria-hidden="true"></i></a>
                <a href="#" onclick="window.open('http://twitter.com/share?text={{$post->title}} -&amp;url={{url('posts/'.$post->slug)}}', 'twitterShare', 'width=626,height=436');
                                return false;" title="Tweet This Post"><i class="fab fa-twitter pr-3 float-right"></i></a>

            </div>
        </div>

        @empty
        <div class="text-center">
            No Recent Post Yet

        </div>

        @endforelse
    </div>

<nav aria-label="Page" class="mt-5 pb-4">
    <ul class="pagination justify-content-center">
         {{$posts->appends($_GET)->links()}}
    </ul>
</nav>




@section('footer')
@include('layouts.footer')
@endsection
@endsection