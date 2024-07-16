@extends('layouts.app')
@section('title', 'GameApp - Welcome')
@section('class', 'welcome')

@section('content')
    <header>
        <img src="{{asset('images/logo-welcome.png')}}" alt="Logo">
    </header>
    <section class="owl-carousel owl-theme">
        <img src="{{asset('images/slide01.png')}}" alt="Slide01">
        <img src="{{asset('images/slide-c2-01.png')}}" alt="Slide02">
        <img src="{{asset('images/slide-c3-01.png')}}" alt="Slide03">
    </section>
    <footer>
        <a href="{{url('catalogue')}}" class="Explore">ENTER</a>
    </footer>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                //600:{
                    //items:3
               // },
                //1000:{
                    //items:5
               // }
            }
        })
    })
</script>
@endsection