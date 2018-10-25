@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>ADMINISTRACIÓN OPCIONES INSCRITOS A TITULACIÓN</h5></div>
			<div class="card-body">
				<table class="table table-sm table-hover table-condensed table-bordered">
					<tbody>
						<tr>
						  <th class="table-info">GESTIÓN:</th>
						  <td class="text-uppercase">PRIMER SEMESTRE 1-2018</td>
						</tr>
						<tr>
						  <th class="table-info">PLAN:</th>
						  <td class="text-uppercase">089801 LIC. EN CONTADURIA PÚBLICA</td>
						</tr>
					</tbody>
				</table>
				<table class="table table-condensed table-bordered table-responsive-lg">
					<thead>
						<tr class="text-center table-info">
						  <th>Nro</th>
						  <th>FOTOGRAFIA</th>
						  <th>APELLIDOS DOCENTE</th>
						  <th>NOMBRES DOCENTE</th>
						  <th>ÁREA</th>
						  <th>GRUPO</th>
						  <th>Act/Registrar notas examen</th>
						  <th>Act/Registrar correción notas</th>
						  <th>Act/Des registrar recuperatorio</th>
						  <th>Act/Des ver notas estudiante</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <td class="text-uppercase"></td>
						  <td class="text-uppercase"></td>
						  <td class="text-uppercase"></td>
						  <td class="text-uppercase"></td>
						  <td class="text-uppercase"></td>
						  <td class="text-uppercase"></td>
						  <td class="text-center"><a class="btn btn-success btn-sm" href="#"><i class="fa fa-pencil"></i>ACTIVAR</a> </td>
						  <td class="text-center"><a class="btn btn-success btn-sm" href="#"><i class="fa fa-pencil"></i>ACTIVAR</a> </td>
						  <td class="text-center"><a class="btn btn-success btn-sm" href="#"><i class="fa fa-pencil"></i>ACTIVAR</a> </td>
						  <td class="text-center"><a class="btn btn-success btn-sm" href="#"><i class="fa fa-pencil"></i>ACTIVAR</a> </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
					   

@endsection