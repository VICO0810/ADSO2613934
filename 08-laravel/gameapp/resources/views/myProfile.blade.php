@extends('layouts.app')
@section('title', 'Gameapp - myProfile')
@section('class', 'my-profile')

@section('content')
<header>
    <a href="{{ url('dashboard') }}" class="btn-back">
        <img src={{asset("images/btn-back.svg")}} alt="Back">
    </a>
    {{-- aquí se poner la imagen de profile --}}
    {{-- <img src={{asset("images/image-game.png")}} alt=""> --}}
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('layouts.menuburguer')
<section>
    <figure class="avatar">
        <img class="mask" src={{asset('images/'. Auth::user()->photo)}} alt="Photo">
    </figure>
    <h2>Moda Laura</h2>
    <span class="role">
        <img src={{asset("images/ico-role.svg")}} alt="role">
        <b>{{Auth::user()->role}}</b>
    </span>
    <span class="email">
        <img src={{asset("images/ico-email.svg")}} alt="role">
        <b>{{Auth::user()->email}}</b>
    </span>
    <div class="flex">
        <span class="data data-phone-number">
            <img src={{asset("images/ico-data-phone-number.svg")}} alt="Phone Number">
            <b>{{Auth::user()->phone}}</b>
        </span>
        <span class="data data-birth-date">
            <img src={{asset("images/data-birth-date.png")}} alt="Birth Date">
            <b>{{Auth::user()->birthdate}}</b>
        </span>
        <span class="data data-gender">
            <img src={{asset("images/ico-data-gender.svg")}} alt="Gender">
            <b>{{Auth::user()->gender}}</b>
        </span>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {

        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        //----------------------------       
    })
</script>
@endsection