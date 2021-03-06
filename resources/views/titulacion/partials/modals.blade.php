{{-- buscar usuario --}}
<div class="modal fade" id="buscarEstudiante" tabindex="-1" role="dialog">
	{{ csrf_field() }}
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="titulo">Buscar Estudiante</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="idModalidad" value="{{ $modalidad->id}}">
					@include('accesos.lista')
				</div>
				<div class="panel-body" id="listaUsuarios" style="display:none" >
					{{-- AQUI SE MUESTRA EL RESULTADO DEL BUSQUEDA DE USUARIOS --}}
				</div>
				<div class="modal-footer">	
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



{{-- Crear profesional --}}
<div id="crearProfe" class="modal fade" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title"></h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
			</div>         
			<div class="modal-body">
				<p class="error text-center alert alert-danger" id="errorProf"></p>
				<form class="form-horizontal" role="form">
					<div class="container">
						@include('titulacion.partials.nuevoProfesional')
						<div class="form-group row">
							{!! Form::label('id_funcion','* Funcion:', ['class'=>'col-lg-2']) !!}
							<div class="col-lg-4">
							{{-- {!! Form::select('id_funcion',$funciones->pluck('nombre_funcion','id'),null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'descripcion_funcion','required'=>'required']) !!} --}}
							
							{!! Form::select('id_funcion',array('12'=>'PRESIDENTE','13'=>'TUTOR','11'=>'DECANO','14'=>'MIEMBRO'),null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'descripcion_funcion','required'=>'required'])!!}
							</div>
							{!! Form::label('titulo_nombre','* Titulo:', ['class'=>'col-lg-2']) !!}
							<div class="col-lg-4">
								<select name="titulo_nombre" class="form-control" id="titulo_nombre" >
										<option value='-1'>Seleccione</option>
				            		@foreach ($titulos as $titulo)
				            		<option value="{{$titulo->titulo_abreviado}}">{{$titulo->titulo_descripcion}} ({{ $titulo->titulo_abreviado}})</option>
				            		@endforeach
    						</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
				{!! Form::submit('Guardar', array('class'=>'btn btn-warning','id'=>'addprof'))!!}
			</div>            
		</div>              
	</div> 							     
</div>


