@extends('layouts.app')
@section('title', 'GameApp - register')
@section('class', 'register')

@section('content')
    <header>
        <a href="javascript:;" class="btn-back">
            <img src="images/btn-back.svg" alt="Back">
        </a>
        <h1>Edit user </h1>
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('layouts.menuburguer')
    <section class="scroll">
        <form action={{ route('users.update', $user) }} method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <input id="photo" type="file" name="photo" accept="image/*">
                <img id="upload" class="mask" src={{ asset('images/' . $user->photo) }} alt="Photo">
                <input type="hidden" name="o
                <input type="hidden" name="id"
                    value="{{ $user->photo }}">
            </div>
            <div class="form-group">
                <label>
                    Name:
                </label>
                <input type="text" name="fullname" value={{ old('fullname', $user->fullname) }}>
            </div>
            <div class="form-group">
                <label>
                    Document:
                </label>
                <input type="text" name="document" value={{ old('document', $user->document) }}>
            </div>
            <div class="form-group">
                <label>
                    Gender:
                </label>
                <select name="gender" value={{ old('gender', $user->gender) }}>
                    <option value="Female" @if (old('gender', $user->gender) == 'Female') selected @endif>Female</option>
                    <option value="Male" @if (old('gender', $user->gender) == 'Male') selected @endif>Male</option>
                </select>
            </div>
            <div class="form-group">
                <label>
                    Birthdate:
                </label>
                <input type="date" name="birthdate" value={{ old('birthdate', $user->birthdate) }}>
            </div>
            <div class="form-group">
                <label>
                    Email:
                </label>
                <input type="email" name="email" value={{ old('email', $user->email) }}>
            </div>
            <div class="form-group">
                <label>
                    Phone Number:
                </label>
                <input type="text" name="phone" value={{ old('phone', $user->phone) }}>
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
