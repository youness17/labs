<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Mailcontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $contact = [
            "name"=> $request->name ,
            "email"=> $request->email,
            "subject"=> $request->subject,
            "message"=> $request->message
            ];
            Mail::to("cartoon.you80@gmail.com")->send(new  Contact($contact));
            return redirect()->back();
            
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mailcontact  $mailcontact
     * @return \Illuminate\Http\Response
     */
    public function show(Mailcontact $mailcontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mailcontact  $mailcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailcontact $mailcontact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mailcontact  $mailcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailcontact $mailcontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mailcontact  $mailcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailcontact $mailcontact)
    {
        //
    }
}
