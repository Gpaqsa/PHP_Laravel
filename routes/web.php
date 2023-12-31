<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\http\Controllers\QuizController;
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

Route::get('/', [QuizController::class, 'index']);

Route::get('quizForm/{id?}', [QuizController::class, 'index']);
Route::post('/quizForm', [QuizController::class, 'submitForm']);




Route::middleware(['custom'])->group(function () {
   
    Route::get('/example', 'ExampleController@index');

});
