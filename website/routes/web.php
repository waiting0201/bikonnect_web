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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backend'], function(){
    Route::get('/', array('as' => 'panel.index', 'uses' => 'Backend\PanelController@index'));
    Route::get('/login', array('as' => 'panel.login', 'uses' => 'Backend\PanelController@login'));

    Route::group(['prefix' => 'solution'], function(){
        Route::match(['get', 'post'], '/video', array('as' => 'solution.video', 'uses' => 'Backend\SolutionController@video'));
        Route::match(['get', 'post'], '/content', array('as' => 'solution.content', 'uses' => 'Backend\SolutionController@content'));
        Route::match(['get', 'post'], '/content/edit/{solutionid}', array('as' => 'solution.content.edit', 'uses' => 'Backend\SolutionController@editcontent'));
        Route::match(['get', 'post'], '/aspect', array('as' => 'solution.aspect', 'uses' => 'Backend\SolutionController@aspect'));
        Route::match(['get', 'post'], '/aspect/add', array('as' => 'solution.aspect.add', 'uses' => 'Backend\SolutionController@addaspect'));
        Route::match(['get', 'post'], '/aspect/edit/{aspectid}', array('as' => 'solution.aspect.edit', 'uses' => 'Backend\SolutionController@editaspect'));
    });

    Route::group(['prefix' => 'about'], function(){
        Route::match(['get', 'post'], '/content', array('as' => 'about.content', 'uses' => 'Backend\AboutController@content'));
        Route::match(['get', 'post'], '/content/edit/{aboutid}', array('as' => 'about.content.edit', 'uses' => 'Backend\AboutController@editcontent'));
        Route::match(['get', 'post'], '/history', array('as' => 'about.history', 'uses' => 'Backend\AboutController@history'));
        Route::match(['get', 'post'], '/history/add', array('as' => 'about.history.add', 'uses' => 'Backend\AboutController@addhistory'));
        Route::match(['get', 'post'], '/history/edit/{historyid}', array('as' => 'about.history.edit', 'uses' => 'Backend\AboutController@edithistory'));
        Route::match(['get', 'post'], '/team', array('as' => 'about.team', 'uses' => 'Backend\AboutController@team'));
        Route::match(['get', 'post'], '/team/add', array('as' => 'about.team.add', 'uses' => 'Backend\AboutController@addteam'));
        Route::match(['get', 'post'], '/team/edit/{teamid}', array('as' => 'about.team.edit', 'uses' => 'Backend\AboutController@editteam'));
        Route::match(['get', 'post'], '/partner', array('as' => 'about.partner', 'uses' => 'Backend\AboutController@partner'));
        Route::match(['get', 'post'], '/partner/add', array('as' => 'about.partner.add', 'uses' => 'Backend\AboutController@addpartner'));
        Route::match(['get', 'post'], '/partner/edit/{partnerid}', array('as' => 'about.partner.edit', 'uses' => 'Backend\AboutController@editpartner'));
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::match(['get', 'post'], '/auth', array('as' => 'admin.auth', 'uses' => 'Backend\AdminController@auth'));
        Route::match(['get', 'post'], '/auth/add', array('as' => 'admin.auth.add', 'uses' => 'Backend\AdminController@addauth'));
        Route::match(['get', 'post'], '/auth/edit/{authid}', array('as' => 'admin.auth.edit', 'uses' => 'Backend\AdminController@editauth'));
    });
});