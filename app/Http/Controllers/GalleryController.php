<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\KategoriGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gallerys = Gallery::all();
        $kategorigallery = KategoriGallery::all();

        // $gallerys = Gallery::when($request->search, function ($query) use ($request) {
        //     $query->where('judul', 'like', "%{$request->search}%");;
        // })->orderBy('created_at', 'desc')->paginate(5);

        // $gallerys->appends($request->only('search'));
        
        return view('gallery.index', compact('gallerys', 'kategorigallery'));
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
            'judul' => 'required',
            'kategori_gallery' => 'required',
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        Gallery::create([
            'gambar' => $validate['gambar'],
            'judul' => $request->judul,
            'kategori_gallery' => $request->kategori_gallery,
            'kategori_name' => Str::slug($request->kategori_gallery, '-'),
        ]);
        return redirect()->route('gallery.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $kategorigallery = KategoriGallery::all();
        return view('gallery.edit', compact('gallery', 'kategorigallery'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'gambar' => 'image|file|',
            'judul' => 'required',
            'kategori_gallery' => 'required',
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

        $gallery = Gallery::find($id);
        $validate['kategori_name'] = Str::slug($request->kategori_gallery, '-');
        $gallery->update($validate);
        return redirect()->route('gallery.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if ($gallery->gambar) {
            Storage::delete($gallery->gambar);
    };
    $gallery->delete();
    return redirect()->route('gallery.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
