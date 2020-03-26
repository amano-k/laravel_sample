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

// Route::get('/', function () {
//     return view('welcome');
// })->name('top');

/**
 * ■ テスト方法
 *
 * artisanでウェブサーバーを立ち上げ、コマンド実行後に表示されるURLをブラウザで開きます。
 * $ php artisan serve
 *
 * ■ 任意のホストを使ってテストを行いたい場合。
 *
 * hostsにドメインを追加します。
 * $ sudo vi /etc/hosts
 *
 * ホスト名をlaravel_sample.comにしたい場合は下記の内容をhostsに記述します。
 * 127.0.0.1 laravel_sample.com
 *
 * artisanコマンドでドメインを指定してサーバーを起動します。
 * $ php artisan serve --host=laravel_sample.com --port=8000
 */

/**
 * laravelサンプル用
 */
Route::get('/item', 'ItemController@list')->name('item_list');
Route::get('/item/create', 'ItemController@create')->name('item_create');
Route::get('/item/edit', 'ItemController@create')->name('item_edit');
Route::post('/item/add', 'ItemController@add')->name('item_add');
Route::post('/item/{id}/update', 'ItemController@udpate')->where('id', '[0-9]+')->name('item_update');
Route::post('/item/{id}/delete', 'ItemController@delete')->where('id', '[0-9]+')->name('item_delete');

/**
 * vuejsサンプル用
 */
Route::get('/vue/{any}', 'VueController@sample')->where('any', '.*');
// Route::get('/vue/sample', 'VueController@sample');

/**
 * テスト用
 */
Route::get('/test', 'TestController@index')->name('test_index');
