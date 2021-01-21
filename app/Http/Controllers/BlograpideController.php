<?php

namespace App\Http\Controllers;

use App\Models\Blograpide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlograpideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blograpide = Blograpide::all();
        return view('admin.services.blog-rapides.index', compact('blograpide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.services.blog-rapides.create");
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
        $blograpide = new Blograpide();
        $request->validate([
            "image" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $blograpide->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $blograpide->titre = $request->titre;
        $blograpide->texte = $request->texte;
        $blograpide->save();
        return redirect()->route("blograpide.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blograpide  $blograpide
     * @return \Illuminate\Http\Response
     */
    public function show(Blograpide $blograpide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blograpide  $blograpide
     * @return \Illuminate\Http\Response
     */
    public function edit(Blograpide $blograpide)
    {
        //
        return view("admin.services.blog-rapides.edit", compact('blograpide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blograpide  $blograpide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blograpide $blograpide)
    {
        //
        $request->validate([
            "image" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $blograpide->image);
        $blograpide->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $blograpide->titre = $request->titre;
        $blograpide->texte = $request->texte;
        $blograpide->save();
        return redirect()->route("blograpide.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blograpide  $blograpide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blograpide $blograpide)
    {
        //
        Storage::disk("public")->delete("img/" . $blograpide->image);
        $blograpide->delete();
        return redirect()->back();
    }
}
