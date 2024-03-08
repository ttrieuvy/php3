<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerNews as News;

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
Route::get('/', function(){
    return view('trangchu');
});
Route::get('/tin-tuc', [News::class, 'news']);
Route::get('bai-viet/{id}', [News::class, 'content']);
Route::get('/lien-he', [News::class, 'contact']);