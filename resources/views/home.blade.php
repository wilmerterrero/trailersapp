@extends('layouts.app')

@section('title', 'Admin - Trailers')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <table class="table table-striped" id="trailers">

                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Creado</th>
                                    <th>Actualizado</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($trailers as $trailer)
                                    <td>{{ $trailer->titulo }}</td>
                                    <td>{{ $trailer->created_at }}</td>
                                    <td>{{ $trailer->updated_at }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-clipboard-list"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
