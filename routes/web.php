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


 
Route::get('/', 'Front\HomeController@index')->name('front.home');
 
Route::group(['prefix' => 'about'], function() {
    Route::get('about-company', 'Front\HomeController@about')->name('front.about');
    Route::get('company-profile', 'Front\HomeController@profile')->name('front.company-profile');    
    Route::get('our-journey', 'Front\HomeController@journey')->name('front.our.journey');    
    Route::get('managing-director', 'Front\HomeController@managing')->name('front.managing-director');    
    Route::get('executive-director', 'Front\HomeController@executive')->name('front.executive-director');    

});
Route::group(['prefix' => 'division'], function() {
    Route::get('electrical-division', 'Front\HomeController@electrical')->name('front.electrical-division');
    Route::get('software-division', 'Front\HomeController@software')->name('front.software-division');    
    Route::get('spm-division', 'Front\HomeController@spm')->name('front.spm-division');    
      

});
Route::get('services', 'Front\HomeController@services')->name('front.services');
Route::get('clients', 'Front\HomeController@clients')->name('front.clients');

// Route::group(['prefix' => 'gallery'], function() { 
// Route::get('/', 'Front\GalleryController@index')->name('front.gallery');
// Route::get('new-year', 'Front\HomeController@newyear')->name('front.new-year');
// Route::get('teej-rakhi', 'Front\HomeController@teej')->name('front.teej-rakhi');
// Route::get('vanmahotsav', 'Front\HomeController@vanmahotsav')->name('front.vanmahotsav');
// Route::get('janamashtami', 'Front\HomeController@janamashtami')->name('front.janamashtami');
// Route::get('annualfunction', 'Front\HomeController@annualfunction')->name('front.annualfunction');
    
// });

Route::get('enquiry', 'Front\EnquiryController@index')->name('front.enquiry');
Route::post('enquiry', 'Front\EnquiryController@store')->name('front.enquiry.post');

Route::get('contact', 'Front\ContactController@index')->name('front.contact');
 
Route::post('contact', 'Front\ContactController@store')->name('front.contact.post');



 
 

// Route::group(['prefix' => 'd2m-admin'], function() {
//     Route::get('/', 'Auth\LoginController@index')->name('admin.home');
// 	Route::get('auth', 'Auth\LoginController@showLoginForm')->name('admin.login');
// 	Route::post('authenticate', 'Auth\LoginController@login')->name('admin.login.post');
// 	Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout.get');

//    	Route::get('password/forget-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.forgot');
//     Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.forgetPassword.post');    
//     // seller reset password routes
//     Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//     Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.reset.post');
    
//     });

 


// Auth::routes();
// 	Route::get('/home', 'HomeController@index')->name('home');


// Route::prefix('admin')->group(function(){
// 	Route::get('/admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin');
// 	Route::get('/admin/login', 'Admin\Auth\LoginController@login')->name('admin.login.submit');
// 	Route::get('/admin', 'Admin\AdminController@index')->name('admin');
	

// });





