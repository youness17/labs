<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostpageController;
use App\Http\Controllers\PostTagController;
use App\Models\Comment;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
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
    $menus = Menu::all();
    $logo = Logo::all();
    return view('pages.home.index', compact('menus', 'logo'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');

Auth::routes();

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('auth');



////////////// PAGE////////////// 

// HOME

Route::get('/home', function () {
    $menus = Menu::all();
    $logo = Logo::all();
    return view('pages.home.index',  compact('menus', 'logo'));
})->name('home');

// BLOG

Route::get('/blog', function () {
    $menus = Menu::all();
    $logo = Logo::all();
    $posts = Post::latest()->paginate(5);
    return view('pages.blog.index', compact('menus', 'logo','posts'));
})->name('blog');

// BLOG POST


// Route::get('/blog/post', function () {
//     $menus = Menu::all();
//     $logo = Logo::all();
//     $comment = Comment::all();
//     $posts = Post::all();

//     return view('pages.blog-post.index', compact('menus', 'logo', 'comment', 'posts'));
// })->name('blogpost');

Route::resource('/blog/post', PostpageController::class);
    



    



Route::post('/comments/{post}', [CommentController::class , 'store'])->name('comments.store');





// PostTag
// Route::get('/posts/tag/{id}', PostTagController::class)->name('posts.tag.index');
Route::get('/posts/tag/{id}', function ($id) {
  

    $tag = Tag::find($id);
        

    return view('pages.blog.index',[

        'posts' => $tag->posts,


    ]);
    //
})->name('posts.tag.index');







//Menu
Route::resource('/menu', MenuController::class);

//  Logo

Route::resource('/logo', LogoController::class);

// blog post

Route::resource('/admin/blog/post', PostController::class);
