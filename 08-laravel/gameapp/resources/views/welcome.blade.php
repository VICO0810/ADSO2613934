@extends('layouts.app')
@section('title', 'Gameapp - Welcome')
@section('class', 'welcome')

@section('content')
<header>
    <img src="{{ asset('images/logo-welcome.png') }}" alt="logo">
</header>
<section class="owl-carousel owl-theme">
            <img src=" {{ asset('images/slide01.png') }}" alt="slide01">
            <img src=" {{ asset('images/slide02.png') }}" alt="slide02">
            <img src=" {{ asset('images/slide03.png') }}" alt="slide03">
        </section>
        
        <footer>
            <a href=" {{ url('catalogue') }}" class="btn btn-explore">
                <img src="{{ asset('images/content.btn-welcome.svg') }}" alt="explore">
            </a>
        </footer>
        @endsection

        @section('js')
        <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        })
        </script>
        @endsection