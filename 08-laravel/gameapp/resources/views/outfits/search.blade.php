@forelse($outfits as $outfit)
<div class="area">
        <article class="record">
            <figure class="avatar">
                <img class="mask" src="{{ asset('images/' . $outfit->image) }}" alt="Border" />
            </figure>
            <aside>
                <h3>{{ $outfit->name }}</h3>
            </aside>
            <div class="actions">
                <a href="{{ url('outfits/' . $outfit->id) }}">
                    <img src="../images/ico-search.svg" alt="Show" />
                </a>
                <a href="{{ url('outfits/' . $outfit->id . '/edit') }}">
                    <img src="../images/ico-edit.svg" alt="Edit" />
                </a>
                <button class="delete" data-fullname="{{ $outfit->name }}"> <img src="../images/ico-trash.svg"
                        alt="Delete" />
                </button>
                <form action="{{ url('outfits/' . $outfit->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </article>
</div>
@empty
no found
@endforelse
