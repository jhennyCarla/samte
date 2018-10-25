@extends('layout.master')
@section('contenido')
<div class="container">
  <div class="row">
    <!-- <div class="col-md-4 ml-auto mr-auto"> -->
    <div class="card">
      <div class="card-header card-header-primary text-center">
        <h5>REPORTE MODALIDADES DE TITULACIÓN</h5>
      </div>
      <div class="card-body">
        {!! Form::open(array('route' => array('titulacion.reportes'), 'method' =>'post'), array('role'=>'form')) !!}
          <div class="form-group row">
            {!! Form::label('anio','*Año:',['class'=>'col-md-3 text-right']) !!}
            <div class="col-md-2">
            {{ Form::select('anio', $gestiones->pluck('anio','anio'),null, ['class' => 'form-control','id'=>'anio']) }}
            </div>
            {!! Form::label('periodo','*Periodo:',['class'=>'col-md-2 text-right']) !!}
            <div class="col-md-1">
            {!! Form::select('periodo',array('todos'=>'*','1'=>'1','2'=>'2'),null,['class'=>'form-control ','id'=>'periodo']) !!}
            </div>
          </div>
          <div class="text-center">
          {{ Form::button('<i class="fa fa-eye"></i> Ver reportes', array('type'=> 'submit','class'=>'btn btn-primary','id'=>'btn_modalidad')) }}
          </div>
    		
     	</div>                           
    </div>
  </div>
</div>
@if($reporte!='vacio')
<div class="container" id="">
  <p>{{ $reporte}}</p>
  <div class="row">
    <div class="card">
      <div class="card-header card-header-primary text-center">
        <h6>GESTIÓN:     PERIODO:</h6>
      </div>
      <div class="card-body">
        <a  href="{{ route('reporteLista.pdf') }}" class="btn btn-success"  ><i ></i>Reporte Lista</a>

        <h6><strong>TITULADOS POR MES:</strong></h6>
        <hr class="lineaHorizontal">
        <div class="container">
          <table class="table table-sm table-bordered table-condensed table-responsive-lg">
            <thead class="thead-light">
              <tr>
                <th colspan="2">Muestra la información por meses de la cantidad de estudiantes titulados de la facultad de Ciencias Económicas, dado un año y periodo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><a target="_black" role="button" href="#" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Ver Informe" id="reporteMes"><i class="fa fa-file-pdf-o" style="font-size:50px;color:red;"></i>  Ver informe (pdf)</a>
                </td>
                <td class="text-center">
                  <a target="_black" role="button" href="#" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Exportar Informe"><i class="fa fa-file-excel-o" style="font-size:50px;color:green;"></i>  Exportar informe (csv)</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <h6><strong>TITULADOS POR CARRERA:</strong></h6>
        <hr class="lineaHorizontal">
        <div class="container">
          <table class="table table-sm table-bordered table-condensed table-responsive-lg">
            <thead class="thead-light">
              <tr>
                <th colspan="2">Muestra la información por carreras de la cantidad de estudiantes titulados de la facultad, dado un año o un periodo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><a target="_black" role="button" href="{{ route('reporteCarrera.pdf') }}" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Ver Informe" id="reporteCarrera"><i class="fa fa-file-pdf-o" style="font-size:50px;color:red;"></i>  Ver informe (pdf)</a>
                </td>
                <td class="text-center">
                  <a target="_black" role="button" href="#" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Exportar Informe"><i class="fa fa-file-excel-o" style="font-size:50px;color:green;"></i>  Exportar informe (csv)</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <h6><strong>TITULADOS POR MODALIDAD:</strong></h6>
        <hr class="lineaHorizontal">
        <div class="container">
          <table class="table table-sm table-bordered table-condensed table-responsive-lg">
            <thead class="thead-light">
              <tr>
                <th colspan="2">Muestra la información por modalidad de tesis y carreras de la cantidad de estudiantes titulados de la facultad de Ciencias Económicas, dado un año o periodo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><a target="_black" role="button" href="{{ route('reporteModalidad.pdf') }}" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Ver Informe" id="reporteModalidad"><i class="fa fa-file-pdf-o" style="font-size:50px;color:red;"></i>  Ver informe (pdf)</a>
                </td>
                <td class="text-center">
                  <a target="_black" role="button" href="#" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Exportar Informe"><i class="fa fa-file-excel-o" style="font-size:50px;color:green;"></i>  Exportar informe (csv)</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <h6><strong>TITULADOS POR GENERO:</strong></h6>
        <hr class="lineaHorizontal">
        <div class="container">
          <table class="table table-sm table-bordered table-condensed table-responsive-lg">
            <thead class="thead-light">
              <tr>
                <th colspan="2">Muestra la información por genero de la cantidad de estudiantes titulados de la facultad de Ciencias Económicas, dado un año o periodo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><a target="_black" role="button" href="{{ route('reporteGenero.pdf') }}" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Ver Informe" id="reporteGenero"><i class="fa fa-file-pdf-o" style="font-size:50px;color:red;"></i>  Ver informe (pdf)</a>
                </td>
                <td class="text-center">
                  <a target="_black" role="button" href="#" class="btn btn-basic text-dark" data-toggle="tooltip" data-placement="top" title="Exportar Informe"><i class="fa fa-file-excel-o" style="font-size:50px;color:green;"></i>  Exportar informe (csv)</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
{!! Form::close() !!}
@endif
@endsection

@section('script')
<script>

</script>
@endsection