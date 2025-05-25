<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name/{name?}',function(string $name){
    if($name)
       return view('myName');
    else
        return '<h1>No Name Found.</h1>';
}); 

Route::view('/newage',"age")->name('age');
Route::redirect('age','newage');

Route::prefix('page')->group(function(){
    Route::get('/about', function () {
        return '<h1>About</h1>';
    });
    Route::get('/gallary', function () {
        return '<h1>Gallay</h1>';
    });
    Route::get('/Contact', function () {
        return '<h1>COntact</h1>';
    });
});

