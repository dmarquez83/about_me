@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios
                </div>
                <div class="panel-body">
                    <p>
                        <a class="btn btn-default" href="{{ route('admin.users.create') }}" role="button">
                            Crear
                        </a>
                    </p>
                   <!-- <p>Hay {{ $users->lastPage() }} Páginas</p>-->
                    <p>Hay {{ $users->total() }} Usuarios</p>
                    @include('admin.users.partials.table')
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection