$(document).ready(function(){

    $(document).on('click','#reporteMes', function() {
    // console.log('sii');
    var anio=$('#anio').val();
    var periodo=$('#periodo').val();
    var url='/titulacion/generar/reporteMes/'+anio+'/'+periodo;
    window.open(url,'_blank');
  });
  });

$(document).ready(function(){

    $(document).on('click','#reporteCarrera', function() {
    // console.log('sii');
    var anio=$('#anio').val();
    var periodo=$('#periodo').val();
    var url='/titulacion/generar/reporteCarrera/'+anio+'/'+periodo;
    window.open(url,'_blank');
  });
  });

$(document).ready(function(){

    $(document).on('click','#reporteModalidad', function() {
    // console.log('sii');
    var anio=$('#anio').val();
    var periodo=$('#periodo').val();
    var url='/titulacion/generar/reporteModalidad/'+anio+'/'+periodo;
    window.open(url,'_blank');
  });
  });

$(document).ready(function(){

    $(document).on('click','#reporteGenero', function() {
    // console.log('sii');
    var anio=$('#anio').val();
    var periodo=$('#periodo').val();
    var url='/titulacion/generar/reporteGenero/'+anio+'/'+periodo;
    window.open(url,'_blank');
  });
  });


