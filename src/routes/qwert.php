<?php
/////////////////////////////////  Админка //////////////////////////////////////
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],  function () {
    Route::get('/', ['as' => 'a.start', 'uses' => 'AdminController@index']);

    ////////// USERS //////////
    Route::get('users', ['as' => 'a.users', 'uses' => 'UserController@index']);
    Route::get('users/create', ['as' => 'a.user.add', 'uses' => 'UserController@add']);
    Route::post('users/create', ['as' => 'a.user.create', 'uses' => 'UserController@create']);
    Route::get('users/edit/{id}', ['as' => 'a.user.edit', 'uses' => 'UserController@edit']);
    Route::post('users/edit/{id}', ['as' => 'a.user.update', 'uses' => 'UserController@update']);
    Route::get('users/delete/{id}', ['as' => 'a.user.delete', 'uses' => 'UserController@delete']);

    ////////// MANAGER EMAILS //////////
    Route::get('emails', ['as' => 'a.emails', 'uses' => 'EmailController@index']);
    Route::post('emails/create', ['as' => 'a.email.create', 'uses' => 'EmailController@create']);
    Route::get('emails/edit/{id}', ['as' => 'a.email.edit', 'uses' => 'EmailController@edit']);
    Route::post('emails/edit/{id}', ['as' => 'a.email.update', 'uses' => 'EmailController@update']);
    Route::get('emails/delete/{id}', ['as' => 'a.email.delete', 'uses' => 'EmailController@delete']);

    ////////// FRONT FORMS //////////
    Route::get('forms', ['as' => 'a.forms', 'uses' => 'FormController@index']);
    Route::get('forms/create', ['as' => 'a.form.add', 'uses' => 'FormController@add']);
    Route::post('forms/create', ['as' => 'a.form.create', 'uses' => 'FormController@create']);
    Route::get('forms/edit/{id}', ['as' => 'a.form.edit', 'uses' => 'FormController@edit']);
    Route::post('forms/edit/{id}', ['as' => 'a.form.update', 'uses' => 'FormController@update']);
    Route::get('forms/delete/{id}', ['as' => 'a.form.delete', 'uses' => 'FormController@delete']);
    Route::get('forms/log/{id}', ['as' => 'a.form.log', 'uses' => 'FormController@log']);
    Route::get('forms/export/{id}', ['as' => 'a.form.export', 'uses' => 'FormController@export']);
    Route::post('forms/mails/{id}', ['as' => 'a.form.mails', 'uses' => 'FormController@saveMails']);

    ////////// FRONT FORMS DATA //////////
    Route::group(['prefix' => 'relations'],  function () {
        Route::get('{slug?}', ['as' => 'ar.relations', 'uses' => 'RelationsController@index']);
        Route::get('{slug}/all', ['as' => 'ar.relations.all', 'uses' => 'RelationsController@fullindex']);
        Route::get('{slug}/add', ['as' => 'ar.relations.add', 'uses' => 'RelationsController@add']);
        Route::get('{slug}/edit/{id}', ['as' => 'ar.relations.edit', 'uses' => 'RelationsController@edit']);
        Route::post('{slug}/add', ['as' => 'ar.relations.create', 'uses' => 'RelationsController@create']);
        Route::post('{slug}/edit/{id}', ['as' => 'ar.relations.update', 'uses' => 'RelationsController@update']);
        Route::get('delete/{id}', ['as' => 'ar.relations.delete', 'uses' => 'RelationsController@delete']);
        Route::get('{slug}/export', ['as' => 'ar.relations.export', 'uses' => 'RelationsController@export']);
        Route::get('{slug}/exportall', ['as' => 'ar.relations.exportall', 'uses' => 'RelationsController@export']);
    });
});

/////////////////////////////////  Фронт //////////////////////////////////////
Route::get('/', ['as' => 'f.start', 'uses' => 'FrontController@index']);
Route::post('callback', ['as' => 'f.p.callback', 'uses' => 'FrontController@callback']);