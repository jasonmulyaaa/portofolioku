<?php

namespace App\Http\Controllers;

use App\Models\KategoriTutorial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KategoriTutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoritutorials = KategoriTutorial::where('user_id', auth()->user()->id)->paginate(10);

        return view('kategoritutorial.index', compact('kategoritutorials'))->with('i', (request()->input('page', 1) - 1) * 10);
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
            'kategori' => 'required',
        ]);

        KategoriTutorial::create([
            'user_id' => auth()->user()->id,
            'kategori' => $request->kategori,
            'kategori_name' => Str::slug($request->kategori, '=')
        ]);

        return redirect()->route('kategoritutorial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriTutorial  $kategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriTutorial $kategoriTutorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriTutorial  $kategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoritutorial = KategoriTutorial::find($id);
        return view('kategoritutorial.edit', compact('kategoritutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriTutorial  $kategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'kategori' => 'required',
        ]);

        $validate = $request->validate($rules);

        $kategoritutorial = KategoriTutorial::find($id);
        $validate['kategori_name'] = Str::slug($request->kategori, '-');
        $kategoritutorial->update($validate);
        return redirect()->route('kategoritutorial.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriTutorial  $kategoriTutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoritutorial = KategoriTutorial::find($id);
        $kategoritutorial->delete();
        return redirect()->route('kategoritutorial.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
