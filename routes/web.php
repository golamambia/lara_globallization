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
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes(['verify' => true]);

/***************** Clear Cache *****************/
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

/*Admin Route Start*/
/*Authentication*/

Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showLogin']);
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'doLogin']);
Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'doLogout']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);


Route::group(['middleware' => ['auth']], function () {
/*Settings*/
Route::get('/admin/settings', [App\Http\Controllers\SettingsController::class, 'settings']);
Route::post('/admin/settings', [App\Http\Controllers\SettingsController::class, 'update']);
Route::get('/admin/settings/delete/{key}', [App\Http\Controllers\SettingsController::class, 'delete']);

/*Emailtemplate*/
Route::get('/admin/emailtemplate', [App\Http\Controllers\EmailtemplateController::class, 'emailtemplate']);
Route::post('/admin/emailtemplate', [App\Http\Controllers\EmailtemplateController::class, 'update']);

/*User*/
Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/admin/user/customer', [App\Http\Controllers\UserController::class, 'customer']);
Route::get('/admin/user/add', [App\Http\Controllers\UserController::class, 'add']);
Route::post('/admin/user/add', [App\Http\Controllers\UserController::class, 'insert']);
Route::get('/admin/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/admin/user/update', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/admin/user/view/{id}', [App\Http\Controllers\UserController::class, 'view']);
Route::get('/admin/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);
Route::get('/admin/user/status/{id}/{status}', [App\Http\Controllers\UserController::class, 'status']);

/*Page*/
Route::get('/admin/page', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/admin/page/add', [App\Http\Controllers\PageController::class, 'add']);
Route::post('/admin/page/add', [App\Http\Controllers\PageController::class, 'insert']);
Route::get('/admin/page/edit/{id}', [App\Http\Controllers\PageController::class, 'edit']);
Route::post('/admin/page/update', [App\Http\Controllers\PageController::class, 'update']);
Route::get('/admin/page-extra/delete/{id}', [App\Http\Controllers\PageController::class, 'page_extra_remove_image']);
Route::get('/admin/page-extra/content-delete/{id}', [App\Http\Controllers\PageController::class, 'page_extra_remove']);
Route::get('/admin/page/delete/{id}', [App\Http\Controllers\PageController::class, 'delete']);

/*Service*/
Route::get('/admin/service', [App\Http\Controllers\PageController::class, 'service']);
Route::get('/admin/service/add', [App\Http\Controllers\PageController::class, 'serviceadd']);
Route::post('/admin/service/add', [App\Http\Controllers\PageController::class, 'serviceinsert']);
Route::get('/admin/service/edit/{id}', [App\Http\Controllers\PageController::class, 'serviceedit']);
Route::post('/admin/service/update', [App\Http\Controllers\PageController::class, 'serviceupdate']);

/*Testimonial*/
Route::get('/admin/testimonial', [App\Http\Controllers\TestimonialController::class, 'index']);
Route::get('/admin/testimonial/add', [App\Http\Controllers\TestimonialController::class, 'add']);
Route::post('/admin/testimonial/add', [App\Http\Controllers\TestimonialController::class, 'insert']);
Route::get('/admin/testimonial/edit/{id}', [App\Http\Controllers\TestimonialController::class, 'edit']);
Route::post('/admin/testimonial/update', [App\Http\Controllers\TestimonialController::class, 'update']);
Route::get('/admin/testimonial/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'delete']);
Route::get('/admin/testimonial/status/{id}/{status}', [App\Http\Controllers\TestimonialController::class, 'status']);
Route::get('/admin/testimonial/file-destroy/{id}', [App\Http\Controllers\TestimonialController::class, 'file_destroy']);

/*Country*/
Route::get('/admin/country', [App\Http\Controllers\CountryController::class, 'index']);
Route::get('/admin/country/add', [App\Http\Controllers\CountryController::class, 'add']);
Route::post('/admin/country/add', [App\Http\Controllers\CountryController::class, 'insert']);
Route::get('/admin/country/edit/{id}', [App\Http\Controllers\CountryController::class, 'edit']);
Route::post('/admin/country/update', [App\Http\Controllers\CountryController::class, 'update']);
Route::get('/admin/country/delete/{id}', [App\Http\Controllers\CountryController::class, 'delete']);
Route::get('/admin/country/status/{id}/{status}', [App\Http\Controllers\CountryController::class, 'status']);
Route::get('/admin/country/file-destroy/{id}', [App\Http\Controllers\CountryController::class, 'file_destroy']);

});



/*Front-End Route Start*/

Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);
// Route::get('/online-user', [App\Http\Controllers\UserController::class, 'onlineUser']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/404', [App\Http\Controllers\PageController::class, 'not_found']);
Route::post('/contact', [App\Http\Controllers\PageController::class, 'contactform']);


Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'ShowPage']);

