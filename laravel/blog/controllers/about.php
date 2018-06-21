<?php

Route::get('/', function() {
    $site_title = "my page stuff";
    return view('welcome', compact('site_title'));
})

?>