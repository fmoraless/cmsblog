@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                <!--/<div class="card-header">
                        Lista de Etiquetas
                    <a href="{{ route('tags.create') }}"
                           class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                    </div>
                </div>  /cierre card header-->
                <div class="card-body">
                    <div class="container">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Administrar <b>Etiquetas</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ route('tags.create') }}" class="btn btn-success"><i class="fas fa-tag"></i><span> Nueva Etiqueta</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-trash-alt"></i> <span> Eliminar</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                                    </th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tags as $tag)
                                <tr>
                                    <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                                    </td>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('tags.show', $tag->id) }}"
                                        class="btn btn-sm btn-primary">
                                            Ver
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('tags.edit', $tag->id) }}"
                                           class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['tags.destroy', $tag->id],
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                             </tr>
                            @endforeach
                                </tbody>
                            </table>
                            {{ $tags->render() }}
                        </div>
                    </div><!-- hasta aqui la plantilla -->
                </div>

            </div>
        </div>
    </div>
@endsection