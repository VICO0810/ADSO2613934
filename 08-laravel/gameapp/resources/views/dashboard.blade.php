@extends('layouts.app')
@section('title', 'GameApp - Dashboard')
@section('class', 'dashboard')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
    </a>
    <img src="images/Dashboard.png" alt="Dashboard">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('layouts.menuburguer')
<section>
    <article class="module module-outfits">
        <aside>
            <img src="images/Img-outfits.svg">
        </aside>
        <aside>
            <img src="images/module-outfits.svg">
            <a class="view" href={{url('/outfits')}}>
                <img src="images/btn-view.svg" alt="">
            </a>
        </aside>
    </article>
    <article class="module module-accessories">
        <aside>
            <img src="images/Img-accessories.svg">
        </aside>
        <aside>
            <img src="images/module-accessories.svg">
            <a class="view" href="./myaccessories.html"> <img src="images/btn-view.svg" alt="">

            </a>
        </aside>
    </article>
    <article class="module module-stylist">
        <aside>
            <img src="images/Img-stylist.svg">
        </aside>
        <aside>
            <img src="images/module-stylist.svg">
            <a class="view" href="/07-layout/users/users.html"> <img src="images/btn-view.svg" alt="">

            </a>
        </aside>
    </article>
</section>
@endsection

@section('js')
<script src="js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {

        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        });
    })
</script>
@endsection