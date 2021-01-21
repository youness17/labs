<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $icone = Icone::all();
        $services = Service::all();
        return view("admin.services.services.index", compact('services' , 'icone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $icone = Icone::all();
        return view("admin.services.services.create" , compact ('icone'));
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
     
        $services = new Service();
        $request->validate([
            "icone_id" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $services->icone_id = $request->icone_id;
        $services->titre = $request->titre;
        $services->texte = $request->texte;
        $services->save();
        return redirect()->route("serviceslist.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        // $icone = Icone::all();
        // return view('pages.services.services.index' , compact('icone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $services)
    {
        //
        $icone = Icone::all();
        return view("admin.services.services.edit", compact('services', 'icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $services)
    {
        //
        $request->validate([
            "icone_id" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $services->icone_id = $request->icone_id;
        $services->titre = $request->titre;
        $services->texte = $request->texte;
        $services->save();
        return redirect()->route("serviceslist.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        {
            $services = Service::find($id);
            $services->delete();
            return redirect()->back();
        }
    }
}
