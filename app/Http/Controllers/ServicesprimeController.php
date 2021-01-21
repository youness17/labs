<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Service;
use App\Models\Servicesprime;
use Illuminate\Http\Request;

class ServicesprimeController extends Controller
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
        $servicesprime = Servicesprime::all();
        return view("admin.services.services-primes.index", compact('servicesprime' , 'icone'));
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
        return view("admin.services.services-primes.create" , compact ('icone'));
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
        // $icone = Icone::all();
        $servicesprime = new Servicesprime();
        $request->validate([
            "icone_id" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $servicesprime->icone_id = $request->icone_id;
        $servicesprime->titre = $request->titre;
        $servicesprime->texte = $request->texte;
        $servicesprime->save();
        return redirect()->route("servicesprime.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicesprime  $servicesprime
     * @return \Illuminate\Http\Response
     */
    public function show(Servicesprime $servicesprime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicesprime  $servicesprime
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicesprime $servicesprime)
    {
        //
        $icone = Icone::all();
        return view("admin.services.services-primes.edit", compact('servicesprime', 'icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicesprime  $servicesprime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicesprime $servicesprime)
    {
        //
     
        $request->validate([
            "icone_id" => "required",
            "titre" => "required",
            "texte" => "required",
        ]);
        $servicesprime->icone_id = $request->icone_id;
        $servicesprime->titre = $request->titre;
        $servicesprime->texte = $request->texte;
        $servicesprime->save();
        return redirect()->route("servicesprime.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicesprime  $servicesprime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicesprime $servicesprime)
    {
        //
        {
            $servicesprime->delete();
            return redirect()->back();
        }
    }
}
