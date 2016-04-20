<?php



get('/', function () {
	    return view('website.Index');

	 });

get('/registrar-usuario',function(){
		return view('website.registrar-usuario');
	});



get('/iniciarSesion',function(){
		return view('webSite.iniciar-sesion');
	});

post('/registro','registrarUsuario@store');
get('/iniciar-sesion','LoginController@index');
post('/login', 'loginController@store');


Route::group(['middleware' => 'admin'], function()
{
    get('/administrador','adminstradorController@index'); // Vista de inicio
    get('/logout', 'adminstradorController@logout');
    get('/Administrador/mascotas','RegistrarmascotasController@index');
     post('/registroMascota', 'RegistrarmascotasController@store');
});

get('/mascotasRegistradas/{id}', 'RegistrarmascotasController@show');
