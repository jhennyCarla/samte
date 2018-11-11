<html>
	<head>
		<title>Reporte por Mes</title>
	</head>
	<body >
		
			<table>
				<thead >  
				<tr> 
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>TITULADOS</td>
						<td>GESTIÓN</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr> 
						<td>Nro</td>
						<td>Carrera</td>
						@foreach($meses as $mes)
						<td>{{ $mes }}</td>
						
						@endforeach
						<td>TOTAL</td>
					</tr>
				</tdead>
				<tbody>
					@foreach($planes as $plan)
					<?php $a = count($reporteMes); ?>
					<tr>
						<td>{{ $plan->id }}</td>
						<td>{{ $plan->nombre_plan }}</td>
						@foreach($meses as $id=>$mes)
						<td>
						<?php $i = 0; ?>
						<?php $b = 0; ?>
						@foreach($reporteMes as $reporte)
						 <?php $b ++; ?>
							@if($plan->nombre_plan==$reporte->nombre_plan && $reporte->mes==$id)
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
					    @foreach($reporteMes as $reporte)
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
						<td>TOTAL</td>
						@foreach($meses as $id=>$mes)
					    <td>
					    <?php $suma = 0; ?>
					    	@foreach($reporteMes as $reporte)
						    @if($reporte->mes==$id )
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
