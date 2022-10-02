Mostrar la lista de empleados :)
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>            
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->foto }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellidos }}</td>
            <td>{{ $empleado->correo }}</td>
            <td> Editar |
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf 
                    {{ method_fields('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

                </form>
                
        </td>
        </tr>
        @endforeach
    </tbody>
</table>