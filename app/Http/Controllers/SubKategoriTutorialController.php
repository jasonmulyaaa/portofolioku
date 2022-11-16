<?php

namespace App\Http\Controllers;

use App\Models\KategoriTutorial;
use App\Models\SubKategoriTutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubKategoriTutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkategoritutorials = SubKategoriTutorial::where('user_id', auth()->user()->id)->get();
        $kategoritutorial = KategoriTutorial::where('user_id', auth()->user()->id)->get();

        return view('subkategoritutorial.index', compact('subkategoritutorials', 'kategoritutorial'))->with('i', (request()->input('page', 1) - 1) * 10);
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
            'gambar' => 'image|file|required',
            'kategori' => 'required',
            'id_kategori' => 'required',
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        SubKategoriTutorial::create([
            'gambar' => $validate['gambar'],
            'user_id' => auth()->user()->id,
            'kategori' => $request->kategori,
            'id_kategori' => $request->id_kategori,
            'kategori_name' => Str::slug($request->kategori, '-')
        ]);

        return redirect()->route('subkategoritutorial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubKategoriTutorial  $subKategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function show(SubKategoriTutorial $subKategoriTutorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKategoriTutorial  $subKategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subkategoritutorial = SubKategoriTutorial::find($id);
        $kategoritutorial = KategoriTutorial::where('user_id', auth()->user()->id)->get();
        return view('subkategoritutorial.edit', compact('kategoritutorial', 'subkategoritutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKategoriTutorial  $subKategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'gambar' => 'image|file|',
            'kategori' => 'required',
            'id_kategori' => 'required',
        ]);

        $validate = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        };

        if ($request->file('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('post-images/slider');
        };

        $subkategoritutorial = SubKategoriTutorial::find($id);
        $validate['kategori_name'] = Str::slug($request->kategori, '-');
        $subkategoritutorial->update($validate);
        return redirect()->route('subkategoritutorial.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubKategoriTutorial  $subKategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkategoritutorial = SubKategoriTutorial::find($id);
        $subkategoritutorial->delete();
        return redirect()->route('subkategoritutorial.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
