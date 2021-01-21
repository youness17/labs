<?php

namespace App\Http\Controllers;

use App\Models\Contactinfo;
use Illuminate\Http\Request;

class ContactinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contactinfo = Contactinfo::all();
        return view("admin.contact.contactinfo.index", compact('contactinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("admin.contact.contactinfo.create");
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

        $contactinfo = new Contactinfo();
        $request->validate([
            "titre" => "required",
            "texte" => "required",
            "titreinfo" => "required",
            "adress" => "required",
            "ville" => "required",
            "numero" => "required",
            "mail" => "required",
            "texte" => "required",
            "boutton" => "required",
        ]);
        $contactinfo->titre = $request->titre;
        $contactinfo->texte = $request->texte;
        $contactinfo->titreinfo = $request->titreinfo;
        $contactinfo->adress = $request->adress;
        $contactinfo->ville = $request->ville;
        $contactinfo->numero = $request->numero;
        $contactinfo->mail = $request->mail;
        $contactinfo->boutton = $request->boutton;
        $contactinfo->save();
        return redirect()->route("contactinfo.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactinfo  $contactinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Contactinfo $contactinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactinfo  $contactinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactinfo $contactinfo)
    {
        //
        return view("admin.contact.contactinfo.edit", compact('contactinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactinfo  $contactinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactinfo $contactinfo)
    {
        //

        $request->validate([
            "titre" => "required",
            "texte" => "required",
            "titreinfo" => "required",
            "adress" => "required",
            "ville" => "required",
            "numero" => "required",
            "mail" => "required",
            "texte" => "required",
            "boutton" => "required",
        ]);
        $contactinfo->titre = $request->titre;
        $contactinfo->texte = $request->texte;
        $contactinfo->titreinfo = $request->titreinfo;
        $contactinfo->adress = $request->adress;
        $contactinfo->ville = $request->ville;
        $contactinfo->numero = $request->numero;
        $contactinfo->mail = $request->mail;
        $contactinfo->boutton = $request->boutton;
        $contactinfo->save();
        return redirect()->route("contactinfo.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactinfo  $contactinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactinfo $contactinfo)
    {
        //
        {
            $contactinfo->delete();
            return redirect()->back();
        }
    }
}
