formulario de creacion de empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for=""nombre>Nombre</label>
 <input type="text" class="text" name="nombre" id="nombre">
 <br>
 <label for=""apellidos>Apellidos</label>
 <input type="text" class="text" name="apellidos" id="apellidos">
 <br>
 <label for=""correo>Correo</label>
 <input type="text" class="text" name="correo" id="correo">
 <br>
 <label for=""foto>Fotografia</label>
 <input type="file" class="text" name="foto" id="foto">
 <br>
 <input type="submit" class="text" value="Guardas datos">
 <br>
</form>