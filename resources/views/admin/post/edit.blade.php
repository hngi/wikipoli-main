@section('title')
<title>WikiPoli | Admin Dashboard</title>
@endsection
@extends('layouts.admin.app')
@section('content')

<main class="admin-main-general" id="admin-main">
    <header>
        <div class="icon-div">
            <img src="{{asset('images/house-icon.png')}}" height="30px">
            <span>Wiki</span><span class="blue-text">Poli</span>
        </div>
        <div id="user-div">
            <span id="name-plate">
                @if(session()->has('login.content'))
                {!! session('login.content') !!} ,
                @endif
                {{Auth::user()->full_name}}
            </span>

            <img src="{{asset('images/profilepic.png')}}" height="30px">
        </div>
    </header>
    <h1 id="intro">Admin Dashboard</h1>
    <section >
        <div class="col-sm-12 col-md-8 offset-md-2">
            <h4 class="h4 text-center mb-4 mt-4">Edit - {{$post->title}}</h4>
            <div>

                <div class="">
                    <form id="editpost">
                        <input type="text" id="title" name="title" value="{{$post->title}}" class="form-control" placeholder="Post Title">
                        <input type="hidden" id="id"  name="id" value="{{$post->id}}" class="form-control" >
                        
                        <div class="clearfix"></div>
                        </br>
                        <div id="editor" style="height: 350px; background-color: #fff!important">

                            {!!$post->body!!}

                        </div>

                        <div class="clearfix"></div>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-xs">Save</button>
                        </div>
                    </form>
                </div>


            </div>



        </div>
    </section>
</main>
@section('script')
<script src="{{asset('admin/assets/js/vendor/quill.min.js')}}"></script>

<script src="{{asset('admin/assets/js/image-resize.min.js')}}"></script>


<script>

var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {

        syntax: true,
        imageResize: {
            displaySize: true


        },

        toolbar: [
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            ['bold', 'italic', 'underline'],
            [{'color': []}, {'background': []}],
            [{'align': []}],
            ['link', 'image', 'video'],
            ['clean']
        ]
    }
});
</script>
<script>
    $('#editpost').submit(function (event) {
            event.preventDefault()

            var myEditor = document.querySelector('#editor');
            var html = myEditor.children[0].innerHTML;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $(".modal").show();
                },
                complete: function () {
                    $(".modal").hide();
                }
            });
            jQuery.ajax({
                url: "{{url('/edit-post')}}",
                type: 'POST',
                data: {
                    title: jQuery('#title').val(),
                    id: jQuery('#id').val(),
                    body: html


                },
                success: function (data) {
                    if (data.status === 401) {
                        jQuery.each(data.message, function (key, value) {
                            var message = ('' + value + '');
                            toastr.error(message, {timeOut: 50000});
                        });
                        return false;
                    }

                    if (data.status === 422) {
                        var message = data.message;
                        toastr.info(message, {timeOut: 50000});
                        return false;
                    }
                    if (data.status === 200) {
                        var message = data.message;
                        toastr.options.onHidden = function () {
                            window.location.href = "{{url('admin/posts')}}";
                        };
                        toastr.success(message, {timeOut: 50000});
                        return false;
                    }
                }

            });

        });

</script> 

@endsection
@endsection