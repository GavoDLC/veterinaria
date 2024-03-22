<label for="nombre_mascota" class="form-label h3">Nombre de la mascota:</label>
<br>
<input type="text" name="nombre_mascota" id="nombre_mascota" value="{{isset($veterinaria->nombre_mascota)?$veterinaria->nombre_mascota:""}}" class="form-control">
<br>
<label for="tipo" class="form-label h3">Tipo de mascota:</label>
<br>
<input type="text" name="tipo" id="tipo" value="{{isset($veterinaria->tipo)?$veterinaria->tipo:""}}" class="form-control">
<br>
<label for="raza" class="form-label h3">Raza:</label>
<br>
<input type="text" name="raza" id="raza" value="{{isset($veterinaria->raza)?$veterinaria->raza:""}}" class="form-control">
<br>
<label for="edad" class="form-label h3">Edad:</label>
<br>
<input type="text" name="edad" id="edad" value="{{isset($veterinaria->edad)?$veterinaria->edad:""}}" class="form-control">
<br>
<label for="color" class="form-label h3">Color:</label>
<br>
<input type="text" name="color" id="color" value="{{isset($veterinaria->color)?$veterinaria->color:""}}" class="form-control">
<br>
<label for="foto_mascota" class="form-label h3">Foto de la mascota:</label>
<br>
@if(isset($veterinaria->foto_mascota))
    <img src="{{asset('storage').'/'.$veterinaria->foto_mascota}}" alt=""  width="10%">
@endif
<br>
<input type="file" name="foto_mascota" id="foto_mascota" value="">
<br>
<label for="nombre_dueño" class="form-label h3">Nombre del dueño:</label>
<br>
<input type="text" name="nombre_dueño" id="nombre_dueño" value="{{isset($veterinaria->nombre_dueño)?$veterinaria->nombre_dueño:""}}" class="form-control">
<br>
<label for="foto_dueño" class="form-label h3">Imagen del dueño:</label>
<br>
@if (isset($veterinaria->foto_dueño))
    <img src="{{asset('storage').'/'.$veterinaria->foto_dueño}}" alt="" width="10%">
@endif
<br>
<input type="file" name="foto_dueño" id="foto_dueño" value="">
<br>
<input type="submit" value="Guardar" class="btn btn-primary fs-5">
<a href="{{url('veterinaria')}}" class="btn btn-outline-success">Regresar</a>
