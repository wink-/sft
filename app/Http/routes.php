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

Route::get('/', 'PagesController@index');
Route::resource('dmrs', 'DmrsController');
Route::resource('workorders', 'WorkordersController');
Route::resource('customers', 'CustomersController');
Route::post('dmrs/stage', 'DmrsController@stage');

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => '', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => ''], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::resource('employees', 'EmployeeController');

Route::get('employees/{id}/delete', [
    'as' => 'employees.delete',
    'uses' => 'EmployeeController@destroy',
]);


Route::resource('customers', 'CustomerController');

Route::get('customers/{id}/delete', [
    'as' => 'customers.delete',
    'uses' => 'CustomerController@destroy',
]);

Route::controller('datatables', 'DatatablesController', [
		'anyData'  => 'datatables.data',
		'getIndex' => 'datatables',
]);

Route::resource('processes', 'ProcessController');

Route::get('processes/{id}/delete', [
    'as' => 'processes.delete',
    'uses' => 'ProcessController@destroy',
]);
