@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>REPORTE ESTUDIANTE INSCRITOS A TITULACIÓN</h5></div>
			<div class="card-body">
				<p>Gestión:  SEMESTRE 1-2018</p>
				<table class="table table-sm table-hover table-bordered table-condensed table-striped table-responsive-lg">
					<thead>
						<tr class="table-primary text-center">
							<th>Nro</th>
					        <th>REPORTE</th>
					        <th>ACCESO</th>
					  	</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>REPORTE DE AREAS DE LOS ESTUDIANTES INSCRITOS POR CARRERA</td>
							<td class="text-center"><button class="btn btn-success btn-sm"><i class="fa fa-folder-open"></i> Ver reporte</button></td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>REPORTE DE APROBADOS GESTIÓN EXAMEN DE GRADO</td>
							<td class="text-center"><button class="btn btn-success btn-sm"><i class="fa fa-folder-open"></i> Ver reporte</button></td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>REPORTES NOTAS COMPLETAS GESTIÓN DE LA CARRERA</td>
							<td class="text-center"><button class="btn btn-success btn-sm"><i class="fa fa-folder-open"></i> Ver reporte</button></td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>REPORTES DE NOTAS APROBADO DE LA CARRERA</td>
							<td class="text-center"><button class="btn btn-success btn-sm"><i class="fa fa-folder-open"></i> Ver reporte</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection