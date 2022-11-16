<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Konfigurasi;
use App\Models\OurCourse;
use App\Models\Tutorial;
use App\Models\PageTitle;
use App\Models\Meta;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle = PageTitle::all();
        $konfigurasi = Konfigurasi::all();
        $meta = Meta::all();
        $ourcourse1 = OurCourse::limit(5)->get();
        $tutorial1 = Tutorial::limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        
        return view('home.contact.index', compact('konfigurasi', 'tutorial1', 'ourcourse1', 'pagetitle', 'meta', 'tutorial2'));
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
        $validate = $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'subjek' => 'required',
            'keterangan' => 'required',

        ]);

        ContactUs::create($validate);

        return redirect()->route('contact.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
