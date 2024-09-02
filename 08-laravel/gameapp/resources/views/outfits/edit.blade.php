@extends('layouts.app')
@section('title', 'GameApp - register')
@section('class', 'register')

@section('content')
    <header>
        <a href="javascript:;" class="btn-back">
            <img src="images/btn-back.svg" alt="Back">
        </a>
        <h1>Edit Outfit </h1>
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('layouts.menuburguer')
    <section class="scroll">
        <form action={{ route('outfits.update', $outfit) }} method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <input id="photo" type="file" name="image" accept="image/*">
                <img id="upload" class="mask" src="{{ asset('images/' . $outfit->image) }}" alt="Photo">
                <input type="hidden" name="o
                <input type="hidden" name="id"
                    value="{{ $outfit->image }}">
            </div>
            <div class="form-group">
                <label>
                    Name:
                </label>
                <input type="text" name="name" value={{ old('name', $outfit->name) }}>
            </div>
            <div class="form-group">
                <label>
                    Description:
                </label>
                <input type="text" name="description" value={{ old('description', $outfit->description) }}>
            </div>
            <div class="form-group">
                <label>
                    User_id:
                </label>
                <input type="text" name="user_id" value={{ old('document', $outfit->user_id) }}>
            </div>

            <div class="form-group">
                <button type="submit">Guardar cambios </button>
            </div>
        </form>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#upload').click(function(e) {
                $('#photo').click();
            });

            $('#photo').change(function(e) {
                e.preventDefault();
                let reader = new FileReader();
                reader.onload = function(evt) {
                    $('#upload').attr('src', evt.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
