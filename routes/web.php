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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();

Route::group(['namespace' => 'site','as'=>'site.'], function () {
    Route::get('/','indexController@index')->name('index');
    Route::post('/teklif','indexController@teklif')->name('teklif');
    Route::group(['namespace' => 'sayfa','prefix'=>'sayfa','as'=>'sayfa.'], function () {
        Route::get('/{link}','indexController@index')->name('index');
    });
    Route::group(['namespace' => 'offer','prefix'=>'offer','as'=>'offer.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::post('/teklif','indexController@teklif')->name('teklif');
    });
    Route::group(['namespace' => 'blog','prefix'=>'blog','as'=>'blog.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/{link}','indexController@view')->name('view');
        Route::post('/{link}','indexController@yorum')->name('yorum');
        Route::get('/kategori/{id}','indexController@kategori')->name('kategori');
    });
    Route::group(['namespace'=>'services','prefix' => 'services','as'=>'services.'], function () {
        Route::get('/{link}','indexController@index')->name('index');
    });
    Route::group(['namespace' => 'urunkategori','prefix'=>'urunler','as'=>'urunkategori.'], function () {
        Route::get('/','indexController@index')->name('index');
    });
    Route::group(['namespace' => 'urunler','prefix'=>'urunler','as'=>'urunler.'], function () {
        Route::get('/{link}','indexController@view')->name('view');
        Route::get('/kategori/{id}','indexController@kategori')->name('kategori');
    });
    Route::group(['namespace'=>'menu','prefix' => 'menu','as'=>'menu.'], function () {
        Route::get('/{link}','indexController@index')->name('index');
    });

    
});

Route::group(['namespace' => 'admin','prefix' => 'admin','as'=>'admin.'], function () {
    Route::get('/','indexController@index')->name('index');
    Route::group(['namespace' => 'slider', 'prefix'=>'slider','as'=>'slider.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'yorum', 'prefix'=>'yorum','as'=>'yorum.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/cevap/{id}','indexController@answer')->name('answer');
        Route::post('/cevap/store/{id}','indexController@store')->name('store');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    
    Route::group(['namespace' => 'sayfa', 'prefix'=>'sayfa','as'=>'sayfa.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'blogkategori', 'prefix'=>'blogkategori','as'=>'blogkategori.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'blog', 'prefix'=>'blog','as'=>'blog.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'services', 'prefix'=>'services','as'=>'services.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'urunler', 'prefix'=>'urunler','as'=>'urunler.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'urunkategori', 'prefix'=>'urunkategori','as'=>'urunkategori.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'referans', 'prefix'=>'referans','as'=>'referans.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'footer','prefix'=>'footer','as'=>'footer.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'header','prefix'=>'header','as'=>'header.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'menu', 'prefix'=>'menu','as'=>'menu.'], function () {
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/store','indexController@store')->name('store');
        Route::get('/duzenle/{id}','indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('update');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
    });
});
