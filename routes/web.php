<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
//welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/test', [TestController::class, 'index']);

// Route::get('/', function () {
//     return view('app');
// });

// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');

