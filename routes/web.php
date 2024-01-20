<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TascaController;
use App\Http\Controllers\ProjecteController;
use App\Models\Tasca;
use App\Models\Projecte;

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
    return redirect('projecte');
});
Route::resource("projecte.tascas", TascaController::class);
Route::resource("projecte", ProjecteController::class);
