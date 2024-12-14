<header class="continer-fluid ">
    @php
        use App\Models\setting;
        use Illuminate\Support\Facades\Auth;
        $setting = setting::first();
    @endphp
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            {{$setting->email}}
                            <span>|</span></li>
                        <li>
                            <i class="far fa-clock"></i>
                            {{$setting->service}}</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    @auth
                    <ul class="ulright">
                        <li>
                            <i class="fas fa-user"></i>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul> 
                    @endauth
                    @guest
                        <ul class="ulright">
                        <li>
                            <i class="fas fa-user"></i>
                            <a href="{{route('login')}}">Login</a>
                        </li>
                    </ul> 
                    @endguest
                   
                    
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <img src="{{asset('frontend/assets/images/logo.jpg')}}" alt="">
                </div>
                <div class="col-md-9 nav-col">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ request()->routeIs('homePage') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('homePage') }}">Home</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('aboutPage') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('aboutPage') }}">About Us</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('processPage') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('processPage') }}">Process</a>
                                </li>
                            </ul>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .ulright {
        list-style: none; 
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .ulright li {
        display: flex;
        align-items: center;
    }

    .ulright li a {
        text-decoration: none; 
        margin-left: 5px; 
        font-size: 1rem;
        color: #fff; 
    }

    .ulright li a:hover {
        color: #ccc; 
    }

    .ulright i {
        color: #fff; 
        font-size: 1.2rem; 
    }
</style>
