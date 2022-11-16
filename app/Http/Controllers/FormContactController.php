<?php

namespace App\Http\Controllers;

use App\Models\FormContact;
use Illuminate\Http\Request;

class FormContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contactforms = FormContact::latest()->paginate(5);

        $contactforms = FormContact::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%")->orWhere('instansi', 'like', "%{$request->search}%");
        })->orderBy('created_at', 'desc')->paginate(5);

        return view('contactform.index', compact('contactforms'))->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Models\FormContact  $formContact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactform = FormContact::find($id);
        return view('contactform.show', compact('contactform'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormContact  $formContact
     * @return \Illuminate\Http\Response
     */
    public function edit(FormContact $formContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormContact  $formContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormContact $formContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormContact  $formContact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactforms = FormContact::find($id);
        $contactforms->delete();
        return redirect()->route('contactform.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
