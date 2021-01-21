<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about = About::all();
        return view('admin.home.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.home.about.create");
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
        $about = new about();
        $request->validate([
            "titre" => "required",
            "texte" => "required",
            "texte2" => "required",
            "btn" => "required",

        ]);

        $about->titre = $request->input('titre');
        $about->texte = $request->input('texte');
        $about->texte2 = $request->input('texte2');
        $about->btn= $request->input('btn');

        $about->save();
        return redirect()->route("about.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
        return view("admin.home.about.edit", compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
        $request->validate([
            "titre" => "required",
            "texte" => "required",
            "texte2" => "required",
            "btn" => "required",

        ]);

        $about->titre = $request->input('titre');
        $about->texte = $request->input('texte');
        $about->texte2 = $request->input('texte2');
        $about->btn= $request->input('btn');

        $about->save();
        return redirect()->route("about.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $about = About::find($id);



        $about->delete();
        return redirect()->back();
    }
}
