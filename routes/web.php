<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvisionServer;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting', function () {
    return view('greeting');
});
Route::get('/about',function(){ return view('about');});

Route::prefix('gs')->group(function () {
    Route::get('/about', function () {
        return view('about',['name' => 'Prefix gs/']);
    });
    Route::get('/greeting', function () {
        return view('greeting',['name' => 'Prefix gs/']);
    });
});
Route::get('/server',[ProvisionServer::class, 'ki']);
Route::get('/server/koi',[ProvisionServer::class, 'koi']);
Route::get('/server/server/server/server/server/server/server',[ProvisionServer::class, 'kire'])->name('name_route');
Route::get(md5('/server/server/server/server/server/server/server'),[ProvisionServer::class, 'kire'])->name('name_route2');