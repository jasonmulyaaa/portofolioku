<?php

namespace App\Http\Controllers;

use App\Models\KategoriGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class KategoriGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorigallerys = KategoriGallery::latest()->paginate(5);

        return view('kategorigallery.index', compact('kategorigallerys'));
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
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        KategoriGallery::create([
            'kategori' => $request->kategori,
            'gambar' => $validate['gambar'],
            'slug' => Str::slug($request->kategori, '-'),
        ]);

        return redirect()->route('kategorigallery.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriGallery $kategoriGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategorigallery = KategoriGallery::find($id);
        return view('kategorigallery.edit', compact('kategorigallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'gambar' => 'image|file|',
            'kategori' => 'required',
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

        $kategorigallery = KategoriGallery::find($id);
        $validate['slug'] = Str::slug($request->kategori, '-');
        $kategorigallery->update($validate);
        return redirect()->route('kategorigallery.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriGallery  $kategoriGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorigallery = KategoriGallery::find($id);
        if ($kategorigallery->gambar) {
            Storage::delete($kategorigallery->gambar);
    };
        $kategorigallery->delete();
        return redirect()->route('kategorigallery.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
