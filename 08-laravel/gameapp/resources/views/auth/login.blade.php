@extends('layouts.app')
@section('title', 'GameApp - Login')
@section('class', 'login')

@section('content')

<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-login.svg" alt="Login">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
{{-- @include('layouts.menuburguer') --}}
<section>
    <form action="{{ route('login') }}" method="POST">
        @csrf   
        <div class="form-group">
            <label>
                <img src="images/ico-email.svg" alt="Email">
                Email:
            </label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="johnwick@gmail.com">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-pass.svg" alt="Password">
                Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.svg" alt="Eye">
            <input type="password" name="password" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="images/content-btn-login.svg" alt="Login">
            </button>
            <a href="">Forgot your password ?</a>
        </div>
    </form>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active');
            $('.nav').toggleClass('active');
        });

        $togglePass = false
        $('section').on('click', '.ico-eye', function() {
            !$togglePass ? $(this).next().attr('type', 'text') :
                $(this).next().attr('type', 'password');
            !$togglePass ? $(this).attr('src', 'images/ico-eye.svg') :
                $(this).attr('src', 'images/ico-eye-close.svg');
            $togglePass = !$togglePass
        });
    })
</script>
@endsection