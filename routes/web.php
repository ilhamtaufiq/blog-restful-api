<?php

Route::get('/', function() {
    return view('home'); //Homepage 
});


Route::get('/post', function () {
    return view('post.post');
});


Route::get('/posts/{tag}', function () {
    return view('posts.tag');
});