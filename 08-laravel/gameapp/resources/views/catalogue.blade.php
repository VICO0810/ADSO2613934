@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'catalogue')

@section('content')

    <header>
        <a href="{{url('/')}}" class="btn-back">
            <img src="{{asset('images/btn-back.png')}}" alt="Back">
        </a>
        <img src="{{asset('images/logo-welcome.png')}}" alt="Logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top"
                d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    <nav class="nav">
        <img src="{{asset('images/title-menu.svg')}}" alt="" class="title-menu">
        <menu>
            <a href="{{url('login')}}">
                <img src="{{asset('images/ico-login.svg')}}" alt="Login">
                Login
            </a>
            <a href="{{url('register')}}">
                <img src="{{asset('images/ico-register.svg')}}" alt="Register">
                Register
            </a>
            <a href="{{url('catalogue')}}">
                <img src="{{asset('images/ico-catalogue.svg')}}" alt="Catalogue">
                Catalogue
            </a>
        </menu>
    </nav>
    <section class="scroll">
        <form action="" method="post">
            <input type="text" placeholder="Filter" maxlength="18">
        </form>
        <article>
            <h2>
                <img src="{{asset('images/ico-category.svg')}}" alt="Moda">
                
            </h2>
            <div class="owl-carousel owl-theme">
                <figure>
                    <img src="{{asset('images/slide-c1-01.png')}}" alt="" class="slide">
                    <figcaption>Estilo Pop</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="{{asset('images/ico-more.svg')}}" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="{{asset('images/slide-c1-02.png')}}" alt="" class="slide">
                    <figcaption>Estilo Elegante</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="{{asset('images/ico-more.svg')}}" alt="">
                        view
                    </a>
                </figure>
            </div>
        </article>
        <article>
            <h2>
                <img src="{{asset('images/ico-category.svg')}}" alt="Estilo">
                
            </h2>
            <div class="owl-carousel owl-theme">
                <figure>
                    <img src="{{asset('images/slide-c2-01.png')}}" alt="" class="slide">
                    <figcaption>Estilo Casual</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="images/slide-c2-02.png" alt="" class="slide">
                    <figcaption>Estilo Creativo</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
            </div>
        </article>
            </div>
        </article>
    </section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: false,
            responsive: {
                0: {
                    items: 2
                }
            }
        })
        //---------------
        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        //---------------
    })
</script>
@endsection