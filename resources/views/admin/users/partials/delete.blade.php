{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE']) !!}
    <button type="submit" onclick="return confirm('Seguro que desea Eliminar?')" class="btn btn-danger">Eliminar Usuario</button>
{!! Form::close() !!}