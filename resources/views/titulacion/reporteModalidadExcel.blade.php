<!DOCTYPE html>
<html>
	<head>
		<title>Reporte por Modalidad</title>
	</head>
		 
	<body>  
			
		<table align="right" >
			<thead> 
			<tr> 
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td>TITULADOS GESTIÓN</td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				</tr>
				<tr> 
				    <td>NRO</td>
				    <td>COD CARRERA</td>
				    <td>CARRERA</td>
				    @foreach($modalidades as $modalidad)
				    <td>{{ $modalidad->nombre_modalidad }}</td>
				    @endforeach
				    <td>TOTAL</td>
				</tr>
			</thead>
			<tbody>
				@foreach($planes as $plan)
				<?php $a = count($reporteModalidad); ?>
		    	<tr > 
						<td>{{ $plan->id }}</td>
					    <td align="right">{{ $plan->cod_plan }}</td>
					    <td>{{ $plan->nombre_plan }}</td>
				        @foreach($modalidades as $modalidad)
					    <td>
					    <?php $i = 0; ?>
						<?php $b = 0; ?>
					    @foreach($reporteModalidad as $reporte)
					    <?php $b ++; ?>
							@if($modalidad->nombre_modalidad==$reporte->nombre_modalidad && $plan->nombre_plan==$reporte->nombre_plan)
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
					    @endforeach
					    <td>
					    <?php $sum = 0; ?>
					    @foreach($reporteModalidad as $reporte)
						    @if($plan->nombre_plan==$reporte->nombre_plan)
						    	<?php $sum += $reporte->cantidad; ?>
						    @endif	
					    @endforeach
					    	{{ $sum }}
					    </td>
				    
				</tr>
				@endforeach
				<tr > 
						<td></td>
					    <td></td>
					    <td>TOTAL</td>
					    @foreach($modalidades as $modalidad)
					    <td>
					    <?php $suma = 0; ?>
					    	@foreach($reporteModalidad as $reporte)
						    @if($modalidad->nombre_modalidad==$reporte->nombre_modalidad )
						    	<?php $suma += $reporte->cantidad; ?>
						    @endif	
					    @endforeach
					    	{{ $suma }}
					    </td>
					     @endforeach
					     <td>{{ $sumaTotal }}</td>
				</tr>
					
			</tbody>
		</table>


	</body>
</html>
