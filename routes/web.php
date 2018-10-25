<?php
use App\Usuario;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

Route::group(['middleware'=>'guest'],function(){
	 
Route::any('/','UsuariosController@login')->name('usuarios.login');
Route::any('/login','UsuariosController@login')->name('usuarios.login');
Route::post('logear','UsuariosController@logear')->name('usuarios.logear');
});

// titulacion 
Route::any('/claves/generarTarjetas','ClaveTarjetaController@generarClave')->name('tarjetas.generar');
Route::post('/claves/asignar','ClaveTarjetaController@asignar')->name('tarjetas.asignar');
Route::any('titulacion/crearActa','TitulacionController@crearActa')->name('titulacion.crearActa');
Route::any('titulacion/reportes','TitulacionController@reportes')->name('titulacion.reportes');
Route::get('/titulacion/imprimirActas','TitulacionController@imprimirActas')->name('titulacion.imprimirActas');
Route::post('titulacion/eliminarEst','TitulacionController@eliminarEst')->name('titulacion.eliminarEst');
Route::get('/titulacion/registrarCd','TitulacionController@registrarCd')->name('titulacion.registrarCd');
Route::get('titulacion/resumenActa/{id}','TitulacionController@resumenActa')->name('titulacion.resumenActa');
Route::get('titulacion/eliminarCd','TitulacionController@eliminarCd')->name('titulacion.eliminarCd');
Route::post('titulacion/agregarCd','TitulacionController@agregarCd')->name('titulacion.agregarCd');
Route::delete('titulacion/quitarCd/{id}','TitulacionController@quitarCd')->name('titulacion.quitarCd');

Route::resource('titulacion', 'TitulacionController');
Route::post('/titulacion/addAmbiente','TitulacionController@addAmbiente');
Route::post('/titulacion/addProfesional','TitulacionController@addProfesional');
Route::post('/titulacion/editAmbiente','TitulacionController@editAmbiente');
Route::post('/titulacion/editProfesional','TitulacionController@editProfesional');
Route::get('/titulacion/showAmbiente/{id}','TitulacionController@showAmbiente');
Route::get('/titulacion/showProfesional/{id}','TitulacionController@showProfesional');

Route::post('titulacion/buscar','TitulacionController@buscar')->name('titulacion.buscar');
Route::post('titulacion/buscarUsuario','TitulacionController@buscarUsuario')->name('titulacion.buscarUsuario');
Route::get('titulacion/generar/designacionTribunal/{id}','TitulacionController@generar_designacionTribunal')->name('designacionTribunal.pdf');
Route::get('titulacion/generar/primerRecordatorio/{id}','TitulacionController@generar_primerRecordatorio')->name('primerRecordatorio.pdf');
Route::get('titulacion/generar/actaDefensa/{id}','TitulacionController@generar_actaDefensa')->name('actaDefensa.pdf');
Route::get('titulacion/generar/testimonio/{id}','TitulacionController@generar_testimonio')->name('testimonio.pdf');

Route::get('titulacion/generar/reporteModalidad/','TitulacionController@reporte_modalidad')->name('reporteModalidad.pdf');
Route::get('titulacion/generar/reporteCarrera/','TitulacionController@reporte_carrera')->name('reporteCarrera.pdf');
Route::get('titulacion/generar/reporteGenero/','TitulacionController@reporte_genero')->name('reporteGenero.pdf');

Route::any('titulacion/generar/reporteMes/{anio}/{periodo}','TitulacionController@reporte_mes')->name('titulacion.reporteMes');
Route::any('titulacion/generar/reporteCarrera/{anio}/{periodo}','TitulacionController@reporte_carrera')->name('titulacion.reporteCarrera');
Route::any('titulacion/generar/reporteModalidad/{anio}/{periodo}','TitulacionController@reporte_modalidad')->name('titulacion.reporteMpdalidad');
Route::any('titulacion/generar/reporteGenero/{anio}/{periodo}','TitulacionController@reporte_genero')->name('titulacion.reporteGenero');
Route::get('titulacion/generar/reporteLista/','TitulacionController@reporte_lista')->name('reporteLista.pdf');
// &&&&&&&&&&&&&&&&

// Examen de grado
Route::get('examen_grado/registrarNotas','Examen_GradoController@registrarNotas')->name('examenGrado.registrarNotas');
Route::get('examen_grado/adminOpciones','Examen_GradoController@adminOpciones')->name('examenGrado.adminOpciones');
Route::get('examen_grado/imprimirListas','Examen_GradoController@imprimirListas')->name('examenGrado.imprimirListas');
Route::get('examen_grado/reportes','Examen_GradoController@reportes')->name('examenGrado.reportes');
	
