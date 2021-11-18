<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\About;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:تواصل معنا', ['only' => ['index']]);
        $this->middleware('permission:تواصل معنا', ['only' => ['show']]);
        $this->middleware('permission:تواصل معنا', ['only' => ['destroy']]);

    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get();
        return view('contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::find(1);
        return view('contact.create',compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'content'=>'required'
        ]);



        $contact = new Contact();
        $contact->create($request->all());
        return redirect()->to('/')->with('message','تم ارسال الرساله بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contact.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return  redirect()->to('contacts')->with('message','تم الحذف  بنجاح');
    }
}
