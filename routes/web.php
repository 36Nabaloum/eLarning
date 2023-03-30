<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!



App\Http\Controllers\postControler@index //permetd'appeler le controler avec le namespace directement
|
*/

Route::get('/', [postControler::class,'index']);


?>
