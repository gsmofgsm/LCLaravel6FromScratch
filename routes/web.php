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

// route wildcard
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my very first post',
        'my-second-post' => 'I am really getting the hang of this post thing'
    ];

    if (! array_key_exists($post, $posts)) {
        abort(404, 'Sorry, this post does not exist yet');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
