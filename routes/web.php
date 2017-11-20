<?php

Route::get('/post', function () {
    return view('post.post');
});
Route::get('/', function() {
    return view('welcome'); //Homepage 
});
