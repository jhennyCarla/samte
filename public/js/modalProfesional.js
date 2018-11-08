$('#errorProf').hide();
$(document).on('click','.crearProf', function() {
		$('#crearProfe').modal('show');
		$('.form-horizontal').show();
		$('.modal-title').text('Crear Profesional');
});

	$("#addprof").click(function() {
		$.ajax({
			type: 'POST',
			url: '/titulacion/addProfesional',
			data: {
				'_token': $('input[name=_token]').val(),
				'apellidos': $('input[name=apellidos]').val(),
				'nombres': $('input[name=nombres]').val(),
				'doc_identidad': $('input[name=doc_identidad]').val(),   
				'sexo': $('select[name=sexo]').val(),
				'id_funcion': $('select[name=id_funcion]').val(),
				'titulo_nombre': $('select[name=titulo_nombre]').val()
		},
			success: function(data){
				console.log(data);
				if ((data.errors)) {
				    $("#errorProf").show();
				    $('.error').text(data.errors['apellidos']);
				    $('.error').text(data.errors['nombres']);
				    $('.error').text(data.errors['doc_identidad']);
				    $('.error').text(data.errors['sexo']);
				    $('.error').text(data.errors['id_funcion']);
				    $('.error').text(data.errors['titulo_nombre']); 
				}else {
					$("p").remove(":contains('hidden')");
					if(data.id_funcion==4)//4 hace referencia a la funcion presidente-> dir carrera
					{
						$('#selectPre').append("<option value='"+data.id+"'>"+ data.nombres+" "+data.apellidos+" "+"("+data.titulo_nombre +")"+"</option>");
					}
					else if(data.id_funcion==1)//1 hace referencia a la funcion tutor y  a miembro-->docente
					{	
						$('#tutor').append("<option value='"+data.id+"'>"+ data.nombres+ data.apellidos+"</option>");
						$('#selectMiembro1').append("<option value='"+data.id+"'>"+ data.nombres+" "+ data.apellidos +" "+"("+data.titulo_nombre +")"+"</option>");
						$('#selectMiembro2').append("<option value='"+data.id+"'>"+ data.nombres+" "+ data.apellidos +" "+"("+data.titulo_nombre +")"+"</option>");
						$('#selectMiembro3').append("<option value='"+data.id+"'>"+ data.nombres+" "+ data.apellidos +" "+"("+data.titulo_nombre +")"+"</option>");
					}
					else if(data.id_funcion==11)//11 hace referencia a la funcion decano
					{	
						$('#decano').append("<option value='"+data.id+"'>"+ data.nombres+" "+ data.apellidos+" "+"("+data.titulo_nombre +")"+"</option>");
					}
					$('#crearProfe').modal('hide');
				}
			},
		});
		$('#apellidos').val('');
		$('#nombres').val('');
		$('#doc_identidad').val('');
		$('#sexo').val();
		$('#id_funcion').val();
		$('#errorProf').hide();
});


function getvalue(id){
  $.ajax({
    type: 'get',
    url: 'showProfesional/'+id,
    success: function(data) {
      //console.log(data);
     return data;
      
    }
  });
}


$(document).ready(function(){
  $('#editPre').click(function(){
    $('#selectPre').change();
    $val =$('#selectPre').val();
    //console.log($valor);
    if($val ==-1){
    $('#alert').modal('show');

     }else{ 
    	$.ajax({
        type: 'get',
        url: '/titulacion/showProfesional/'+ $val,
        success: function(data) {
        	//console.log(data);
        $('.modal-title').text('Editar Profesional');
      	$('.deleteContent').hide();
      	$('#pid').val($(this).data('id'));
      	$('#apellidos2').val($(this).data('apellidos'));
      	$('#nombre2').val($(this).data('nombres'));
      	$('#titulo_nombre2').val($(this).data('titulo_nombre'));
      	document.getElementById("pid").value = data['id'];
      	document.getElementById("apellidos2").value = data['apellidos'];
      	document.getElementById("nombres2").value = data['nombres'];
      	document.getElementById("doc_identidad2").value = data['doc_identidad'];
      	document.getElementById("sexo2").value = data['sexo'];
      	document.getElementById("id_funcion2").value = data['id_funcion'];
      	document.getElementById("titulo_nombre2").value = data['titulo_nombre'];
	    $("#editPres").modal('show');
        //console.log(data);
      //$('#editAmbi').modal('show');    
    		
     	}
 		
 		}); 
	}
  }); 
});


$('.modal-footer').on('click', '.editPre', function() {
  $.ajax({
    type: 'POST',
    url: '/titulacion/editProfesional',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $("#pid").val(),
      'nombres': $('#nombres2').val(),
      'apellidos': $('#apellidos2').val(),   
      'doc_identidad': $('#doc_identidad2').val(),
      'id_funcion': $('#id_funcion2').val(),
      'titulo_nombre': $('#titulo_nombre2').val()
},
    success: function(data) {
    	 console.log(data);
    	// document.getElementById('selectPre').getElementsByTagName('option')[$("#pid").val()].innerHTML = $('#apellidos2').val();
     //  $('.editPre'+data.id).replaceWith("<option class='editPre"+data.id+"' value='"+data.id+"'>"+ data.apellidos+"</option>");
    	$('#selectPre').append("<option value='"+data.id+"'>"+ data.nombres+ data.apellidos +"</option>");
    }
  });
});
