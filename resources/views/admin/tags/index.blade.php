@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-headig">
                        Lista de Etiquetas
                        <a class="btn btn-sm btn-primary pull-right" href="{{ route('tags.create') }}">Crear</a>
                    </div>

                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width='10px'>ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td width='10px'>
                                        <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-info">Ver</a>
                                    </td>
                                    <td width='10px'>
                                        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    </td>
                                    <td width='10px'>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
