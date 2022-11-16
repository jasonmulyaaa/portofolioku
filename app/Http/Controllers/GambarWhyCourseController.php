<?php

namespace App\Http\Controllers;

use App\Models\GambarWhyCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarWhyCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambarwhycourse = GambarWhyCourse::all();

        return view('gambarwhycourse.index', compact('gambarwhycourse'));
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
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        GambarWhyCourse::create($validate);
        return redirect()->route('gambarwhycourse.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GambarWhyCourse  $gambarWhyCourse
     * @return \Illuminate\Http\Response
     */
    public function show(GambarWhyCourse $gambarWhyCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GambarWhyCourse  $gambarWhyCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(GambarWhyCourse $gambarWhyCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GambarWhyCourse  $gambarWhyCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul' => 'required',
            'gambar' => 'image|file',
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

        $gambarwhycourse = GambarWhyCourse::find($id);
        $gambarwhycourse->update($validate);
        return redirect()->route('gambarwhycourse.index')->with('success', 'Berhasil Mengubah Data!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GambarWhyCourse  $gambarWhyCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(GambarWhyCourse $gambarWhyCourse)
    {
        //
    }
}
