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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'namespace' => 'Modules\Payment'],function() {

    Route::post('/verify-transaction', 'PaymentController@verifyTransaction');
    Route::post('/charge-card', 'PaymentController@rechargeCustomer');

});
/****************************************************************
 * User routes
 *
 ******************************************************************/

Route::group(['prefix'=>'user', 'namespace' => 'Modules\User'],function(){
    Route::post('/signup','AuthController@signup');
    Route::post('/signin','AuthController@signin');
    Route::put('/update','UserController@Update');
    Route::get('/forgotpassword','UserController@ForgotPassword');
    Route::put('/updateuserrecognition','UserController@UpdateUserRecognition');

});

/****************************************************************
 * Car routes
 *
 ******************************************************************/

Route::group(['prefix'=>'user', 'namespace' => 'Modules\Car'],function(){
    Route::post('/signup','AuthController@signup');

});

/****************************************************************
 * Payment/Renting routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Modules\Home'],function(){

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
    Route::get('/cars', 'HomeController@showCars')->name('showCars');
    Route::get('/cars/{id}', 'HomeController@showSingleCar')->name('showCar');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/service', 'HomeController@service')->name('service');


    Route::get('/uploadVehicle', 'HomeController@uploadVehicle')->name('uploadVehicle');

    Route::post('/uploadImage', 'HomeController@uploadImage')->name('uploadImage');

    Route::post('/signup','AuthController@signup');

});

/****************************************************************
 * Admin routes
 *
 ******************************************************************/

Route::group(['prefix'=>'', 'namespace' => 'Modules\Admin'],function(){

    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/edit-car', 'AdminController@editCar')->name('edit-car');

    Route::get('/add-car', 'AdminController@addCar')->name('add-car');
    Route::post('/save-car', 'AdminController@saveCar')->name('save-car');

    Route::get('/view-cars', 'AdminController@manageCar')->name('view-cars');
    Route::get('/view-cars/{id}', 'AdminController@carDetails')->name('view-cars/{id}');

    Route::get('/view-users', 'AdminController@manageUsers')->name('view-users');
    Route::get('/view-users/{id}', 'AdminController@userDetails')->name('view-users/{id}');

    Route::get('/view-payments', 'AdminController@managePayment')->name('view-payments');
    Route::get('/view-payments/{id}', 'AdminController@paymetDetails')->name('view-payments/{id}');

});
