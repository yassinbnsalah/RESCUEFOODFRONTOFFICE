<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;


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
Route::get('/blogs', [BlogController::class, 'index'])->name('Blogs.index'); // Liste des blogs
Route::get('/blogs/create', [BlogController::class, 'create'])->name('Blogs.create'); // Formulaire de création
Route::post('/blogs', [BlogController::class, 'store'])->name('Blogs.store'); // Enregistrer un nouveau blog

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show'); // Afficher un blog spécifique

Route::post('blogs/{blog}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::resource('blogs.comments', CommentController::class)->only(['store', 'update', 'destroy']);


Route::get('/categorie/foodmarket', function () {
    return view('foodmarket.page');
});
Route::get('/{categoriename}/{id}', function ($categoriename , $id) {
    return view('user', ['categoriename'=> $categoriename , 'id' => $id]);
});

