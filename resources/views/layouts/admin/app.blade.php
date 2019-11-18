<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Dashboard | General
        </title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/admin-dashboard-general.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/admin-dashboard-sidebar.css')}}">
       <link rel="stylesheet" href="{{asset('styles/dashboard-activities.css')}}" />
        <link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('admin/assets/styles/vendor/quill.snow.css')}}">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<style>
               .toast {
                opacity: 0.9!important;
            }
        .modalsnow
    {
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: Black;
        filter: alpha(opacity=60);
        opacity: 0.6;
        -moz-opacity: 0.8;
    }
    .center
    {
        z-index: 1000;
        margin: 300px auto;
        padding: 10px;
        width: 130px;
        background-color: White;
        border-radius: 10px;
        filter: alpha(opacity=100);
        opacity: 1;
        -moz-opacity: 1;
    }
    .center img
    {
        height: 100px;
        width: 100px;
    }
	
	

    </style>
    </head>
    <body>

        @include('layouts.admin.navbar')
        @yield('content')

 

       
        <script src="{{asset('js/jQuery.js')}}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

              <script src="{{asset('js/highlight.js')}}"></script> 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
         <script>
$('#customFile').on('change', function () {
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
});

        </script>
        <script>
$(".deleted").on("submit", function () {

    return confirm("Are you sure?");
});
        </script>
        <script>
            let selectStatus = document.querySelector('#select-filter');
            selectStatus.addEventListener('change', function () {
              
                if (selectStatus.value === 'all')
                    window.location.href = "/admin/posts";
                else
                    window.location.href = "/admin/posts?filter=" + selectStatus.value;
            }, false);
           

        </script>
        
         <script>
          
            let selectStatusUser = document.querySelector('#select-filter-user');
            selectStatusUser.addEventListener('change', function () {
             
                if (selectStatusUser.value === 'all')
                    window.location.href = "/admin/users";
                else
                    window.location.href = "/admin/users?filter=" + selectStatusUser.value;
            }, false);

        </script>
        
         <script>
          
            let selectStatusAdmin = document.querySelector('#select-filter-admin');
            selectStatusAdmin.addEventListener('change', function () {
             
                if (selectStatusAdmin.value === 'all')
                    window.location.href = "/admin/all-admins";
                else
                    window.location.href = "/admin/all-admins?filter=" + selectStatusAdmin.value;
            }, false);

        </script>
          @yield('script')
            <div class="modalsnow modal" style="display: none">
            <div class="center">
                <img src="{{asset('images/reload.gif')}}"  >
            </div>
        </div>
    </body>
</html>
