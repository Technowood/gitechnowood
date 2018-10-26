<?php

Route::get('/','Adminauth\AuthController@showLoginForm');
Route::post('login','Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']],function(){
    Route::get('/dashboard','Admin\AdminController@dashboard');
    Route::get('/logout','Adminauth\AuthController@logout');
});

/*Route::get('/create',function(){
    App\User::create([
        'name'=>'Joel',
        'username'=>'Joel',
        'email'=>'joel@gmail.com',
        'password'=>bcrypt('1234'),
    ]);
});*/
Route::get('/altadm','administradores@altadmin');
Route::POST('/guardadm','administradores@guardadmin')->name('guardadmin');
