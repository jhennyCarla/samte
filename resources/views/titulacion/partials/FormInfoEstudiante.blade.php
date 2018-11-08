
<div class="text-center">
<button class="btn btn-warning btn-md" href="#" data-target="#buscarEstudiante" value="{{ $modalidad->id}}" data-toggle="modal" id="buscar" type="button"><i class="fa fa-user"></i> Agregar Estudiante</button>
</div>
<br>
<div id="mostrarDatos">
</div>
@if($errors->has('id_usuario'))
      {!! $errors->first('id_usuario','<p class="rounded msjAlert">:message</p>') !!}
@endif