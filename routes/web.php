<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
	return view ('auth/login');
});

Route::get('registrar',function(){
	return view ('auth/registrar');
});

Route::get('/perfil', function () {
        return view ('commons/perfil');
    });
Route::get('/configuracion', function () {
        return view ('commons/configuracion');
    });

Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@index');

    Route::get('/personal', 'AdminController@showStaff');
    Route::get('/personal/editar/{dni}', 'AdminController@editStaff');
    Route::get('/personal/actualizar/{dni}', 'AdminController@updateStaff');
    Route::get('/personal/cambiarEstado/{dni}', 'AdminController@changeStateStaff');
		Route::get('/crearPersonal', 'AdminController@createPersonal');
		Route::post('/crearPersonal','AdminController@createPersonalForm');

		Route::get('/alumnos', 'AdminController@showAlumnos');
		Route::get('/alumnos/editar/{dni}', 'AdminController@editStudent');
		Route::get('/alumnos/actualizar/{dni}', 'AdminController@updateStudent');
		Route::get('/alumnos/cambiarEstado/{dni}', 'AdminController@changeStateStudent');
		Route::get('/crearAlumnos', 'AdminController@createStudent');


		Route::get('/tutores', 'AdminController@showTutors');
		Route::get('/alumnos/cambiarEstado/{dni}', 'AdminController@changeStateTutor');
		Route::get('/crearTutor', 'AdminController@createTutor');
		Route::post('/crearTutor','AdminController@createTutorForm');
        Route::get('/asociarTutor','AdminController@verAsociarTutor');
        Route::post('/asociarTutor','AdminController@crearAsociarTutor');


		Route::get('/rolesypermisos', 'AdminController@setearPermisos');
		Route::post('/rolesypermisos', 'AdminController@actualizarPermisos');
		Route::get('/consultarPermisos', 'AdminController@consultarPermisos');

	Route::get('/escuelas', 'EscuelaController@index');
	Route::get('/escuelas/show/{id}', 'EscuelaController@show');

	Route::get('/materias', 'MateriaController@index');
	Route::get('/materias/show/{id}', 'MateriaController@show');

  Route::resource('/cursos', 'CursoController');
	Route::get('/cursos', 'CursoController@index');
	Route::get('/cursos/show/{id}', 'CursoController@show');
	Route::get('/crear_curso', 'CursoController@createCurse');
	Route::post('/crear_curso', 'CursoController@createCurseForm');
	Route::get('/cursos/cambiar_curso/{id}', 'CursoController@changeCurse');

    Route::resource('/usuarios', 'UsuarioController');
    Route::resource('/materias', 'MateriaController');

    Route::resource('/roles', 'RoleController');
    Route::resource('/escuelas', 'EscuelaController');
});

Route::prefix('tutor')->group(function () {

    Route::get('/', function () {
        return view ('parents/index');
    });

    Route::resource('/asistencias', 'AsistenciaController' );

    Route::get('/justificativo',function(){
		return view ('parents/justificativo');
	});

    Route::get('/boletin', function () {
        return view ('commons/boletin');
    });

    Route::get('/calificaciones', 'CalificacionController@verCalificacionTutor');



    Route::get('/firmar', 'MensajeController@verMensajesNoFirmados');


    Route::get('/calendario', function () {
        return view ('commons/calendario');
    });

    Route::resource('/mensajes', 'MensajeController');

    Route::get('/comportamiento/distinciones', 'ComportamientoController@verDistincionesTutor');

    Route::get('/comportamiento/observaciones', 'ComportamientoController@verObservacionesTutor');

    Route::get('/comportamiento/sanciones', 'ComportamientoController@verSancionesTutor');
    
});

Route::prefix('alumno')->group(function () {


    Route::get('/', function () {
        return view ('students/index');
    });


    Route::get('/boletin', function () {
        return view ('commons/boletin');
    });

    Route::get('/calificaciones', 'CalificacionController@verCalificacionAlumno');

    Route::get('/calendario', function () {
        return view ('commons/calendario');
    });

    Route::resource('/mensajes', 'MensajeController');

    Route::get('/comportamiento/distinciones', 'ComportamientoController@verDistincionesAlumno');

    Route::get('/comportamiento/observaciones', 'ComportamientoController@verObservacionesAlumno');

    Route::get('/comportamiento/sanciones', 'ComportamientoController@verSancionesAlumno');

});

Route::prefix('personal')->group(function () {


    Route::get('/', function () {
        return view ('schools/index');
    });

    Route::resource('/mensajes', 'MensajeController');

    Route::get('/calificaciones', 'CalificacionController@create');

    Route::resource('/evaluaciones', 'EvaluacionController');

    Route::resource('/temario', 'TemarioController');

    Route::resource('/asistencias', 'AsistenciaController');

    Route::resource('/calendario', 'CalendarioController');

});




Auth::routes();
