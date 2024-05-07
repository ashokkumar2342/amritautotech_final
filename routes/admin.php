<?php
Route::get('/', 'Auth\LoginController@index')->name('admin.home');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login.form');
Route::post('login', 'Auth\LoginController@login')->name('admin.login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout.get');
Route::group(['middleware' => 'admin'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::group(['prefix' => 'student'], function() {
        Route::get('add', 'StudentController@create')->name('admin.student.form');
        Route::get('{student}/view', 'StudentController@show')->name('admin.student.view');
        Route::get('{student}/edit', 'StudentController@edit')->name('admin.student.edit');
        Route::post('add', 'StudentController@store')->name('admin.student.post');
        Route::get('list', 'StudentController@index')->name('admin.student.list');
        Route::get('feereceipt', 'StudentController@feereceipt')->name('admin.feereceipt.view');        

        Route::get('image/{image}', 'StudentController@image')->name('admin.student.image');
        Route::post('image/{student}/update', 'StudentController@imageUpdate')->name('admin.student.profilepic.update');
        Route::group(['prefix' => 'fee'], function() {
            Route::post('pay', 'StudentController@payFee')->name('admin.student.fee.paid');
            Route::get('{studentFee}/edit', 'StudentController@studentFeeEdit')->name('admin.student.fee.edit');
            Route::post('{studentFee}/update', 'StudentController@studentFeeUpdate')->name('admin.student.fee.update');
        });
    });
    Route::group(['prefix' => 'password'], function() {         
        Route::get('/', 'ProfileController@index')->name('admin.password.change');
        Route::put('/update', 'ProfileController@update')->name('admin.changepassword.update');
    });
    Route::group(['prefix' => 'class'], function() {
        Route::get('/', 'ClassTypeController@index')->name('admin.class.list');
        Route::get('search', 'ClassTypeController@search')->name('admin.class.search');
        Route::post('add', 'ClassTypeController@store')->name('admin.class.add');
        Route::get('{classType}/edit', 'ClassTypeController@edit')->name('admin.class.edit');
        Route::post('{classType}/update', 'ClassTypeController@update')->name('admin.class.update');
        Route::get('{classType}/delete', 'ClassTypeController@destroy')->name('admin.class.delete');
    });
    Route::group(['prefix' => 'section'], function() {
        Route::get('/', 'SectionController@index')->name('admin.section.list');
        Route::get('search', 'SectionController@search')->name('admin.section.search');
        Route::post('add', 'SectionController@store')->name('admin.section.add');
        Route::get('{sectionEdit}/edit', 'SectionController@edit')->name('admin.section.edit');
        Route::post('{section}/update', 'SectionController@update')->name('admin.section.update');
        Route::get('{section}/delete', 'SectionController@destroy')->name('admin.section.delete');        
    });
    Route::group(['prefix' => 'account'], function() {
        Route::group(['prefix' => 'class-fee'], function() {
             Route::get('/', 'ClassFeeController@index')->name('admin.account.classfee.list');
            Route::post('add', 'ClassFeeController@store')->name('admin.account.classfee.add');
            Route::get('{classFee}/edit', 'ClassFeeController@edit')->name('admin.account.classfee.edit');
            Route::post('{classFee}/update', 'ClassFeeController@update')->name('admin.account.classfee.update');
            Route::get('{classFee}/delete', 'ClassFeeController@destroy')->name('admin.account.classfee.delete');
        });
    });
    Route::group(['prefix' => 'attendance'], function() {
        Route::group(['prefix' => 'student'], function() {
            Route::get('/', 'StudentAttendanceController@index')->name('admin.attendance.student.form');
        });
    });
    Route::group(['prefix' => 'route'], function() {
        Route::get('search', 'TransportController@searchRoute')->name('admin.route.search');
    });
     // ------------------------transport-------------------------------------------
     Route::group(['prefix' => 'transpoprt'], function() {
        Route::get('add', 'TransportController@index')->name('admin.transport.list');
        Route::get('search', 'TransportController@search')->name('admin.transport.search');
        Route::post('add', 'TransportController@store')->name('admin.transport.post');
        Route::get('{transport}/edit', 'TransportController@edit')->name('admin.transport.edit');
        Route::get('{transport}/delete', 'TransportController@destroy')->name('admin.transport.delete');
        Route::post('{transport}/update', 'TransportController@update')->name('admin.transport.update');         
    });
      //------------------------Homework-------------------------------------------
     Route::group(['prefix' => 'homework'], function() {
        Route::get('add', 'HomeWorkController@create')->name('admin.homework.form');
        Route::post('add', 'HomeWorkController@store')->name('admin.homework.post');
        Route::get('list', 'HomeWorkController@index')->name('admin.homework.list');
        Route::get('search', 'HomeWorkController@search')->name('admin.homework.search');
        Route::get('{homework}/edit', 'HomeWorkController@edit')->name('admin.homework.edit');
        Route::post('{homework}/update', 'HomeWorkController@update')->name('admin.homework.update');
        Route::get('{homework}/delete', 'HomeWorkController@destroy')->name('admin.homework.delete');
    });
      //------------------------Holiday Homework-------------------------------------------
     Route::group(['prefix' => 'holidayhomework'], function() {
        Route::get('add', 'HolidayHomeworkController@create')->name('admin.holidayhomework.form');
        Route::post('add', 'HolidayHomeworkController@store')->name('admin.holidayhomework.post');
        Route::get('list', 'HolidayHomeworkController@index')->name('admin.holidayhomework.list');
        Route::get('search', 'HolidayHomeworkController@search')->name('admin.holidayhomework.search');
        Route::get('{holidayhomework}/edit', 'HolidayHomeworkController@edit')->name('admin.holidayhomework.edit');
        Route::post('{holidayhomework}/update', 'HolidayHomeworkController@update')->name('admin.holidayhomework.update');
        Route::get('{holidayHomework}/delete', 'HolidayHomeworkController@destroy')->name('admin.holidayhomework.delete');
    });
     //------------------------Attendace-------------------------------------------
    Route::group(['prefix' => 'attendance'], function() {
        Route::group(['prefix' => 'student'], function() {
            Route::get('/', 'StudentAttendanceController@index')->name('admin.attendance.student.form');
            Route::post('search', 'StudentAttendanceController@search')->name('admin.attendance.student.search');
            Route::post('add', 'StudentAttendanceController@store')->name('admin.attendance.student.save');
            Route::get('{attendance}/edit', 'StudentAttendanceController@edit')->name('admin.attendance.student.edit');
            Route::post('{attendance}update', 'StudentAttendanceController@update')->name('admin.attendance.student.update');
            Route::get('{attendance}/delete', 'StudentAttendanceController@destroy')->name('admin.attendance.student.delete');
        });
    });

    Route::group(['prefix' => 'news'], function() {
        // Route::get('new', 'NewsController@index')->name('admin.news.n');
        Route::get('list', 'NewsController@index')->name('admin.news.list');        
        Route::post('new', 'NewsController@store')->name('admin.news.post');        
        Route::get('edit/{news}', 'NewsController@edit')->name('admin.news.edit');
        Route::put('update/{news}', 'NewsController@update')->name('admin.news.update');
        Route::delete('delete/{news}', 'NewsController@destroy')->name('admin.news.delete');

     
      }); 

     //------------------------Birthday sms-------------------------------------------
    Route::group(['prefix' => 'birthday'], function() {
        Route::group(['prefix' => 'student'], function() {
            Route::get('list', 'DashboardController@birthday')->name('admin.birthday.list');
        });
    });
      //------------------------Homework Sms-------------------------------------------
     Route::group(['prefix' => 'sms'], function() {
         Route::group(['prefix' => 'homework'], function() {
             Route::get('/', 'SmsController@homeworkForm')->name('admin.sms.homework.form');
             Route::post('/', 'SmsController@homeworkSend')->name('admin.sms.homework.post');
         });
          Route::group(['prefix' => 'customized'], function() {
            Route::get('/', 'SmsController@customizedForm')->name('admin.sms.customized.form');
            Route::post('search', 'SmsController@search')->name('admin.sms.student.search');             
            Route::post('/', 'SmsController@customizedsms')->name('admin.sms.customized.post');   
         });
            Route::group(['prefix' => 'allsms'], function() {
            Route::get('/', 'SmsController@allsmsForm')->name('admin.sms.allsms.form');               
            Route::post('/', 'SmsController@allsms')->name('admin.sms.allsms.post');   
         });
     });
      //------------------------contact-------------------------------------------
    Route::group(['prefix' => 'contact'], function() {
        
            Route::get('list', 'ContactController@index')->name('admin.contact.list');
            Route::get('delete/{contact}', 'ContactController@destroy')->name('admin.contact.delete');

       
    });
      //------------------------enquiry-------------------------------------------
    Route::group(['prefix' => 'enquiry'], function() {
        
            Route::get('list', 'EnquiryController@index')->name('admin.enquiry.list');
            Route::get('delete/{enquiry}', 'EnquiryController@destroy')->name('admin.enquiry.delete');

       
    });
      //------------------------Gallery-------------------------------------------
     Route::group(['prefix' => 'gallery'], function() {
        Route::get('add', 'GalleryController@create')->name('admin.gallery.form');
        Route::post('add', 'GalleryController@store')->name('admin.gallery.post');
        Route::get('list', 'GalleryController@index')->name('admin.gallery.list');
        Route::get('search', 'GalleryController@search')->name('admin.gallery.search');
        Route::get('{gallery}/edit', 'GalleryController@edit')->name('admin.gallery.edit');
        Route::post('{gallery}/update', 'GalleryController@update')->name('admin.gallery.update');
        Route::get('{gallery}/delete', 'GalleryController@destroy')->name('admin.gallery.delete');
    });
});