{{-- modificar presidente --}}
{{-- <div id="editPres" class="modal fade" roles="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<input type="text" class="form-control" id="pid" value disabled hidden>	
				<div class="form-group row">
					{!! Form::label('apellidos','* Apellidos:', ['class'=>'col-lg-2']) !!}
					<div class="col-lg-10">
					{!! Form::text('apellidos',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control','id'=>'apellidos2')) !!}
					</div>
				</div>
				<div class="form-group row">
				{!! Form::label('nombres','* Nombres:', ['class'=>'col-lg-2']) !!}
					<div class="col-lg-10">
					{!! Form::text('nombres',null,array('placeholder' => 'Ingrese nombre','class'=>'form-control','id'=>'nombres2')) !!}
					</div>
				</div>
				<div class="form-group row">
					{!! Form::label('doc_identidad','* Carnet de identidad:', ['class'=>'col-lg-3']) !!}
					<div class="col-lg-4">
					{!! Form::text('doc_identidad',null,array('placeholder' => 'Ingrese su ci','class'=>'form-control','id'=>'doc_identidad2')) !!}
					</div>
					{!! Form::label('sexo','* Genero:', ['class'=>'col-lg-2 text-right']) !!}
					<div class="col-lg-3">
					{!! Form::select('sexo',array('FEMENINO'=>'FEMENINO','MASCULINO'=>'MASCULINO'),null,['class'=>'form-control','id'=>'sexo2'])!!}
					</div>
				</div>

				<div class="form-group row">
					{!! Form::label('id_funcion','* Funcion:', ['class'=>'col-lg-2']) !!}
					<div class="col-lg-4">
						{!! Form::select('id_funcion',$funciones->pluck('nombre_funcion','id'),null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'id_funcion2','required'=>'required']) !!}
						{!! Form::select('id_funcion',array('12'=>'PRESIDENTE','13'=>'TUTOR','11'=>'DECANO','14'=>'MIEMBRO'),null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'descripcion_funcion','required'=>'required'])!!}
						
					</div>
					   {{ csrf_field()}} 
					{!! Form::label('titulo_nombre','* Titulo:', ['class'=>'col-lg-2']) !!}
					<div class="col-lg-4">
					{!! Form::select('titulo_nombre',$titulos->pluck('titulo_descripcion','id'),null,['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'titulo_nombre2']) !!}
					</div>
				</div>
			</div>
			<div class="modal-footer">
			{!! Form::button('Cambiar Datos', array('class'=>'btn btn-success editPre', 'data-dismiss'=>'modal'))!!}
			{!! form::button('Cerrar',array('class'=>'btn btn-warning','data-dismiss'=>'modal')) !!}
	  </div>
		</div>
	
	</div>	
</div>
 --}}

{{-- Ambientes --}}
<div id="create" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"></h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group row">
					{!! Form::label('nombre_ambiente','*Nombre del ambiente:', ['class'=>'col-md-3']) !!}
					<div class="col-md-9">
					{!! Form::text('nombre_ambiente',null,array('placeholder' => 'nombre ambiente','class'=>'form-control','id'=>'nombre_ambiente')) !!}
					<p class="error text-center alert alert-danger" id="errorAmb" ></p>
					</div>
				</div>
				<div class="form-group row">
					{!! Form::label('id_tipo_ambiente','Tipo Ambiente:',['class'=>'col-md-3']) !!}
					<div class="col-md-9">
					{!! Form::select('id_tipo_ambiente', $tipo_ambiente,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
					<p class="error text-center alert alert-danger" id="errorTipoAmb" ></p>
					</div>
				</div>
				<div class="form-group row">
					{!! Form::label('id_unidad','Unidad:',['class'=>'col-md-3 ']) !!}
					<div class="col-md-4">
					{!! Form::select('id_unidad', $unidad,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
					<p class="error text-center alert alert-danger" id="errorUnidad" ></p>
					</div>
					{!! Form::label('max_estudiantes','Max estudiantes:',['class'=>'col-md-3 text-right']) !!}
					<div class="col-md-2">
					{!! Form::number('max_estudiantes',null,array('class'=>'form-control','id'=>'max_estudiantes')) !!}
					<p class="error text-center alert alert-danger" id="errorMax" ></p>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn btn-warning" type="submit" id="add">
					guardar</button>
			<button class="btn btn-warning" type="button" data-dismiss="modal">Cerrar</button>
		</div>
	</div>
	</div>
</div>

<div id="editAmbi" class="modal fade" role="dialog">
	<div class="modal-dialog ">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"></h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
				<input type="text" class="form-control" id="fid" value disabled hidden>	
			<div class="form-group row">
					{!! Form::label('nombre_ambiente','*Nombre del ambiente:', ['class'=>'col-md-3']) !!}
					<div class="col-md-9">
						{{-- {!! Form::text('nombre_ambiente',null,array('placeholder' => 'nombre ambiente','class'=>'form-control','id'=>'nombre_ambiente' ,'value'=>'')) !!} --}}
					{!! Form::text('nombre_ambiente',null,array('placeholder' => 'nombre ambiente','class'=>'form-control nombre_ambiente','id'=>'nombre_ambiente2','value'=>'')) !!}
					</div>
			</div>
				<div class="form-group row">
					{!! Form::label('id_tipo_ambiente','Tipo Ambiente:',['class'=>'col-md-3']) !!}
					<div class="col-md-9">
					{!! Form::select('id_tipo_ambiente', $tipo_ambiente,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'id_tipo_ambiente2','value'=>'']) !!}
					</div>
				</div>
				<div class="form-group row">
					{!! Form::label('id_unidad','Unidad:',['class'=>'col-md-3 ']) !!}
					<div class="col-md-4">
					{!! Form::select('id_unidad', $unidad,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'id_unidad2']) !!}
					</div>
					{!! Form::label('max_estudiantes','Max estudiantes:',['class'=>'col-md-3 text-right']) !!}
					<div class="col-md-2">
					{!! Form::number('max_estudiantes',null,array('class'=>'form-control','id'=>'max_estudiantes2')) !!}
					</div>
				</div>
		</div>
		<div class="modal-footer">
			{!! Form::button('Cambiar Datos', array('class'=>'btn btn-success edit', 'data-dismiss'=>'modal'))!!}
			{!! form::button('Cerrar',array('class'=>'btn btn-warning','data-dismiss'=>'modal')) !!}
	  </div>
	</div>
	</div>
</div>

<div id="alert" class="modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
		<div class="modal-body">
			<p class="text-center"><i class="fa fa-warning" style="font-size:46px;color:red"></i>     DEBE SELECCIONAR ALGUN VALOR...!!</p>
		</div>
		<div class="modal-footer">
			<button class="btn btn-warning" type="button" data-dismiss="modal">Cerrar</button>
		</div>
	</div>
	</div>
</div>

