<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Reporte por Genero</title>
		<link rel="stylesheet" type="text/css" href="css/carta.css">
		
	</head>
		
		<img src="img/logoFCE.png" width="70" height="70" style="float:left;">
		<p>Universidad Mayor de San Simón</p>
		<p style="line-height:0.4;">Facultad de Ciencias Economias</p>
	<br/>
	<body>

		<h4 class="text-center" align="center">TITULADOS POR MODALIDAD DE LA GESTIÓN @if($periodo=='todos'){{ $anio }} @else {{ $periodo }} - {{ $anio }} @endif</h4>
		<div class="container">
			
<table width="100%" class="tabla" border="2">
	<thead>
		<tr align="center" > 
		    <th rowspan="2">NRO</th>
		    <th rowspan="2">COD CARRERA</th>
		    <th rowspan="2">CARRERA</th>
		    <th colspan="8">MODALIDADES</th>
		    <th rowspan="2">TOTAL</th>
		</tr>
		<tr align="center" > 
			@foreach($modalidades as $modalidad)
			<th>{{ $modalidad->abreviacion_modalidad }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		@foreach($planes as $key=>$plan)
    	<tr align="center" valign="middle"> 
			<td width="3%">{{ ++$key }} </td>
			<td width="8%">{{ $plan->cod_plan }}</td>
			<td width="15%">{{ $plan->nombre_plan }}</td>
			@foreach($modalidades as $modalidad)
			<td width="8%">
				@foreach($reporteModalidad as $titulados)
					@if($modalidad->nombre_modalidad==$titulados->nombre_modalidad && $plan->nombre_plan==$titulados->nombre_plan)
						{{ $titulados->cantidad }}	
					@endif
				@endforeach
			</td>
			@endforeach	
			@foreach($carrera as $carr)
			<td width="8%">
				@if($plan->nombre_plan==$carr->nombre_plan)
				ss
						{{-- {{ $carr->nombre_plan }}	 --}}
				@endif
			</td>
			<td></td>
			@endforeach
		</tr>
			@endforeach
	</tbody>
</table>
<br/>
<table class="tabla" style="margin:auto;">
	<thead>
		<tr align="center" class="fondo">
			<th colspan="2">ABREVIACIONES</th>
		</tr>	
	</thead>
	<tbody>
		@foreach($modalidades as $modalidad)
		<tr>
			<td>{{ $modalidad->nombre_modalidad }}</td>
			<td align="center">{{ $modalidad->abreviacion_modalidad }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
		</div>
		<div>
    </div>


	</body>
</html>
