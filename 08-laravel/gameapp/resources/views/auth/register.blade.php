@extends('layouts.app')
@section('title', 'GameApp - register')
@section('class', 'register')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-register.svg" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('layouts.menuburguer')
<section class="scroll">
    <form action={{route('register')}} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img id="upload" class="mask" src="images/upload-photo.svg" alt="">
            <img class="border" src="images/border-photo.svg" alt="">
            <input id="photo" type="file" name="photo" accept="image/*">
        </div>
        <div class="form-group">
            <label>
                Fullname:
            </label>
            <input type="text" name="fullname" placeholder="Laura Blanco">
        </div>
        <div class="form-group">
            <label>
                Document:
            </label>
            <input type="text" name="document" placeholder="Document">
        </div>
        <div class="form-group">
            <label>
                Gender:
            </label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label>
                Birthdate:
            </label>
            <input type="date" name="birthdate">
        </div>
        <div class="form-group">
            <label>
                Email:
            </label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label>
                Phone Number:
            </label>
            <input type="text" name="phone" placeholder="3135463987">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-pass.svg" alt="Password">
                Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.svg" alt="Eye">
            <input type="password" name="password" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-pass.svg" alt="Password">
                Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.svg" alt="Eye">
            <input type="password" name="password_confirmation" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="images/content-btn-register.svg" alt="Register">
            </button>
        </div>
    </form>
</section>
@endsection
@section('js')
<script>
    $(document).ready(function() {

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
