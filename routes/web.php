<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/sendemail', 'HomeController@sendEmail')->name('email');

Route::get('/gallery', 'GalleryControllers@index')->name('gallery');
Route::post('/gallery/categories', 'GalleryControllers@ImageGalleryCategories')->name('gallery.cat');
Route::get('/gallery/image-gallery', 'GalleryControllers@getImageGallery')->name('gallery.img');

Route::get('/video', 'VideoControllers@index')->name('video');
Route::get('/portfolio', 'PortfolioControllers@index')->name('portfolio');
Route::get('/portfolio-data', 'PortfolioControllers@dataPortfolio')->name('get.portfolio');

Route::group(['middleware' => 'login'], function(){
    Route::get('/access/login', 'LoginControllers@index')->name('login.form');
    Route::get('/access/forgot', 'ForgotControllers@index')->name('forgot');

    Route::get('/reset/{email}/{token}', 'ForgotControllers@resetpass');
    Route::post('/reset/submit', 'ForgotControllers@resetsubmit')->name('reset.submit');

    Route::post('/access/forgot/submit', 'ForgotControllers@forgotsubmit')->name('forgot.submit');
    Route::post('/access/login/submit', 'LoginControllers@submitlogin')->name('login.submit');
});

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', 'DashboardControllers@index')->name('dashboard');

    Route::get('/dashboard/portofolio', 'DashboardControllers@portofolio')->name('owner.portofolio');
    Route::get('/dashboard/get-portofolio', 'DashboardControllers@getPortofolio')->name('owner.get.portofolio');
    Route::post('/dashboard/edit-portofolio', 'DashboardControllers@editPortofolio')->name('owner.edit.portofolio');
    Route::post('/dashboard/update-portofolio', 'DashboardControllers@updatePortofolio')->name('owner.update.portofolio');

    Route::get('/dashboard/image-gallery', 'DashboardControllers@getImageGallery')->name('img');
    Route::post('/dashboard/upload', 'DashboardControllers@upload')->name('upload');

    Route::post('/dashboard/categories', 'DashboardControllers@categories')->name('categories');
    Route::post('/dashboard/delete', 'DashboardControllers@delete')->name('delete');

    Route::get('/dashboard/editpass', 'DashboardControllers@editpass')->name('change');
    Route::post('/dashboard/updatepass', 'DashboardControllers@updatepass')->name('update');
    Route::get('/logout', 'LoginControllers@logout')->name('logout');
});