<?php

use App\Note;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes/', 'NotesController@index');

Route::get('notes/create', 'NotesController@create');
Route::post('notes', 'NotesController@store');

Route::get('notes/{note}', 'NotesController@show')->where('note', '[0-9]+');

/*
Route::get('notes/{note}', function ($note) {

    return $note;
});
*/

// Para condicionar vistas
/*Route::get('notes/{note}', function ($note) {
    return $note;
})->where('note', '[0-9]+');*/


// Para deslegar API's
/*Route::get('notes/create', function () {

    return [
        'notes' => 'create',
        'hola' => 'do'
    ];
});*/
