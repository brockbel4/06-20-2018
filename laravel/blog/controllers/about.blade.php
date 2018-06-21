@extends('layouts.layout')

@section('title')
    {{ $site_title }}
@endsection

@section('content')
   
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1>Hi, My name is Brock.</h1>
                <p class="lead">I like to travel. I really enjoyed going to Catalina!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <img src="/img/catalina.jpg" class="img-thumbnail" />
            </div>
        </div>
    </div>

@endsection
<?php


Route::get('/', function() {
    $site_title = "my page stuff";
    return view('welcome', compact('site_title'));
})

?>