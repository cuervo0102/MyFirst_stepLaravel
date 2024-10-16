<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// another way 
Route::view('/', 'welcome');



// Route::get('/test', function () {
//     return view('test'); 
// });
// Route::get('/test_route', function () {
//     $var = '<h1>Django and Laravel</h1>';
//     return $var;
// });
// Route::get('/submit_form', function(){
//     return View('first_form');
// });
// Route::post('/submit_form', function(Request $request){
//     dd($request->all());
// });
// Route::put('/submit_form', function(Request $request) {
//     $username = $request -> input('username1');
//     dump($username);

// });
// Route::post('/submit_form/{id}', function(Request $request, $id): string {
//     return $id; 
// });
// Route::delete('/submit_form/{id}', function($id): string {
//     return $id; 
// });


//Store new Router
// Route::get('/post',[PostController::class, 'index'])->name('posts.index') ;
// Route::post('/post',[PostController::class, 'store']) ;
// Route::get('/post/create',[PostController::class, 'create']) ;
// Route::get('/post/{id}/edit',[PostController::class, 'edit']) ;
// Route::put('/post/{id}',[PostController::class, 'update']) ;
// Route::put('/post/{id}',[PostController::class, 'show']) ;
// Route::delete('/post/{id}',[PostController::class, 'destroy']) ;


//can do it in another way 
Route::resource('/posts', PostController::class);