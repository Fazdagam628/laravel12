<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Fauzan', 'title' => 'About Page']);
});


Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    // dump(request('search'));

    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);
});


Route::get('/posts/{post:slug}', function (Post $post) {
    // dd($id);

    // $post = Post::find($id);

    // dd($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


// Route pencari data post dari username user
Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');


    return view('posts', ['title' => 'Articles In: ' . $category->name, 'posts' => $category->posts]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
