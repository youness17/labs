<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::all();
        $posts = Post::all();
        $user = User::all();
        return view('admin.blog.posts.index', compact('posts', 'user', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tag = Tag::all();
        $posts = Post::all();
        $user = User::all();

        return view("admin.blog.posts.create",  compact('posts', 'user' ,'tag'));
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
        $post = new Post();
        // $request->validate([
        //     "img" => "required",

        // ]);

        $post->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");



        $post->titre = $request->input('titre');
        $post->description = $request->input('description');
        $post->texte = $request->input('texte');
        $post->user_id = $request->user_id;


        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //

        $user = User::all();
        $menus = Menu::all();
        $logo = Logo::all();
        $comment = Comment::all();
        $tag= Tag::all();
        return view(
            'pages.blog-post.index', compact('menus', 'logo', 'comment', 'post', 'user', 'tag' )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::all();
        $post = Post::find($id);
      

       

        return view("admin.blog.posts.edit", compact('post', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);


        //
        if (Gate::check('post.post', $post)) {
            // The user can create the post...
            abort(403);
        }
     
       
        Storage::disk("public")->delete("img/"  . $post->img);

        $post->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");



        $post->titre = $request->input('titre');
        $post->description = $request->input('description');
        $post->texte = $request->input('texte');
        $post->user_id = $request->user_id;


        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);

        Storage::disk("public")->delete("img/"  . $post->img);



        $post->delete();
        return redirect()->back();
    }
}
