<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logo = Logo::all();
        return view('admin.layout.logo.index', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.layout.logo.creat");
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
        $logo = new Logo();
        $request->validate([
            "img" => "required",
            
        ]);
    
        // Storage::disk("public")->delete("img/"  . $logo->img);

        $logo->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $logo->save();
        return redirect()->route("logo.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //

        return view("admin.layout.logo.edit", compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  logo $logo)
    {
        //
        $request->validate([
            "img" => "required",

        ]);
        Storage::disk("public")->delete("img/"  . $logo->img);

        $logo->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $logo->save();

        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(logo $logo)
    {
        //
        Storage::disk("public")->delete("img/"  . $logo->img);
        $logo->delete();
        return redirect()->back();
    }
}
