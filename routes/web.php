<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'sum']);

Route::get('/maram', [UserController::class, 'maram']);

Route::get('/home', function(){
    return 'HOME PAGE';
});

Route::view('/view','index');

Route::get('/men', function(){
    return 'This page show <span style = " color: red"> All products </span>';
});

Route::get('/men/style', function(){
    $filter= request('style'); //? to request style
    if (isset($filter)){
        return 'This page show <span style = " color: red"> '.$filter.' </span>';
    }
    return 'This page show <span style = " color: red"> All product </span>';

});

