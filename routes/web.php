<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CampaignController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Models\Campaign;

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

Route::resource('campaigns',CampaignController::class)->middleware(['auth']);

Route::get('campaigns/add-tags/{campaign_id}',[CampaignController::class,'add_tags'])
    ->middleware(['auth'])
    ->name('campaigns.add-tags');

Route::get('/campaigns/add-tags/{campaign_id}',[CampaignController::class,'add_tags_form'])
    ->middleware(['auth']);

Route::post('/campaigns/add-tags/{campaign_id}/{tag_id}',[CampaignController::class,'add_tag'])
    ->middleware(['auth']);

Route::post('/campaigns/remove-tags/{campaign_id}/{tag_id}',[CampaignController::class,'remove_tag'])
    ->middleware(['auth']);

Route::get('/tags/search',[TagsController::class,'searchTags']);

Route::get('/campaigns/add-billing/{campaign_id}', function($campaign_id){
    $campaign = Campaign::find($campaign_id);
    return view('admin.set-billing')->with('campaign',$campaign);
})->middleware(['auth'])->name('campaigns.billing');

Route::get('/campaigns/edit-billing/{campaign_id}', function($campaign_id){
    $campaign = Campaign::find($campaign_id);
    return view('admin.edit-billing')->with('campaign',$campaign);
})->middleware(['auth'])->name('campaigns.edit-billing');

Route::get('/campaigns/edit-tags/{campaign_id}', function($campaign_id){
    $campaign = Campaign::find($campaign_id);
    return view('admin.edit-tags')->with('campaign',$campaign);
})->middleware(['auth'])->name('campaigns.edit-tags');

Route::post('/campaigns/add-billing/{campaign_id}',[CampaignController::class,'add_billing'])
    ->middleware(['auth'])->name('campaigns.billing.submit');

Route::post('/campaigns/edit-billing/{campaign_id}',[CampaignController::class,'add_billing'])
    ->middleware(['auth'])->name('campaigns.billing.edit');

Route::put('/campaigns/update-image/{campaign_id}',[CampaignController::class,'update_image'])
    ->middleware(['auth'])->name('campaigns.update-image');

Route::put('/users/update->profile',[UsersController::class,'update_profile'])
    ->middleware(['auth'])->name('users.update-profile');
