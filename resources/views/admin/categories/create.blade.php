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
                                            <h2>Crear <b>Categoría</b></h2>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    {!! Form::open(['route' => 'categories.store']) !!}
                                    @include('admin.categories.partials.form')
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div><!-- hasta aqui la plantilla -->
                    </div>

                </div>
            </div>
        </div>
@endsection