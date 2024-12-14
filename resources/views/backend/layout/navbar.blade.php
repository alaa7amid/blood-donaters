<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
    <div class="container-fluid">
      <a class="navbar-brand mx-lg-1 mr-0" href="./index.html">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
      <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
        <a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a href="{{route('dashboard')}}" id="dashboardDropdown" class="nav-link"  aria-haspopup="true" aria-expanded="false">
              <span class="ml-lg-2">Dashboard</span>
            </a>
          </li>  
          <li class="nav-item dropdown">
            <a href="" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="ml-lg-2">settings</span>
            </a>
            @php
                use App\Models\setting;
                use Illuminate\Support\Facades\Auth;
                $setting = setting::first();
            @endphp
            <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
              <a class="nav-link pl-lg-2" href="{{route('settings.index')}}"><span class="ml-1">Settings</span></a>
              <a class="nav-link pl-lg-2" href="{{route('settings.create')}}"><span class="ml-1">Add Settings</span></a>
              <a class="nav-link pl-lg-2" href="{{route('settings.edit',$setting->id)}}"><span class="ml-1">Edit Setting</span></a>
            </div>
          </li>
         
          <li class="nav-item dropdown">
            <a href="#" id="formsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="ml-lg-2">Admins</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="formsDropdown">
              <a class="nav-link pl-lg-2" href="{{route('admins.index')}}"><span class="ml-1">Admins</span></a>
              <a class="nav-link pl-lg-2" href="{{route('admins.create')}}"><span class="ml-1">Add Admin</span></a>


            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" id="tablesDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="ml-lg-2">Hospitals</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="tablesDropdown">
              <a class="nav-link pl-lg-2" href="{{route('hospitals.index')}}"><span class="ml-1">Hospitals</span></a>
              <a class="nav-link pl-lg-2" href="{{route('hospitals.create')}}"><span class="ml-1">Add Hospitals</span></a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a href="#" id="tablesDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="ml-lg-2">Requstings</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="tablesDropdown">
              <a class="nav-link pl-lg-2" href="{{route('requstings')}}"><span class="ml-1">Blood Requstings</span></a>
              <a class="nav-link pl-lg-2" href="{{route('Donaterequstings')}}"><span class="ml-1">Donates</span></a>

              {{-- <a class="nav-link pl-lg-2" href="{{route('hospitals.create')}}"><span class="ml-1">Add Hospitals</span></a> --}}
            </div>
          </li>

        </ul>
      </div>
      <form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
      </form>
      <ul class="navbar-nav d-flex flex-row">
       
        <li class="nav-item dropdown ml-lg-0">
          {{-- <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
            <span class="avatar avatar-sm mt-2">
              <img src="{{asset('backend/assets/avatars/1.jpg')}}" alt="..." class="avatar-img rounded-circle">
            </span>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mt-2" style="font-weight: bold; color: #000;">
                {{ Auth::user()->name }}
              </span>
            </a>
            <ul class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink">
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('profile_page')}}">{{__("Profile")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link logout-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Log Out') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            
            </ul>
          </li>
        </li>
      </ul>
    </div>
  </nav>