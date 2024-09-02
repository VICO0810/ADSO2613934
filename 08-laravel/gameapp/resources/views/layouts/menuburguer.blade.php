@guest
<nav class="nav">
    <menu>
        <a href="{{url('/login')}}">
            <img src="{{asset("images/ico-login.svg")}}" alt="Login" class="menu-items-img">
            <p class="letter">Login</p>
        </a>
        <a href="{{url('/register')}}">
            <img src={{asset("images/ico-register.svg")}} alt="Register" class="menu-items-img">
            <p class="letter">Register</p>
        </a>
    </menu>
</nav>
@endguest

@auth
<nav class="nav">
    <menu>
        <a href={{url('/profile/show')}}>
            <img src={{asset("images/ico-login.svg")}} alt="Loguin">My profile
        </a>
        <a href="javascript:;" onclick="logit.submit();">
            <img src={{asset("images/ico-login.svg")}} alt="Logout">Logout
        </a>
    </menu>
</nav>
<form action={{ route('logout') }} id="logit" method="post">
    @csrf
</form>
@endauth
