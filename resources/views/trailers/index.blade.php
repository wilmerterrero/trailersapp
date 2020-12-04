@extends('layouts.home')

@section('content')

    <div class="container pt-5">
        <div class="row trailers-row">
            @forelse ($trailers as $trailer)
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="trailer-item">
                        <div class="trailer-card">
                            <img class="img-fluid" src="{{ $trailer->thumbnail }}" alt="trailer-card image" />
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