Route::get('examenGrado/subir_script_inst_tit','ScriptInsTitEgController@subirScriptInscritosTitulacion')->name('examenGrado.scriptInsEg');

Route::get('examenGrado/subir_script_pagaron_insc','ScriptPagaronInsEgController@subirScriptPagaronEg');
Route::post('examenGrado/importarScriptInsPagaronEg','ScriptPagaronInsEgController@importPagEgScript')->name('importPagScript');
Route::resource('examen_grado','Examen_GradoController');

	///////////////////////////////////////////////


Route::post('usuarios/ciudades/{id}','UsuariosController@getCiudades');
Route::post('usuarios/provincias/{id}','UsuariosController@getProvincias');
//Route::any('usuarios/acceso/{id}','UsuariosController@subRolesAsignadosMenu')->name('usuarios.subRolesAsignadosMenu');


Route::group(['middleware'=>'autentificado'], function(){
	Route::get('usuarios/loginModificar','UsuariosController@loginModificar')->name('usuarios.loginModificar');
	Route::get('usuarios/contrasenaModificar','UsuariosController@contrasenaModificar')->name('usuarios.contrasenaModificar');
	Route::post('usuarios/{id}/validarModLogin','UsuariosController@validarModLogin')->name('usuarios.validarModLogin');
	Route::post('usuarios/{id}/validarModContrasena','UsuariosController@ValidarModContrasena')->name('usuarios.validarModContrasena');
	Route::get('Usuarios/bitacora','UsuariosController@bitacora')->name('usuarios.bitacora');
	Route::get('Usuarios/verBitacora/{id}','UsuariosController@bitacoraUser')->name('usuarios.verBitacora');
	Route::get('Usuarios/asignarClaveNotas/{id}','UsuariosController@asignarClaveNotas')->name('usuarios.asignarClaveNotas');

	Route::resource('roles', 'RolesController');
	Route::resource('sub_roles', 'Sub_RolesController');
	Route::resource('usuarios', 'UsuariosController');
	
Route::get('logout', 'UsuariosController@logout')->name('usuarios.logout');
	Route::get('/home','homeController@index')->name('home.index');
	Route::GET('usuario/perfil', 'UsuariosController@perfil')->name('usuarios.perfil'); 
Route::group(['middleware'=>'permisos:7'],function(){
	Route::Get('usuario/acceso','AccesoController@index')->name('accesos.index');
	Route::Get('usuario/usuario_acceso','AccesoController@index2')->name('accesos.index2');
	Route::Get('usuario/acceso/{id}','AccesoController@nuevaAsignacion')->name('accesos.nuevaAsignacion');
	Route::Get('usuario/acceso/{id}/validar','AccesoController@validarNuevaAsignacion')->name('accesos.validarNuevaAsignacion');

	Route::Get('usuario/acceso/{id}/modificar','AccesoController@modificarAsignacion')->name('accesos.modificarAsignacion');
	Route::post('usuario/acceso/{id}/validarModAsignacion','AccesoController@validarModAsignacion')->name('accesos.validarModAsignacion');
	Route::Get('usuario/acceso/{id}/modActivo','AccesoController@modActivo')->name('accesos.modActivo');
	Route::Get('gestiones/{id}/modActivo','GestionesController@modActivo')->name('gestiones.modActivo');
	
	Route::post('usuarios/{id}/crearEmail','UsuariosController@addEmail')->name('usuarios.crearEmail');
	Route::post('usuarios/{id}/crearDireccion','UsuariosController@addDireccion')->name('usuarios.crearDireccion');
	Route::post('usuarios/{id}/crearTelefono','UsuariosController@addTelefono')->name('usuarios.crearTelefono');


	Route::delete('usuarioEliminarEmail/{id}','UsuariosController@eliminarEmail')->name('usuarios.eliminarEmail');
	Route::delete('usuarioEliminarDireccion/{id}','UsuariosController@eliminarDireccion')->name('usuarios.eliminarDireccion');
	Route::delete('usuarioEliminarTelefono/{id}','UsuariosController@eliminarTelefono')->name('usuarios.eliminarTelefono');

	Route::post('usuarios/{id}/modificarEmail','UsuariosController@modificarEmail')->name('usuarios.modificarEmail');
	Route::post('usuarios/{id}/modificarDireccion','UsuariosController@modificarDireccion')->name('usuarios.modificarDireccion');
	Route::post('usuarios/{id}/modificarTelefono','UsuariosController@modificarTelefono')->name('usuarios.modificarTelefono');  
	});
	 Route::get('gestiones/subir_script','ScriptController@subirScript')->name('gestiones.subirScript');
	 Route::post('gestiones/subir','ScriptController@importarScript')->name('gestiones.importarScript');
	Route::resource('gestiones','GestionesController');



});