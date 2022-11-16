<?php

namespace App\Http\Controllers;

use App\Models\PageTitle;
use Illuminate\Http\Request;

class PageTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle = PageTitle::all();
        return view('pagetitle.index', compact('pagetitle'));
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
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function show(PageTitle $pageTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(PageTitle $pageTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul_cv' => 'required',
            'subjudul_cv' => 'required',
            'judul_tutorial' => 'required',
            'subjudul_tutorial' => 'required',
            'judul_gallery' => 'required',
            'subjudul_gallery' => 'required',
            'judul_blog' => 'required',
            'judul_kategori' => 'required',
            'subjudul_kategori' => 'required',
            'kategori_tutorial' => 'required',
            'courses' => 'required',
            'cv' => 'required',
            'contact' => 'required',
            'judul_contact' => 'required',
            'subjudul_contact' => 'required',
            'judul_form' => 'required',
            'subjudul_form' => 'required',
        ]);
        $validate = $request->validate($rules);

        $pagetitle = PageTitle::find($id);
        $pagetitle->update($validate);
        return redirect()->route('pagetitle.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageTitle $pageTitle)
    {
        //
    }
}
