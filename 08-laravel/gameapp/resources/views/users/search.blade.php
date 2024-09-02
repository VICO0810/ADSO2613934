@forelse ($users as $user)
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
            <button class="delete" data-fullname="{{ $user->fullname }}">
                <img src="../images/ico-trash.svg" alt="Delete" />
            </button>
            <form action="{{ url('users/' . $user->id) }}" method="post" class="delete-form">
                @csrf
                @method('delete')
            </form>
        </div>
    </article>

@empty
    No found 🪐
@endforelse
