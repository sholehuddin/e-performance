<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
//Route::get('authenticate', 'Auth\AuthController@postLogin');
Route::post('authenticate', array('as' => 'authenticate', 'uses' => 'Auth\AuthController@postLogin'));

Route::get('logout', array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'));

//Routes Sidebar
//Input Rencana
Route::get('inprenstra', 'Input\Rencana\InputRenstraController@index');
Route::get('inprakin', 'Input\Rencana\InputRakinController@index');
Route::get('inprakeg', 'Input\Rencana\InputRakegController@index');
Route::get('inprangga', 'Input\Rencana\InputRanggaController@index');

//Input Realisasi
Route::get('inprelkin', 'Input\Realisasi\InputRelkinController@index');
Route::get('inprelkeg', 'Input\Realisasi\InputRelkegController@index');

//Preview Perencana
Route::get('prevrenstra', 'Preview\Rencana\PreviewRenstraController@index');
Route::get('prevpkin', 'Preview\Rencana\PreviewPenetapanKinerjaController@index');
Route::get('prevpkeg', 'Preview\Rencana\PreviewPerencanaanKegiatanController@index');

//Preview Realisasi
Route::get('prevcakeg', 'Preview\Realisasi\PreviewCapaianKegiatanController@index');
Route::get('prevrelkang', 'Preview\Realisasi\PreviewRealisasiAnggaranController@index');
Route::get('prevcpkin', 'Preview\Realisasi\PreviewCapaianPenetapanKinerjaController@index');

//Route::get('auth/signin', 'LoginController@index');

Route::controllers([
	'auth' 			=> 'Auth\AuthController',
	'password' 		=> 'Auth\PasswordController',
]);

Route::post('Auth/AuthController', function()
{
	var_dump($_POST);
}
);
