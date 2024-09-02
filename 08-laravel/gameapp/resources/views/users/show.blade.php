@extends('layouts.app')
@section('title', 'GameApp - Show User')
@section('class', 'my-profile')
@section('content')
    <header class="header">
        <a href="{{ url('/users') }}" class="btn-back">
            <img src={{ asset('images/btn-back.svg') }} alt="Back">
        </a>
        <h1 class="title  title-show-users">Show User</h1>
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('layouts.menuburguer')
<section>
    <figure class="avatar">
        <img class="mask" src="{{asset('images/'. $user->photo)}}" alt="Photo">
    </figure>
    <h2>{{$user->fullname}}</h2>
    <span class="role">
        <img src={{asset("images/ico-role.svg")}} alt="role">
        <b>{{$user->role}}</b>
    </span>
    <span class="email">
        <img src={{asset("images/ico-email.svg")}} alt="role">
        <b>{{$user->email}}</b>
    </span>
    <div class="flex">
        <span class="data data-phone-number">
            <img src={{asset("images/ico-data-phone-number.svg")}} alt="Phone Number">
            <b>{{$user->phone}}</b>
        </span>
        <span class="data data-birth-date">
            <img src={{asset("images/ico-data-birth-date.svg")}} alt="Birth Date">
            <b>{{$user->birthdate}}</b>
        </span>
        <span class="data data-gender">
            <img src={{asset("images/ico-data-gender.svg")}} alt="Gender">
            <b>{{$user->gender}}</b>
        </span>
    </div>
</section>
@endsection
