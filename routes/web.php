<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlograpideController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactinfoController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailcontactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostpageController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesprimeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreSloganController;
use App\Http\Controllers\VideoController;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blograpide;
use App\Models\Comment;
use App\Models\Contactinfo;
use App\Models\Icone;
use App\Models\Iconeprime;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\Service;
use App\Models\Servicesprime;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\TitreSlogan;
use App\Models\Video;
use Hamcrest\Core\AllOf;
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
    $titreSlogan = TitreSlogan::all();
    $banner = Banner::all();
    $services= Service::all();
    $about = About::all();
    $video = Video::all();
    $testimonials = Testimonial::all();
    $contactinfo = Contactinfo::all();
    $icone = Icone::all();
    return view('pages.home.index', compact('menus', 'logo' , 'titreSlogan' , 'banner','services', 'about' , 'video', 'testimonials' , 'contactinfo' ,'icone'));
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
    $banner = Banner::all();
    $titreSlogan = TitreSlogan::all();
    $services = Service::all();
    $about = About::all();
    $video = Video::all();
    $testimonials = Testimonial::all();
    $contactinfo = Contactinfo::all();
    $icone = Icone::all();
    return view('pages.home.index',  compact('menus', 'logo', 'banner', 'titreSlogan' ,  'services' , 'about', 'video', 'testimonials' , 'contactinfo', 'icone'));
})->name('home');

// BLOG

Route::get('/blog', function () {
    $menus = Menu::all();
    $logo = Logo::all();
    $posts = Post::all();
    $tags = Tag::all();
    return view('pages.blog.index',
    
   
     compact('menus', 'logo','posts', 'tags' ));
})->name('blog');

// BLOG POST

Route::resource('postpage', PostpageController::class);


// Route::get('/blog/post', function () {
//     $menus = Menu::all();
//     $logo = Logo::all();
//     $comment = Comment::all();
//     $posts = Post::all();

//     return view('pages.blog-post.index', compact('menus', 'logo', 'comment', 'posts'));
// })->name('blogpost');

// Route::resource('/blog/post', PostpageController::class);
// SERVICES    

Route::get('/services', function () {
    $menus = Menu::all();
    $logo = Logo::all();
    $services = Service::all();
    $icone = Icone::all();
    $servicesprime = Servicesprime::all();
    $blograpide = Blograpide::all();
    $newsletter = Newsletter::all();
    $contactinfo = Contactinfo::all();
    return view('pages.services.index',  compact('menus', 'logo', 'services' , 'icone', 'servicesprime', 'blograpide' ,'newsletter' ,'contactinfo' ));
})->name('services');

Route::get('/contact', function () {
    $menus = Menu::all();
    $logo = Logo::all();
    $contactinfo = Contactinfo::all();
    return view('pages.contact.index',  compact('menus', 'logo' ,'contactinfo' ));
})->name('contact');


    



Route::post('/comments/{post}', [CommentController::class , 'store'])->name('comments.store');





// PostTag
Route::get('/posts/tag/{id}', [PostTagController::class, "index"])->name('posts.tag.index' );







//Menu
Route::resource('/menu', MenuController::class);

//  Logo

Route::resource('/logo', LogoController::class);

// blog post

Route::resource('/admin/blog/post', PostController::class);

// Home Banner

Route::resource('/admin/home/banner', BannerController::class);

// Home TitreSlogan

Route::resource('/admin/home/titreslogan', TitreSloganController::class);

// SERVICE

Route::resource('/admin/services/serviceslist', ServiceController::class);

// SERVICES PRIMES

Route::resource('/admin/services/servicesprime', ServicesprimeController::class);

// BLOG RAPIDE

Route::resource('/admin/services/blograpide', BlograpideController::class);

// NEWSLETTER 

Route::resource('/admin/newsletter', NewsletterController::class);

// MAILS

Route::post("/mailcontact", [MailcontactController::class, "index"]);

// CONtaCt INFO

Route::resource("/admin/contact/contactinfo", ContactinfoController::class);

// ABOUT

Route::resource("/admin/home/about", AboutController::class);


// VIDEO

Route::resource("/admin/home/video", VideoController::class);


// TESTIMONIAL 

Route::resource("/admin/home/testimonial", TestimonialController::class);

// PPST-TAG

Route::resource('/admin/blog/posttag', PostTagController::class);
