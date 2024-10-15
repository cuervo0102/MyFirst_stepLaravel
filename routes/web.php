<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test'); 
});
Route::get('/test_route', function () {
    $var = '<h1>Django and Laravel</h1>';
    return $var;
});
Route::get('/submit_form', function(){
    return View('first_form');
});
Route::post('/submit_form', function(Request $request){
    dd($request->all());
});
Route::put('/submit_form', function(Request $request) {
    $username = $request -> input('username1');
    dump($username);

});
Route::post('/submit_form/{id}', function(Request $request, $id): string {
    return $id; 
});
Route::delete('/submit_form/{id}', function($id): string {
    return $id; 
});


//Store new Router