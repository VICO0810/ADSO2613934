@extends('layouts.app')
@section('title', 'GameApp -create Outfits')
@section('class', 'register')

@section('content')
    <header>
        <a href="javascript:;" class="btn-back">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <h1>Create Outfits</h1>
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('layouts.menuburguer')
    <section class="scroll">
        <form action={{ url('outfits') }} method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group">
                <img id="upload" class="border" src="{{ asset('images/default.jpg') }}" alt="Photo">
                <input id="photo" type="file" name="image" value="{{ old('image') }}" accept="image/*">
            </div>
            <div class="form-group">
                <label>
                    Name:
                </label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label>
                    Description:
                </label>
                <input type="text" name="description" placeholder="description">
            </div>
            <div class="form-group">
                <label>
                    Usuario:
                </label>
                <input type="text" name="user_id" value="1" >
            </div>
            <div class="form-group">
                <button type="submit">
                    <img src={{ asset('images/add.png') }} alt="Add" />
                </button>
                </a>
            </div>
        </form>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })

            $('.border').click(function(e) {
                $('#photo').click()
            })
            $('#photo').change(function(e) {
                e.preventDefault()
                let reader = new FileReader()
                reader.onload = function(evt) {
                    $('#upload').attr('src', event.target.result)
                }
                reader.readAsDataURL(this.files[0])
            })
        })
    </script>
@endsection
