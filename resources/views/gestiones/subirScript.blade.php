@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>SUBIR SCRIPT CSV</h5></div>
			<div class="card-body">
				{!! Form::open(array('route'=>'gestiones.importarScript','method' => 'POST','files'=>'true')) !!}
					{!! csrf_field() !!}
					@include('gestiones.partials.formInscribirCsv')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

