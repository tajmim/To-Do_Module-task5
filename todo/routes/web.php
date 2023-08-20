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

use App\Http\Controllers\TaskController;
 
Route::get('/', [TaskController::class, 'index']);
Route::post('/add_task', [TaskController::class, 'add_task']);
Route::get('/delete_task/{id}', [TaskController::class, 'delete_task']);