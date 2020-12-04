<div class="col-9">
    <div class="input-group md-form form-sm form-2 pl-0 relative">

        <input 
            class="form-control my-0 py-1 lime-border" 
            type="text" 
            placeholder="Buscador de trailers"
            aria-label="Search" 
            wire:model="query"
            wire:keydown.escape="resetSearch"
            wire:keydown.tab="resetSearch"
        />

        <div class="input-group-append">
            <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
                    aria-hidden="true"></i></span>
        </div>

    </div>
    @if (!empty($query))
        <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
            @if (!empty($trailers))
                @foreach ($trailers as $trailer)
                    <a href="{{ route('trailers.show', $trailer['id']) }}" class="list-item">
                        {{ $trailer['titulo'] }}
                    </a>
                @endforeach
            @else
                <div class="list-item">No hay trailers disponibles</div>
            @endif
        </div>
    @endif

</div>
