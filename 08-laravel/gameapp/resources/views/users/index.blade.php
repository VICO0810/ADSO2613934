@extends('layouts.app')
@section('title', 'GameApp - Users Module')
@section('class', 'myoutfits')

@section('content')
<header>
    <a class="btn-back" href="{{ url('dashboard') }}">
        <img src="../images/btn-back.svg" alt="Back" />
    </a>
    <h1>Users</h1>
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('layouts.menuburguer')
<section>
    <div class="area">
        <a class="add" href="{{ url('outfits/create') }}">
            <img src={{asset('images/content-btn-add.svg')}} alt="Add" />
        </a>
        @foreach($users as $user)
        <article class="record">
            <figure class="avatar">
                <img class="mask" src="../images/photo.jpg" alt="Photo" />
                <img class="border" src="../images/border-small.svg" alt="Border" />
            </figure>
            <aside>
                <h3>{{$user->fullname}}</h3>
                <h4>{{$user->role}}</h4>
            </aside>
            <figure class="actions">
                {{-- <a href="{{ url('outfits/show' .$user->id ) }}">
                    <img src="../images/ico-search.svg" alt="Show" />
                </a>
                <a href="{{ url('outfits/' .$user->id .'/edit' ) }}">
                    <img src="../images/ico-edit.svg" alt="Edit" />
                </a>
                <a href="javascript:;">
                    <img src="../images/ico-trash.svg" alt="Delete" />
                </a> --}}
            </figure>
        </article>
        @endforeach
    </div>
</section>
<script>
    $(document).ready(function() {
        // - - - - - - - - - - - - - - -
        $("header").on("click", ".btn-burger", function() {
            $(this).toggleClass("active");
            $(".nav").toggleClass("active");
        });
        // - - - - - - - - - - - - - - -
    });
</script>
{{ $users->links('layouts.paginator') }}
@endsection