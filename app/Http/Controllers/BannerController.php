<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\TitreSlogan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $titreSlogan = TitreSlogan::all();
        $banner = Banner::all();
        return view('admin.home.banner.index', compact('banner' ,'titreSlogan') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.home.banner.create");
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

        $banner = new Banner();
        $request->validate([
            "img" => "required",
            
        ]);
    
        // Storage::disk("public")->delete("img/"  . $logo->img);

        $banner->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");

        $banner->save();
        return redirect()->route("banner.index");
     

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
        return view("admin.home.banner.edit", compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $request->validate([
            "img" => "required",
            

        ]);
        Storage::disk("public")->delete("img/" . $banner->img);
        $banner->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");
        $banner->save();
        return redirect()->route("banner.index");

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
        Storage::disk("public")->delete("img/" . $banner->image);
        $banner->delete();
        return redirect()->back();
    }
}
