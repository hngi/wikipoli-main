

<header id="header" class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <a href="{{url('/')}}" class="navbar-brand logo">
                <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1571749198/c09e9odiqy2cvkosfubl.png" alt="WikiPoli Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto menu ">
                    <li class="nav-item">
                        <a class="nav-link " @if(request()->path() == '/') id="nav-register" @endif href="{{url('/')}}"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " @if(request()->path() == 'posts') id="nav-register" @endif href="{{url('posts')}}"><strong>Posts</strong></a>
                    </li>
                    @Auth
                    

                    <div class="collapse navbar-collapse show" id="collapsibleNavId">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-primary pr-2 dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>{{Auth::user()->username}}</strong> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class=" justify-content-center" alt="" style="width:30px; height:30px; border-radius:20%;"></a></a>
                                <div class="dropdown-menu bg-light" aria-labelledby="dropdownId">
                                    <a class="dropdown-item nav-link" @if(request()->path() == 'myprofile') id="nav-register" @endif  href="{{url('myprofile')}}">My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item nav-link" @if(request()->path() == 'profile') id="nav-register" @endif  href="{{url('profile')}}">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('logout') }}" class="nav-link dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        <ul>
                    </div>

                    <!-- <li class="nav-item">
                        <a class="nav-link" @if(request()->path() == 'myprofile') id="nav-register" @endif  href="{{url('myprofile')}}"><strong>Profile</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @if(request()->path() == 'profile') id="nav-register" @endif  href="{{url('profile')}}"><strong>Settings</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><strong>{{Auth::user()->username}}</strong> <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class=" justify-content-center" alt="" style="width:32px; height:32px; border-radius:50%;"></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <strong>  {{ __('Logout') }}</strong>
                        </a>
                    </li> -->
                        
                    
                    @else
                    <li class="nav-item">
                        <a class="nav-link"  @if(request()->path() == 'login') id="nav-register" @endif href="{{url('login')}}"><strong>Login</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  @if(request()->path() == 'register') id="nav-register" @endif href="{{url('register')}}" ><strong>Register</strong></a>
                    </li>
                    @endAuth

                </ul>
            </div>
        </nav>
    </div>
</header>
