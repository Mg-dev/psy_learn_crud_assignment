<?php

use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;

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

Route::get('/', function (Request $request) {
    $users = User::get();
    // dd($users);
    return view('welcome',compact('users'));
})->name('welcome');

Route::get('/create', [UserController::class,'createPage'])->name('create-page');
Route::get('/edit/{id}', [UserController::class,'editPage'])->name('edit-page');


Route::post('/create', [UserController::class,'create'])->name('create');
Route::post('/update/{id}', [UserController::class,'update'])->name('update');
Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
