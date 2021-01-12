<?php

namespace App\Http\Controllers;
use App\Notifications\NewCommentPosted;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Post $post)
    {


        //     $comment = $post->comments()->create([
        //         'content' => $request->content,
        //         'user_id' => $request->user()->id,
        //     ]);

        //     event(new MyCommentPosted($comment));

        //    // Mail::to($post->user->email)->send(new CommentedPostMarkdown($comment));

        //    //    $when = now()->addMinutes(1);
        //    //    Mail::to($post->user->email)->later($when, new CommentedPostMarkdown($comment));

        //     return redirect()->back();


        // request()->validate([
        //     'content' => 'required'

        // ]);

        // $comment = new Comment();
        // // $comment->content = $request->request('content');
        // $comment->content = request('content');
        // $comment->user_id = auth()->user()->id;

        // $comment->save();
        // return redirect()->route('post.show' , $post);

        request()->validate([
            'content' => 'required|min:5'
        ]);

        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;

        $post->comments()->save($comment);

        // Notification envoyée à l'auteur du post
        // $post->user->notify(new NewCommentPosted(auth()->user(), $post));

        return redirect()->route('post.show', $post);
    }

    // public function storeCommentReply(Comment $comment)
    // {
    //     request()->validate([
    //         'replyComment' => 'required|min:3'
    //     ]);

    //     $commentReply = new Comment();
    //     $commentReply->content = request('replyComment');
    //     $commentReply->user_id = auth()->user()->id;

    //     $comment->comments()->save($commentReply);

    //     return redirect()->back();
    // }

    // public function markedAsSolution(post $post, Comment $comment)
    // {
    //     if (auth()->user()->id === $post->user_id) {

    //         $post->solution = $comment->id;
    //         $post->save();

    //         return response()->json(['success' => ['success' => 'Marqué comme solution']], 200);
    //     } else {
    //         return response()->json(['errors' => ['error' => 'Utilisateur non valide']], 401);
    //     }
    // }
}

/**
 * Display the specified resource.
 *
 * @param  \App\Models\Comment  $comment
 * @return \Illuminate\Http\Response
 */


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Comment  $comment
 * @return \Illuminate\Http\Response
 */


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Comment  $comment
 * @return \Illuminate\Http\Response
 */
