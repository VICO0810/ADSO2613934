@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'catalogue')

@section('content')

<header>
    <a href={{url('/')}} class="btn-back">
        <img src={{asset("images/btn-back.png")}} alt="Back">
    </a>
    <img src={{asset("images/logo-welcome.png")}} alt="Logo Welcome" class="logo-top">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>

@include('layouts.menuburguer')
<section class="scroll">
    <form action="" method="post">
        <input type="text" placeholder="Filter" maxlength="18">
    </form>
    <article>
        <h2>
            Moda:
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src={{asset("images/slide-c1-01.png")}} alt="" class="slide">
                <figcaption>Estilo Pop</figcaption>
                
            </figure>
            <figure>
                <img src={{asset("images/slide-c1-02.png")}} alt="" class="slide">
                <figcaption>Estilo Elegante</figcaption>
                
            </figure>
            <figure>
                <img src={{asset("images/slide-c1-03.png")}} alt="" class="slide">
                <figcaption>Title Game
                </figcaption> 
            </figure>
        </div>
    </article>

    <article>
        <h2>
            Estilo:
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src={{asset("images/slide-c2-01.png")}} alt="" class="slide">
                <figcaption>Estilo Pop
                </figcaption> 
            </figure>
            <figure>
                <img src={{asset("images/slide-c2-02.png")}} alt="" class="slide">
                <figcaption>Estilo Elegante</figcaption>
                
            </figure>
            <figure>
                <img src={{asset("images/slide-c2-03.png")}} alt="" class="slide">
                <figcaption>Title Game
                </figcaption> 
            </figure>
        </div>
    </article>

    <article>
        <h2>
            Tendencia:
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src={{asset("images/slide-c3-01.png")}} alt="" class="slide">
                <figcaption>Estilo Pop
                </figcaption> 
            </figure>
            <figure>
                <img src={{asset("images/slide-c3-02.png")}} alt="" class="slide">
                <figcaption>Estilo Elegante</figcaption>
            </figure>
            <figure>
                <img src={{asset("images/slide-c3-03.png")}} alt="" class="slide">
                <figcaption>Title Game
                </figcaption>
            </figure>
        </div>
    </article>
</section>
@endsection

@section('js')
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            center: false,
            loop: true,
            margin: -30,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                }
            }
        })
    })
</script>
@endsection
