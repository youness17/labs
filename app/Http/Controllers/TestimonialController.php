<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all();
        return view('admin.home.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.home.testimonials.create");
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
        $testimonial = new Testimonial();
        $request->validate([
            'img'=>'required',
            'name'=>'required',
            'job'=>'required',
            'text' => 'required'

        ]);

        $testimonial->img = $request->img;
        $testimonial->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;
        $testimonial->text = $request->text;
        $testimonial->save();
        return redirect()->route("testimonial.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view("admin.home.testimonials.edit", compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $request->validate([
            'img'=>'required',
            'name'=>'required',
            'job'=>'required',
            'text' => 'required'

        ]);
        Storage::disk("public")->delete("img/" . $testimonial->img);
        $testimonial->img = $request->img;
        $testimonial->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;
        $testimonial->text = $request->text;
        $testimonial->save();
        return redirect()->route("testimonial.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $id)
    {
        //
      
        $testimonial = Testimonial::find($id);
        Storage::disk("public")->delete("img/" . $testimonial->img);


        $testimonial->delete();
        return redirect()->back();
    }
}
