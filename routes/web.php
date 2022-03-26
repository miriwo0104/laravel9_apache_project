<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilePostController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


/* Route::post('/api/file_post', function(){
    return 'OK';
}); */
Route::post('/api/file_post', [FilePostController::class, 'filePost']);
Route::get('/api/get_test', function(){
    return 'OK';
});