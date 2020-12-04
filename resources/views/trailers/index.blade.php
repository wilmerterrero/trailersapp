@extends('layouts.home')

@section('content')
    <div class="row d-flex justify-content-center">
        @livewire('trailer-search-bar')
    </div>
    <div class="container">
        <div class="trailer-container">
            @forelse ($trailers as $trailer)
                <div class="item trailer-item">
                    <div class="trailer-card card">
                        <img class="trailer-card-img" src="{{ $trailer->thumbnail }}" alt="trailer-card image" />
                        <div class="trailer-info">
                            <h6>Reparto</h6>
                            <p>{{ $trailer->reparto }}</p>
                            <h6>Director</h6>
                            <p>{{ $trailer->director }}</p>
                            <h6>Estudio</h6>
                            <p>{{ $trailer->estudio }}</p>
                            <a href="{{ route('trailers.show', $trailer) }}" class="trailer-btn">Ver</a>
                        </div>
                    </div>
                    <div class="trailer-header">
                        <h6>{{ $trailer->titulo }}</h6>
                        <p>{{ $trailer->fecha_estreno }}</p>
                    </div>
                </div>
            @empty
                <p>No hay trailers disponibles</p>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
               {{ $trailers->links() }} 
        </div>
    </div>

@endsection
