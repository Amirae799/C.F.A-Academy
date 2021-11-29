

<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Store;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Admin;
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" href="/"><img style="width: 50px" src="{{asset('images/logo2.png')}}"></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left:70px">
        <ul class="navbar-nav" style="margin-left:70px">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Courses</a>
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     @foreach (\App\Models\Cat::query()->get() as $c )
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/cat/'.$c->id)}}">{{$c->name}}</a>

                    </div>
                     @endforeach
                    </a>

            </li>




@if (Auth::guard('admin')->check())
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.allTrainers')}}">Trainers</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.allRoles')}}">Roles</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('admin.dashboard')}}">Profile</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.allUsers')}}">Users</a>
</li>


            <li class="nav-item">
                <a class="nav-link" href="">Contact us</a>
            </li>

            @if(Session::has('admin'))
            <li class="dropdown" style="margin-left:950px">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                 style="color:orangered">{{Session::get('admin')['name']}}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="" style="padding: 20px;color:">logout</a></li>
                </ul>
            </li>

            @else

            <li class="nav-item dropdown" style="margin-left:500px " >
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Student Login</a>
                    <a class="dropdown-item" href="{{route('trainer.login')}}">Trianer Login</a>

                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Register
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Student Register</a>
                    <a class="dropdown-item" href="{{route('trainer.register')}}">Trianer Register</a>

                </div>
            </li>
            @endif
        </ul>
        @endif
    </div>
</nav>
