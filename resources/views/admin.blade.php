@extends('layouts.admin')

@section('title', 'Admin - Trailers')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p id="msg">{{ $message }}</p>
                            </div>
                        @endif
                        <div class="d-flex justify-content-between pb-4">
                            <h3>CRUD Trailers</h3>
                            <a href="javascript:void(0)" class="btn btn-primary" id="newTrailer" data-toggle="modal">
                                <i class="fas fa-plus"></i> Crear Nuevo
                            </a>
                        </div>
                        <table class="table table-striped" id="trailers">

                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Creado</th>
                                    <th>Actualizado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($trailers as $trailer)
                                    <tr id="trailer_id_{{ $trailer->id }}">
                                        <td>{{ $trailer->titulo }}</td>
                                        <td>{{ $trailer->created_at }}</td>
                                        <td>{{ $trailer->updated_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="javascript:void(0)" data-toggle="modal" id="editTrailer"
                                                    title="Editar" data-id="{{ $trailer->id }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('trailers.destroy', $trailer->id) }}" method="POST">
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <a href="javascript:void(0)" id="deleteTrailer"
                                                        title="Eliminar" data-id="{{ $trailer->id }}" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @include('partials.add')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
