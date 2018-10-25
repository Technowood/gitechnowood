<?php

Route::get('/','Adminauth\AuthController@showLoginForm');
Route::post('login','Adminauth\AuthController@login');

Route::group(['Middleware'=>['admin']],function(){
    Route::get('/dashboard','Admin\AdminController@dashboard');
    Route::get('/logout','Adminauth\AdminController@logout');
});

/*Route::get('/create',function(){
    App\User::create([
        'name'=>'fanny',
        'username'=>'fanny',
        'email'=>'fanny@gmail.com',
        'password'=>bcrypt('1234'),
    ]);
});*/
