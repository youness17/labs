<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $video = Video::all();
        return view('admin.home.video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.home.video.create");
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
        $video = new Video();
      


        $video->url = $request->input('url');
        $video->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $video->save();
        return redirect()->route("video.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
        return view("admin.home.video.edit", compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
       
            

        
        Storage::disk("public")->delete("img/"  . $video->img);
        // Storage::disk("public")->delete("img/"  . $logo->img);
        $video->url = $request->input('url');
        $video->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $video->save();
        return redirect()->route("video.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
        Storage::disk("public")->delete("img/" . $video->img);
        $video->delete();
        return redirect()->back();
    }
}
