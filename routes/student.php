<?php
Route::get('/', 'DashboardController@index')->name('student.dashboard');
 
Route::get('/', 'Auth\LoginController@index')->name('student.home');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('student.login.form');
Route::post('login', 'Auth\LoginController@login')->name('student.login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('student.logout.get');
Route::group(['middleware' => 'student'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('student.dashboard');
    Route::group(['prefix' => 'student'], function() {
        Route::get('add', 'StudentController@create')->name('student.student.form');
        Route::get('view', 'StudentController@index')->name('student.view');
         Route::get('image/{image}', 'StudentController@image')->name('student.student.image');
        Route::post('image/{student}/update', 'StudentController@imageUpdate')->name('student.student.profilepic.update');
        // Route::get('view', 'StudentController@show')->name('student.view');

        // Route::get('{student}/edit', 'StudentController@edit')->name('student.student.edit');
        // Route::post('add', 'StudentController@store')->name('student.student.post');
        // Route::get('list', 'StudentController@index')->name('student.student.list');

    });
    // ------------------------transport-------------------------------------------
     Route::group(['prefix' => 'attendance'], function() {
         
        Route::get('view', 'StudentAttendanceController@index')->name('student.attendance.view');         
    });
     //------------------------news-------------------------------------------

     Route::group(['prefix' => 'news'], function() {
        
        Route::get('list', 'NewsController@index')->name('student.news.list');        
   
      });
     
     //------------------------Homework-------------------------------------------
     Route::group(['prefix' => 'homework'], function() {       
        Route::get('list', 'HomeWorkController@index')->name('student.homework.list');
       
        Route::get('{view}/view', 'HomeWorkController@show')->name('student.homework.view');
         
    });
      Route::group(['prefix' => 'holidayhomework'], function() {
         
        Route::get('list', 'HolidayHomeworkController@index')->name('student.holidayhomework.list');
        Route::get('{download}/download', 'HolidayHomeworkController@download')->name('student.holidayhomework.download');

    });
          Route::group(['prefix' => 'feedetails'], function() {
         
        Route::get('list', 'StudentController@feedetails')->name('student.feedetails.list');
     
         
    });
     
});
