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
Route::get('p','DashboardController@dashboard');

Route::get('/p/404', function(){
    return view('page.404');
});

Route::get('p/basic_table','TablesController@basic_tables');

Route::get('/p/blank',function(){
    return view('page.blank');
});

Route::get('/p/contact',function(){
    return view('page.contact');
});
Route::get('p/general','UiController@general');
Route::get('p/buttons','UiController@buttons');
Route::get('p/grids','UiController@grids');

Route::get('p/profile','PagesController@profile');
Route::get('p/login','PagesController@login');
Route::get('p/contact','PagesController@contact');
Route::get('p/blank','PagesController@blank');
Route::get('p/error','PagesController@error');

Route::get('p/chart-chartjs','ChartController@chart');

Route::get('p/widgets','WidgetsController@widgets');

Route::get('p/form_component','FormsController@form_element');
Route::get('p/form_validation','FormsController@form_validation');
