<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Posttag;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    //
    public function index($id)
    {
        
        $tags = Tag::all();
        $tag = Tag::find($id);

        $menus = Menu::all();
        $logo = Logo::all();
        // $Posts = Tag::all()->posts
        // $posts = Post::latest()->paginate(5);






        return view(
            'pages.blog.index',
            [
                'posts' => $tag->posts,
                'menus' => $menus,
                'logo' => $logo,
            ],
            compact('menus', 'tags', 'logo')
        );
    }

    public function create()
    {
        //
        $tag = Tag::all();
        $posttag = Posttag::all();
   
        return view("admin.blog.tag.create",  compact('tag' , 'Posttag'));
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
   
        $posttag = new PostTag();



        $posttag->post_id = $request->input('post_id');
        $posttag->tag_id = $request->input('tag_id');
   


        $posttag->save();

        return redirect()->route('posttag.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posttag  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Posttag $posttag)
    {
        //

        
    
        $posttag = Posttag::all();
        return view(
            'admin.blog.tag.index',
            compact('posttag')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posttag  $post
     * @return \Illuminate\Http\Response
     */
}
