$(document).on('click','#buscar',function(event){
	var seleccion=$(this).val();
	$('#listaUsuarios').hide(400);
	$('#ci').val('');
	$('#nombre').val('');
	$('#apellido').val('');
	//console.log(seleccion);
});

$('#buscarEst').click(function(event) {
	$('#listaUsuarios').show(400);
	var idModalidad=$('#buscar').val();
	var ci=$('#ci').val();
	var nombre=$('#nombre').val();
	var apellido=$('#apellido').val();
	var id_quitar = [];
	a = document.getElementsByName('id_busqueda[]');
	a.forEach(function(x){id_quitar.push(x.value)});
	// console.log(idModalidad);
	// console.log('--->'+id_quitar);

	$.ajax({
		type: 'POST',
		url: '/titulacion/buscar/',
		data: {'ci':ci,'nombre':nombre,'apellido':apellido,'id_quitar':id_quitar,'_token': $('input[name=_token]').val(), 'id_modalidad':idModalidad},				
		success : function(data){
			console.log(data);
			usuarios='<div class="container"><div class="table-responsive"><table class="table table-bordered table-sm table-condensed table-striped"><thead><tr class="text-center table-primary"><th>COD SIS</th><th>NOMBRE COMPLETO</th><th>CARRERA</th><th>ACCIÓN</th></tr></thead><tbody>';
			lista = data['usuarios']
			for(var i=0;i<lista.length;i++){
				usuarios+='<tr>'+
				'<td>'+lista[i].cod_sis+'</td>'+
				'<td>'+lista[i].nombres+" "+lista[i].apellidos+'</td>'+
				'<td>'+lista[i].nombre_plan+'</td>'+
				// '<td>'+lista[i].id_usuario_asignar_sub_rol+'</td>'+
				'<td class="text-center"><button class="btn btn-sm btn-success" data-dismiss="modal" onclick="agregarEst('+lista[i].id_inscripcion+')" title="Agregar Estudiante"><i class="fa fa-user-plus"></i></button></td>'+
				'</tr>';
			
			}
			if(data['id_modalidad'] ==5||data['id_modalidad'] ==6||data['id_modalidad'] ==8){
				$('#buscar').prop('disabled',true)
					// console.log('es 1');
				}
				
				// console.log(data);
	  	usuarios+='</tbody></table></div></div>';
	  	$('#listaUsuarios').html(usuarios);
	  }
	});
});


function agregarEst(id){
	$('#mostrarUsuario').show(400);
	var id_inscripcion=id;
	//console.log(id_usuario_asignar_sub_rol);
	$.ajax({
		type:'POST',
		url:'/titulacion/buscarUsuario/',
		data:{'id':id,'_token': $('input[name=_token]').val()},
		success:function(data){
				// console.log(data);
			$('#mostrarDatos').append(
				"<div class='a'>"+
					"<div class='form-group row'>"+
					"<input class='form-control' id='id_usuario' name='id_usuario[]' value='"+data.id_ins+"' type='hidden'>"+
					"<input name='id_busqueda[]' value='"+data.id_usuario+"' type='hidden' >"+
						"<label class='col-md-2'>Nombres:</label>"+
						"<div class='col-md-6'>"+
						"<input class='form-control' name='nombre' value='"+data.nombres+"'>"+
						"</div>"+
						"<div class='col-md-3'>"+
						'<a href="#" onclick="borrar('+data.id_usuario+')" value="'+data.id_usuario+'" id="eliminarEst" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Estudiante" role="button"><i class="fa fa-close"></i></a>'+
						"</div>"+
					"</div>"+
					"<div class='form-group row'>"+
						"<label class='col-md-2'>Apellidos:</label>"+
						"<div class='col-md-6'>"+
						"<input class='form-control' name='apellido' value='"+data.apellidos+"'>"+
						"</div>"+
					"</div>"+
					"<div class='form-group row'>"+
						"<label class='col-md-2'>Carrera:</label>"+
						"<div class='col-md-6'>"+
						"<input class='form-control' name='carrera' value='"+data.nombre_plan+"'>"+
						"</div>"+
					"</div>"+
				"</br>"+
				'</div>'

			);			
		}
			// console.log(usuarios);
	});	
}

// $(document).ready(function(){
//   $(document).on('click','#eliminarEst', function(event) {
//   var id_usuario = document.getElementsByName('id_usuario[]');
//   // var id_usuario=$('#id_usuario').val();
//   console.log(id_usuario);
//   });
//   });

function borrar(id, ins){
	 // var borrar = document.getElementById('nombre').onclick();
	 // alert('daaa');
	console.log(id);
	$('.a').remove(); 

}

	