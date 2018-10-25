<html>
	<head>
		<meta charset="utf-8">
		<title>Reporte por Genero</title>
		<link rel="stylesheet" type="text/css" href="css/carta.css">
	</head>
	<body class="bodyBody">
		Universidad Mayor de San Simón<br/>
		Facultad de Ciencias Economias<br/>
		{{ $cont }}
		<h3><center>TITULADOS POR GENERO DE LA GESTIÓN @if($periodo=='todos'){{ $anio }} @else {{ $periodo }} - {{ $anio }} @endif</center></h3>
		<div>
			{{-- @if(count(var)) --}}
			<table>
				<thead style="background-color: red;">
					<tr>
						<th>Nro</th>
						<th>Carrera</th>
						<th>Ene</th>
						<th>Feb</th>
						<th>Mar</th>
						<th>Abr</th>
						<th>May</th>
						<th>Jun</th>
						<th>Jul</th>
						<th>Ago</th>
						<th>Sep</th>
						<th>Oct</th>
						<th>Nov</th>
						<th>Dic</th>
						<th>TOTAL</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Economia</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Contaduria Pública</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Administración de Empresas</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Ing. Comercial</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Ing. Financiera</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2">TOTAL</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					
				</tbody>
			</table>
			
		   <u>TITULADOS GESTION .....</u>
			@foreach($reporte as $i)
				{{ $i->anio }}
				{{ $i->apellidos }}
			@endforeach
		</div>

		<div>
			
		</div>

		
	</body>
</html>
