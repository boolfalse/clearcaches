<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'dev',
    'namespace' => 'Boolfalse\ClearCaches\Http\Controllers',
], function (){
    Route::get('clearcaches-check', 'ClearCachesController@checking_cc')->name('checking_cc');
    Route::get('clearcaches', 'ClearCachesController@clearcaches')->name('clearcaches');
    Route::get('droptables', 'ClearCachesController@droptables')->name('droptables');
});