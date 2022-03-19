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
use App\Models\Post;
use App\Models\User;

Route::get('eloquent', function () {
    $posts = Post::where('id', '>=', '20')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();

    foreach ($posts as $post) {
        echo "$post->id $post->title <br>";
    }
});

Route::get('post', function () {
    $posts = Post::all();

    foreach ($posts as $post) {
        echo "
        $post->id&nbsp;&nbsp;--&nbsp;&nbsp;{$post->user->get_name}&nbsp;&nbsp;--&nbsp;&nbsp;$post->upper_title <br>";
    }
});

Route::get('user', function () {
    $users = User::get();

    foreach ($users as $user) {
        echo "
        $user->id&nbsp;&nbsp;--&nbsp;&nbsp;{$user->posts->count()}&nbsp;&nbsp;--&nbsp;&nbsp;$user->name <br>";
    }
});

Route::get('collections', function() {
   $users = User::get();

   //dd($users);
    //dd($users->except([1, 2, 3, 4]));
    //dd($users->only([1, 2]));
    dd($users->find([1, 2])->toJson());
    //dd($users->load('posts').toJson());
});
