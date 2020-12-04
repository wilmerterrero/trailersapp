@extends('layouts.home')

@section('title', 'Trailer')

@section('trailer')
    <div class="container-trailer-card-in">
        <div class="col-12 col-md-12">
            <div class="card card-trailer-in">
                <video id="vid{{ $trailer->id }}" class="video-js vjs-default-skin card-img-top trailer-video-in" controls
                    width="640" height="264"
                    data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src":"{{ $trailer->link }}"}] }'>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                            video</a>
                    </p>
                </video>
                <div class="card-body card-body-trailer">
                    <h4 class="card-title titulo-trailer-in">
                        {{ $trailer->titulo }}
                    </h4>
                    <p class="card-text  descripcion-trailer-in">
                        {{ $trailer->descripcion }}
                    </p>
                </div>
                <table class="table table-trailer-in text-muted">
                    <tbody>
                        <tr>
                            <th>
                                <p>Reparto</p>
                            </th>
                            <td>
                                <p>{{ $trailer->reparto }}</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Director</p>
                            </th>
                            <td>
                                <p>{{ $trailer->director }}</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Estudio</p>
                            </th>
                            <td>
                                <p>{{ $trailer->estudio }}</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Fecha de emisión</p>
                            </th>
                            <td>
                                <p>{{ $trailer->fecha_estreno }}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
