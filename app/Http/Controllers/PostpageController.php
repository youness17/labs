<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Postpage;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        
        $user = User::all();
        $menus = Menu::all();
        $logo = Logo::all();
        $comment = Comment::all();

        $tag = Tag::all();
        // $posts = Post::all();
        return view(
            'pages.blog-post.index',
            // [

            //     'posts' => $tag->posts,
            // ],
            compact('menus', 'logo', 'comment', 'post', 'user')
        );
        //
        // $menus = Menu::all();
        // $logo = Logo::all();
        // $comment = Comment::all();
        // $posts = Post::all();
    
        // return view('pages.blog-post.index', compact('menus', 'logo', 'comment', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postpage  $postpage
     * @return \Illuminate\Http\Response
     */
    public function show(Postpage $postpage)
    {
        //
        
        $menus = Menu::all();
        $logo = Logo::all();
        $comments = Comment::all();
        $posts = Post::all();
        return view('pages.blog-post.index', compact('menus', 'logo', 'comments', 'posts') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postpage  $postpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Postpage $postpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postpage  $postpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postpage $postpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postpage  $postpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postpage $postpage)
    {
        //
    }
}
