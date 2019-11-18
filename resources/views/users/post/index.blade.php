@section('title')
<title>WikiPoli | Create Post</title>
@endsection
@extends('layouts.post')
@section('content')
<section id="editor-section">
    <h1 class="text-center" id="intro">Create Post</h1>
    @if(session()->has('message.alert'))
    <div class="text-center">
        <button class="alert alert-{{ session('message.alert') }}"> 
            {!! session('message.content') !!}
        </button>
    </div>
    @endif
    <form id="addpost" enctype="multipart/form-data">
        @csrf
        <div id="editor-wrapper">
 
            <input type="text"  name="title" id="post-title" placeholder="Post Title">
            <div class="clearfix"></div>
            <br/>
            <div class="custom-file">
                <input type="file"  class="custom-file-input border border-primary" name="file" id="customFile">
                <label class="custom-file-label" for="customFile">Choose Image Post</label>
            </div>
            <div class="clearfix"></div>
            <br/>

            <div id="editor" style="height: 350px; background-color: #fff!important">



            </div>

        </div>
        <div id="btns-wrapper">
            <button type="submit"  value="draft"  class="save-draft">Save as Draft</button>
            <button type="submit" value="post" class="create-post">Create Post</button>

        </div>
</section>


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
    $(document).ready(function () {
        $("#addpost button").click(function (ev) {
            ev.preventDefault();
            var myEditor = document.querySelector('#editor');
            var html = myEditor.children[0].innerHTML;
            var title = $('#post-title').val();
            var fd = new FormData();
            fd.append('body', html);
            fd.append('title', title);
            fd.append('file', document.getElementById("customFile").files[0]);

            if ($(this).attr("value") === "draft") {

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
                    url: "{{url('/draf-post')}}",
                    type: 'POST',
                     data: fd,
                    contentType: false,
                    processData: false,
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
                            toastr.success(message, {timeOut: 50000});
                            return false;
                        }
                    }

                });

            }
            if ($(this).attr("value") === "post") {
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
                    url: "{{url('/create-post')}}",
                    type: 'POST',
                    data: fd,
                    contentType: false,
                    processData: false,
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
                            toastr.success(message, {timeOut: 50000});
                            return false;
                        }
                    }

                });
            }
        });
    });
</script> 

@endsection
@endsection