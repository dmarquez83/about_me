@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios
                </div>
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <div class="panel-body">
                    {!! Form::open(['route' => 'admin.users.index', 'method' => 'GET','class' =>'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) !!}
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    {!! Form::close() !!}
                    <p>
                        <a class="btn btn-default" href="{{ route('admin.users.create') }}" role="button">
                            Nuevo Usuario
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

    {!! Form::open(['route' => ['admin.users.destroy', ':USER_ID'], 'method' => 'DELETE','id' =>'form-delete']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
<script>
$(document).ready(function(){
//alert('Documento listo');
    $('.btn-delete').click(function(){
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID',id);
        //serializamos el formulario
        var data = form.serialize();

        row.fadeOut(); //desaparecer la fila antes de enivar la peticion ajax

        $.post(url, data, function (result) {
            alert(result.message);
        }).fail(function(){
            alert('El usuario no fue Eliminado');
            row.show();
        });

    });
});
</script>
@endsection