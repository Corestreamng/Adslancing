<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CampaignController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth']);

require __DIR__.'/auth.php';

Route::get('/user/dashboard', function (){
    return view('admin.home');
})->middleware(['auth']);

Route::get('/user/{user_id}', function (){
    return view('admin.profile');
})->middleware(['auth']);

Route::resource('campaigns',CampaignController::class);
