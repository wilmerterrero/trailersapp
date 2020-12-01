@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <ul class="list-group">
                            @forelse ($trailers as $trailer)
                                <li class="list-group-item">
                                    <h2>{{ $trailer->titulo }}</h2>
                                    <video id="vid{{ $trailer->id }}" class="video-js vjs-default-skin" controls width="640"
                                        height="264"
                                        data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src":"{{ $trailer->link }}"}] }'>
                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a
                                            web browser that
                                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                                                video</a>
                                        </p>
                                    </video>
                                        <h2>Descripcion</h2>
                                        <p>{{ $trailer->descripcion }}</p>
                                        <h2>Reparto</h2>
                                        <p>{{ $trailer->reparto }}</p>
                                        <h2>Director</h2>
                                        <p>{{ $trailer->director }}</p>
                                        <h2>Estudio</h2>
                                        <p>{{ $trailer->estudio }}</p>
                                        <h2>Fecha de estreno</h2>
                                        <p>{{ $trailer->fecha_estreno }}</p>
                                </li>
                            @empty
                                <li class="list-group-item">No hay trailers para mostrar</li>
                            @endforelse
                        </ul>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
