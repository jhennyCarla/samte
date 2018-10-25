<div class="form-group row">
	{!! Form::label('titulo_defensa','*Nombre Tesis:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('titulo_defensa',null,['placeholder' => 'nombre_tesis','class'=>'form-control','size' => '30x2']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('descripcion','*Breve Descrición:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('descripcion',null,['placeholder' => 'Escriba una breve descipcion del proyecto','class'=>'form-control','size' => '30x3']) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('avance','Porcentaje de Avance:',['class'=>'col-md-3']) !!}
	<div class="col-md-2">
	{!! Form::select('avance',['10'=>'10%','20'=>'20%','30'=>'30%','40'=>'40%','50'=>'50%','60'=>'60%','70'=>'70%','80'=>'80%','90'=>'90%','100'=>'100%'],null,['class'=>'form-control','id'=>'avance','onChange'=>'imprimirValor()'])!!}
	
	</div>
	{{-- <div class="col-md-6">
  	<input type="button" id="myButton" value="Analizar" />	
    <div class="progress" style="width:600px;">
        <div id="barra" style="background-color:#2196a8; height:19px; width:0px; color:white; text-align:center">
        </div>
    </div>
	</div> --}}
</div>
<script type="text/javascript">


function imprimirValor(){
  var select = document.getElementById("avance");
  var options=document.getElementsByTagName("option");
  var a= select.value;
  console.log(a);
  console.log(select.value);
  if (a==100){
  	console.log('es 100');
  	document.getElementById('mostrarTodo').style.display = '';
  }else{
  	document.getElementById('mostrarTodo').style.display = 'none';

  }
}
</script>
