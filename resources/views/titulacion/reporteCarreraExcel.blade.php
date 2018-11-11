<!DOCTYPE html>
<html>
	<head> 
		<title>Reporte por Genero</title>
	</head> 
		
	<body>  

		<table align="center">
			<thead>
			<tr >  
				    <td></td>
				    <td></td>
				    <td>TITULADOS GESTIÓN</td>
				    <td></td>
				</tr>
				<tr > 
				    <td>NRO</td>
				    <td>COD CARRERA</td>
				    <td>CARRERA</td>
				    <td>TITULADOS</td>
				</tr>
			</thead>
			<tbody>

			
				@foreach($planes as $plan)
					<?php $i = 0; ?>
					<?php $a = count($reporteCarrera); ?>
					<?php $b = 0; ?>
					<tr>
						<td>{{ $plan->id }}</td>
						<td align="right">{{ $plan->cod_plan }}</td>
						<td>{{ $plan->nombre_plan }}</td>
					
						<td>
						@foreach($reporteCarrera as $reporte)
						 <?php $b ++; ?>
							@if($plan->nombre_plan==$reporte->nombre_plan)

							{{ $reporte->cantidad }}
								<?php $i++; ?>
							@else
								@if($a == $b)
									
									@if($i==0)
									{{ $i }}
									<?php $i++; ?>
									@endif
								@endif
							@endif
						@endforeach
				 		</td>
					
					</tr>
					
				@endforeach	
					<tr>
						<td></td>
						<td></td>
						<td>TOTAL</td>
						<td>{{ $sumaTotal }}</td>
					</tr>
					
				</tbody>
		</table>

	</body>
</html>


    