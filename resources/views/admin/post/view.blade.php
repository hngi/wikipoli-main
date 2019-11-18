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
            <h4 class="h4 text-center mb-4 mt-4">View - {{$post->title}}</h4>
            <div>

                <div class="">
                      <input type="text" id="title" name="title" value="{{$post->title}}" class="form-control" placeholder="Post Title" readonly="">
                        
                        <div class="clearfix"></div>
                        </br>
                        <div id="editor" style="height: 350px; background-color: #fff!important" disabled>

                            {!!$post->body!!}

                        </div>

                        <div class="clearfix"></div>
                        </br>
                        <div class="text-center">
                         @if($post->status== false)
                                            <form  class="deleted"   role="form" method="POST"
                                                   action="{{url('approve-post',['id'=>$post->id])}}" >
                                                @csrf
                                                <button  class="btn btn-success noHover" type="submit"> <i class="fas fa-check-circle"></i> Mark Approve</button>
                                            </form>
                                            @else
                                            <form  class="deleted"  role="form" method="POST"
                                                   action="{{url('unapprove-post',['id'=>$post->id])}}" >
                                                @csrf
                                                <button  class="btn btn-danger noHover" type="submit"> <i class="fas fa-question-circle"></i> Mark Unapprove</button>
                                            </form>
                                            @endif
                        </div>
                  
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


@endsection
@endsection