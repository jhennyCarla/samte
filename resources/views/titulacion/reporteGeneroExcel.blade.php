<!DOCTYPE html>
<html>
	<head> 
	<title>Reporte por Genero</title>
	</head>
		
	<body> 
		<table> 
				<thead>
				<tr>
					<td></td>
				    <td></td>
				    <td>TITULADOS GESTIÓN</td>
				    <td></td>
				    <td></td>
					</tr>

					<tr>
					<td>NRO</td>
				    <td>COD CARRERA</td>
				    <td>CARRERA</td>
				    <td>FEMENINO</td>
				    <td>MASCULINO</td>
				    <td>TOTAL</td>
					</tr>
				</thead>
				<tbody>
					@foreach($planes as $plan)
					<?php $i = 0; ?>
					<?php $a = count($reporteGenero); ?>
					<?php $b = 0; ?>
					<tr>
						<td>{{ $plan->id }}</td>
						<td align="right">{{ $plan->cod_plan }}</td>
						<td>{{ $plan->nombre_plan }}</td>
					
						<td>
						@foreach($reporteGenero as $reporte)
						<?php $b ++; ?>
							@if($plan->nombre_plan==$reporte->nombre_plan && $reporte->genero=='F')
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
						<td>
						<?php $i = 0; ?>
						<?php $b = 0; ?>
						@foreach($reporteGenero as $reporte)
						<?php $b ++; ?>
							@if($plan->nombre_plan==$reporte->nombre_plan && $reporte->genero=='M')
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
				 		<td>
					    <?php $sum = 0; ?>
					    @foreach($reporteGenero as $reporte)
						    @if($plan->nombre_plan==$reporte->nombre_plan)
						    	<?php $sum += $reporte->cantidad; ?>
						    @endif	
					    @endforeach
					    	{{ $sum }}
					    </td>
				 		
					</tr>
					
				@endforeach	
					<tr>
						<td></td>
						<td></td>
						<td>TOTAL</td>
						<td>
						<?php $suma = 0; ?>
					    	@foreach($reporteGenero as $reporte)
							    @if($reporte->genero=='F')
							    	<?php $suma += $reporte->cantidad; ?>
							    @endif	
					    	@endforeach
					    {{ $suma }}
						</td>
						<td>
						<?php $suma = 0; ?>
					    	@foreach($reporteGenero as $reporte)
							    @if($reporte->genero=='M')
							    	<?php $suma += $reporte->cantidad; ?>
							    @endif	
					    	@endforeach
					    {{ $suma }}
						</td>
						<td>{{ $sumaTotal }}</td> 	
					</tr>
					
				</tbody>
			</table>
	
	</body>
</html>
