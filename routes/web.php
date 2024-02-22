<?php

use App\Http\Controllers\DilanController;
use App\Http\Controllers\KanishkaController;
use App\Models\Dilan;
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

// Route::get('/', function () {
//    return view('welcome');
//     return dilan::all(); 
//     me route ekath pahala widiyatama funtion ekak hadala call karanna puluwan.
// });
Route::get('/Tindex', [KanishkaController::class, 'index']);
Route::get('/Tstore', [KanishkaController::class, 'store']);

// Route::get('/', [DilanController::class, 'index']);
Route::get('/insert', [DilanController::class, 'store']);

// Route::get('/insert', function () {
//    $abc= dilan::create([
//         'frist name' => "nimal",
//         'address' => "nimal Address",
//         'tp' => "222"
//     ]);

//     return $abc;
// });

Route::resource('dilan', DilanController::class);