<div class="position-relative">
    <input
        type="text"
        class="form-control lime-border"
        placeholder="Buscador de trailers..."
        wire:model="query"
    />

    @if(!empty($query))
        <div class="position-absolute list-group bg-white search-results">
            @if(!empty($trailers))
                @foreach($trailers as $i => $trailer)
                    <a
                        href="{{ route('trailers.show', $trailer['id']) }}"
                        class="list-item"
                    >{{ $trailer['titulo'] }}</a>
                @endforeach
            @else
                <div class="list-item">No hay resultados!</div>
            @endif
        </div>
    @endif
</div>