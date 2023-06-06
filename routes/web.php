<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RadioController;
use App\Http\Controllers\PopController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ValidateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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
Route::get('/cookie/set',[CookieController::class, 'setCookie']);
Route::get('/cookie/get',[CookieController::class, 'setCookie']);

Route::get('/register',[UserController::class,'index']);
Route::post('/register',[UserController::class,'addUser']);
Route::get('/users',[UserController::class,'users']);


//facades route
Route::get('/load', function () {       //responce using facades
    $filePath = storage_path('app/file.txt');
    return Response::download($filePath);
});

//master blade template
Route::get('/contact', function () {  
    return view('contact');  
});

//@{{name}}  and {{name}}
Route::get('/example', [ExampleController::class,'showExample']);


Route::get('/timestamp',[DirectoryController::class,'timestamp']);//Timestamp Directives

Route::get('/index', [FormController::class, 'index'])->name('form');//input value
Route::post('/store',[FormController::class,'store'])->name('store');//of two decimal place

Route::get('/rb', [RadioController::class, 'radio'])->name('radiobutton');//radiobutton
Route::post('/add', [RadioController::class, 'add'])->name('rb');

Route::get('/pop', [PopController::class, 'pop'])->name('popup');//for popup button
Route::post('/up', [PopController::class, 'up'])->name('pop');

Route::get('/hello',[HelloController::class,'hello']);

Route::get('/register',[ValidateController::class,'showRegistrationForm']);//validating using request
Route::post('/register',[ValidateController::class,'register']);

