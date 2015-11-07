<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





Route::resource("employees", "EmployeeAPIController");

Route::resource("customers", "CustomerAPIController");

Route::resource("processes", "ProcessAPIController");