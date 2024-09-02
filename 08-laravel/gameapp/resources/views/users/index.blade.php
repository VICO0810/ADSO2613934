@extends('layouts.app')
@section('title', 'GameApp - Module Users ')
@section('class', 'users')

@section('content')
    <header>
        <a href="{{ url('/dashboard') }}" class="btn-back">
            <img src="images/btn-back.svg" alt="Back">
        </a>
        <h1>Users</h1>
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('layouts.menuburguer')
    <div class="options-info-resources">
        <a class="add" href="{{ url('users/create') }}">
            <img src={{ asset('images/add.png') }} alt="" />
        </a>
        <a href={{ url('export/users/pdf') }} class="">
            <img src={{ asset('images/ico-pdf.svg') }} alt="" class="-">
        </a>
        <a href={{ url('export/users/excel') }} class="">
            <img src={{ asset('images/ico-excel.svg') }} alt="" class="">
        </a>
    </div>
    <input name="qsearch" type="text" placeholder="Filter" class="qsearch ">
    <div class="area">
        @foreach ($users as $user)
            <article class="record">
                <figure class="avatar">
                    <img class="mask" src="{{ asset('images/' . $user->photo) }}" alt="Border" />
                </figure>
                <aside>
                    <h3>{{ $user->fullname }}</h3>
                    <h4>{{ $user->role }}</h4>
                </aside>
                <div class="actions">
                    <a href="{{ url('users/' . $user->id) }}">
                        <img src="../images/ico-search.svg" alt="Show" />
                    </a>
                    <a href="{{ url('users/' . $user->id . '/edit') }}">
                        <img src="../images/ico-edit.svg" alt="Edit" />
                    </a>
                    <button class="delete" data-fullname="{{ $user->fullname }}"> <img src="../images/ico-trash.svg"
                            alt="Delete" />
                    </button>
                    <form action="{{ url('users/' . $user->id) }}" method="post" class="delete-form">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </article>
        @endforeach
    </div>
@endsection
@section('js')
    <script>
        $(document).on('click', '.delete', function() {
            $fullname = $(this).attr('data-fullname')
            Swal.fire({
                title: "¿Eliminar?",
                text: "Esta seguro de eliminar a " + $fullname,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).siblings('.delete-form').submit();
                }
            });
        });
        $('.qsearch').on('keyup', function(e) {

            e.preventDefault();
            var query = $(this).val();
            var token = $('meta[name="csrf-token"]').attr('content');
            var model = 'users';
            console.log(query,token);

            $.post(model + '/search', {
                    q: query,
                    _token: token
                },
                function(data) {
                    $('.area').html(data);
                }
            ).fail(function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud: ' + textStatus, errorThrown);
            });
        });
    </script>
@endsection
