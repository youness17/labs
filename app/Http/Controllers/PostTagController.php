<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    //
    public function index($id){

        $tag = Tag::find($id);

        $menus = Menu::all();
        $logo = Logo::all();
        // $Posts = Tag::all()->posts
        // $posts = Post::latest()->paginate(5);
       
      
       
         


        return view('pages.blog.index' ,
        [
           'posts' => $tag->posts,
           'menus' => $menus,
           'logo' => $logo,
       ]
        );
    }
}
