<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Reporte por Carrera</title>
		<link rel="stylesheet" type="text/css" href="css/carta.css">
		
	</head>
		
		<img src="img/logoFCE.png" width="70" height="70" style="float:left;">
		<p>Universidad Mayor de San Simón</p>
		<p style="line-height:0.4;">Facultad de Ciencias Economias</p>
	<br/>
	<body>

		<h4 class="text-center" align="center">TITULADOS POR CARRERA DE LA GESTIÓN @if($periodo=='todos'){{ $anio }} @else {{ $periodo }} - {{ $anio }} @endif</h4>
		<div class="container">
			
<table width="100%" class="tabla" border="2">
	<thead>
		<tr align="center" > 
		    <th>NRO</th>
		    <th>COD CARRERA</th>
		    <th>CARRERA</th>
		    <th>TITULADOS</th>
		</tr>
	</thead>
	<tbody>
		@foreach($planes as $key=>$plan)
    	<tr align="center" valign="middle"> 
			<td width="5%">{{ ++$key }} </td>
			<td width="10%">{{ $plan->cod_plan }}</td>
			<td width="30%">{{ $plan->nombre_plan }}</td>
			<td width="10%"></td>
	
			
		</tr>
		@endforeach
	</tbody>
</table>
<br/>

		</div>
		<div>
    </div>


	</body>
</html>


    