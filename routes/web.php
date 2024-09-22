<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
});
Route::get('/categories', function () {
    return view('categories.liste');
});


Route::get('/categorie/foods', function () {
    return view('categorie.foods.foodpage');
});

Route::get('/{foodmarket}/foods' , function ($foodmarket) {
    return view('foodmarket.foodsbymarket', ['foodmarket'=> $foodmarket ]);
});
Route::get('/blogs', function () {
    return view('Blogs.blogs');
});
Route::get('/blog/{id}', function ($id) {
    return view('Blog.blog',['id' => $id]);
});
Route::get('/categorie/foodmarket', function () {
    return view('foodmarket.page');
});
Route::get('/{categoriename}/{id}', function ($categoriename , $id) {
    return view('user', ['categoriename'=> $categoriename , 'id' => $id]);
});
Route::get('/blogs', function () {
    return view('Blogs.blogs');
});
