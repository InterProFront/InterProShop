<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@getIndex');
Route::post('/feedback/mail', 'Back\MailController@send');

Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',                     'AdminController@getIndex');
    Route::get('/all',                  'AdminController@getAll');
    Route::get('/offers',               'AdminController@getOffers');
    Route::get('/quick',                'AdminController@getQuick');
    Route::get('/among',                'AdminController@getAmong');
    Route::get('/all_inclusive',        'AdminController@getAllInclusive');
    Route::get('/in_cost',              'AdminController@getInCost');
    Route::get('/shops',                'AdminController@getShops');
    Route::get('/shops/{id}',           'AdminController@getShopsItem');

    Route::get('/recommendations',      'AdminController@getRecommend');

    Route::get('/seo',         'AdminController@getSeo');







    // Таксаномия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

