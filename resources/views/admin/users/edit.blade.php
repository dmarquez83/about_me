@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Usuario: {{ $user->FullName }}
                </div>
                <div class="panel-body">
                    @include('admin.users.partials.messager')
                    {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
                        @include('admin.users.partials.fields')
                        <button type="submit" class="btn btn-default">Actualizar Usuario</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection