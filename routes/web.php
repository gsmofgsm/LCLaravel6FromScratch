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
    $name = request('name');
    return 'welcome, ' . $name;
});

Route::get('/test', function () {
    $name = request('name');
    return view('test', [
        'name' => $name  // any variables with the same name as the array key will be available in blade
    ]);
});
