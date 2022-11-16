<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfigurasi = Konfigurasi::all();

        return view('konfigurasi.index', compact('konfigurasi'));
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
            'judul' => 'required',
            'favicon' => 'image|file|required',
            'logo_header' => 'image|file|required',
            'deskripsi' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'instagram' => 'required',
            'email' => 'required',
        ]);

        $image = $request->file('favicon')->store('post-images/slider');

        $image1 = $request->file('logo_header')->store('post-images/slider');

        $validate['favicon'] = $image;

        $validate['logo_header'] = $image1;

        Konfigurasi::create($validate);
        return redirect()->route('konfigurasi.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konfigurasi $konfigurasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konfigurasi $konfigurasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul' => 'required',
            'favicon' => 'image|file',
            'logo_header' => 'image|file',
            'logo_footer' => 'image|file',
            'page_header' => 'image|file',
            'deskripsi' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'instagram' => 'required',
            'email' => 'required',
            'map' => 'required',

        ]);
        $validate = $request->validate($rules);

        if ($request->file('favicon')) {
            if ($request->oldImage1) {
                Storage::delete($request->oldImage1);
            }
        };

        if ($request->file('favicon')) {
            $validate['favicon'] = $request->file('favicon')->store('post-images/slider');
        };

        if ($request->file('logo_header')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
        };

        if ($request->file('logo_header')) {
            $validate['logo_header'] = $request->file('logo_header')->store('post-images/slider');
        };

        if ($request->file('logo_footer')) {
            if ($request->oldImage3) {
                Storage::delete($request->oldImage3);
            }
        };

        if ($request->file('logo_footer')) {
            $validate['logo_footer'] = $request->file('logo_footer')->store('post-images/slider');
        };

        if ($request->file('page_header')) {
            if ($request->oldImage4) {
                Storage::delete($request->oldImage4);
            }
        };

        if ($request->file('page_header')) {
            $validate['page_header'] = $request->file('page_header')->store('post-images/slider');
        };

        $konfigurasi = Konfigurasi::find($id);
        $konfigurasi->update($validate);
        return redirect()->route('konfigurasi.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konfigurasi $konfigurasi)
    {
        //
    }
}
