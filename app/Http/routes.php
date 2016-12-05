<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware'=>'web'], function(){
    Route::get('/', function(){
        return view('auth.login');
    });
});
Route::group(['middleware' => ['web','su']], function () {
    Route::auth();
    //rutas de tesista
    Route::get('tesista','TesistaController@index');
    Route::get('crearTesista','TesistaController@create'); //te redirige a la pantalla de crear datos
    Route::post('tesistas','TesistaController@store'); //guarda los datos y te redirige al index
    Route::get('tesista/editar/{id}','TesistaController@edit'); //Te redirige a la vista editar con los datos de existir luego de darle al boton
    Route::post('actualizarTesista/{id}','TesistaController@update'); //guarda los datos modificados y te redirige al index
    Route::delete('tesista/eliminar/{id}','TesistaController@destroy');
    //Rutas para usuarios
    Route::get('usuario','UserController@index');
    Route::get('crearUsuario','UserController@create');
    Route::post('usuarios','UserController@store');
    Route::get('usuario/editar/{id}','UserController@edit');
    Route::post('actualizarUsuario/{id}','UserController@update');
    Route::delete('usuario/eliminar/{id}','UserController@destroy');
//Rutas para representante
    Route::get('representante','RepresentanteController@index');
    Route::get('crearRepresentante','RepresentanteController@create');
    Route::post('representantes','RepresentanteController@store');
    Route::get('representante/editar/{id}','RepresentanteController@edit');
    Route::post('actualizarRepresentante/{id}','RepresentanteController@update');
    Route::delete('representante/eliminar/{id}','RepresentanteController@destroy');
//Rutas para actividad
    Route::get('actividad','ActividadController@index');
    Route::get('crearActividad','ActividadController@create');
    Route::post('actividades','ActividadController@store');
    Route::get('actividad/editar/{id}','ActividadController@edit');
    Route::post('actualizarActividad/{id}','ActividadController@update');
    Route::delete('actividad/eliminar/{id}','ActividadController@destroy');
//rutas para sector de actividades
    Route::get('sectorActividad','SectorActividadController@index');
    Route::get('crearSectorActividad','SectorActividadController@create');
    Route::post('sectorActividades','SectorActividadController@store');
    Route::get('sectorActividad/editar/{id}','SectorActividadController@edit');
    Route::post('actualizarSectorActividad/{id}','SectorActividadController@update');
    Route::delete('sectorActividad/eliminar{id}','SectorActividadController@destroy');
//rutas para Institucion
    Route::get('institucion','InstitucionController@index');
    Route::post('institucion/registerform','InstitucionController@renderform');
    Route::get('institucion/crear','InstitucionController@create');
    Route::post('institucion/guardar','InstitucionController@store');
    Route::get('institucion/editar/{id}','InstitucionController@edit');
    Route::post('institucion/edita/{id}','InstitucionController@update');
    Route::get('institucion/eliminar/{id}','InstitucionController@destroy');
    Route::post('institucion/buscar','InstitucionController@buscar');
//rutas para Departamento
    Route::get('departamento','DepartamentoController@index');
    Route::get('departamento/crear','DepartamentoController@create');
    Route::post('departamento/guardar','DepartamentoController@store');
    Route::get('departamento/editar/{id}','DepartamentoController@edit');
    Route::post('departamento/edita/{id}','DepartamentoController@update');
    Route::get('departamento/eliminar/{id}','DepartamentoController@destroy');
    Route::post('departamento/buscar','DepartamentoController@buscar');
//rutas para muestra
    Route::get('muestra','MuestraController@index');
    Route::get('muestra/crear','MuestraController@create');
    Route::post('muestra/guardar','MuestraController@store');
    Route::post('muestra/ajaxvalidar','MuestraController@ajaxvalidar');
    Route::post('muestra/ajaxborrarimg','MuestraController@borrar_img');
    Route::post('muestra/ajaxrelacionesact','MuestraController@relacionesact');
    Route::post('muestra/buscar','MuestraController@buscarbdd');
    Route::post('muestra/buscarfiltro','MuestraController@buscar_filtros');
    Route::get('muestra/buscarfiltro','MuestraController@buscar_filtros');
    Route::get('muestra/lista','MuestraController@listar');
    Route::get('muestra/editar/{id}','MuestraController@edit');
    Route::get('muestra/detalles/{id}','MuestraController@details');
    Route::post('muestra/edita/{id}','MuestraController@update');
    Route::post('muestra/ajaxborrarsingle','MuestraController@eliminarsingle');
    Route::delete('muestra/eliminar{id}','MuestraController@destroy');
    Route::post('muestra/pdf','MuestraController@generate_singlepdf');
});
Route::group(['middleware'=>['web','admin']],function() {
    Route::auth();
    //rutas para sector de actividades
    Route::get('sectorActividad','SectorActividadController@index');
    Route::get('crearSectorActividad','SectorActividadController@create');
    Route::post('sectorActividades','SectorActividadController@store');
    Route::get('sectorActividad/editar/{id}','SectorActividadController@edit');
    Route::post('actualizarSectorActividad/{id}','SectorActividadController@update');
    Route::delete('sectorActividad/eliminar{id}','SectorActividadController@destroy');
//rutas para Departamento
    Route::get('departamento','DepartamentoController@index');
    Route::get('departamento/crear','DepartamentoController@create');
    Route::post('departamento/guardar','DepartamentoController@store');
    Route::get('departamento/editar/{id}','DepartamentoController@edit');
    Route::post('departamento/edita/{id}','DepartamentoController@update');
    Route::get('departamento/eliminar/{id}','DepartamentoController@destroy');
    Route::post('departamento/buscar','DepartamentoController@buscar');
    //rutas para Institucion
    Route::get('institucion','InstitucionController@index');
    Route::get('institucion/crear','InstitucionController@create');
    Route::post('institucion/guardar','InstitucionController@store');
    Route::get('institucion/editar/{id}','InstitucionController@edit');
    Route::post('institucion/edita/{id}','InstitucionController@update');
    Route::get('institucion/eliminar/{id}','InstitucionController@destroy');
    Route::post('institucion/buscar','InstitucionController@buscar');
});
Route::group(['middleware'=>['web','oper']],function(){
    Route::auth();
    //Rutas para representante
    Route::get('representante','RepresentanteController@index');
    Route::get('crearRepresentante','RepresentanteController@create');
    Route::post('representantes','RepresentanteController@store');
    Route::get('representante/editar/{id}','RepresentanteController@edit');
    Route::post('actualizarRepresentante/{id}','RepresentanteController@update');
    Route::delete('representante/eliminar/{id}','RepresentanteController@destroy');
    //rutas de tesista
    Route::get('tesista','TesistaController@index');
    Route::get('crearTesista','TesistaController@create'); //te redirige a la pantalla de crear datos
    Route::post('tesistas','TesistaController@store'); //guarda los datos y te redirige al index
    Route::get('tesista/editar/{id}','TesistaController@edit'); //Te redirige a la vista editar con los datos de existir luego de darle al boton
    Route::post('actualizarTesista/{id}','TesistaController@update'); //guarda los datos modificados y te redirige al index
    Route::delete('tesista/eliminar/{id}','TesistaController@destroy');
//Rutas para actividad
    Route::get('actividad','ActividadController@index');
    Route::get('crearActividad','ActividadController@create');
    Route::post('actividades','ActividadController@store');
    Route::get('actividad/editar/{id}','ActividadController@edit');
    Route::post('actualizarActividad/{id}','ActividadController@update');
    Route::delete('actividad/eliminar/{id}','ActividadController@destroy');
    //rutas para muestra
    Route::get('muestra','MuestraController@index');
    Route::get('muestra/crear','MuestraController@create');
    Route::post('muestra/guardar','MuestraController@store');
    Route::post('muestra/ajaxvalidar','MuestraController@ajaxvalidar');
    Route::post('muestra/ajaxborrarimg','MuestraController@borrar_img');
    Route::post('muestra/ajaxrelacionesact','MuestraController@relacionesact');
    Route::post('muestra/buscar','MuestraController@buscarbdd');
    Route::post('muestra/buscarfiltro','MuestraController@buscar_filtros');
    Route::get('muestra/buscarfiltro','MuestraController@buscar_filtros');
    Route::get('muestra/lista','MuestraController@listar');
    Route::get('muestra/editar/{id}','MuestraController@edit');
    Route::get('muestra/detalles/{id}','MuestraController@details');
    Route::post('muestra/edita/{id}','MuestraController@update');
    Route::delete('muestra/eliminar{id}','MuestraController@destroy');
    Route::post('muestra/pdf','MuestraController@generate_singlepdf');
});
//Test rutes
    Route::get('test','TestController@index');
    Route::post('test/registerform','TestController@renderform');
    Route::post('test/crear','TestController@crear');

    //Instituciones

    Route::get('institucion','InstitucionController@index');
    Route::post('institucion/registerform','InstitucionController@renderform');
    Route::get('institucion/crear','InstitucionController@create');
    

Route::get('prueba', function(){return "hola";});
