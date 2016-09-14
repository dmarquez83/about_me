@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nuevo Usuario
                </div>
                <div class="panel-body">
                    @include('admin.users.partials.messager')
                    {!! Form::open(['route' => 'admin.users.store', 'POST'  ]) !!}
                        @include('admin.users.partials.fields')
                        <button type="submit" class="btn btn-default">Crear Usuario</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection