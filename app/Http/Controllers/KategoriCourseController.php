<?php

namespace App\Http\Controllers;

use App\Models\KategoriCourse;
use Illuminate\Http\Request;

class KategoriCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoricourses = KategoriCourse::latest()->paginate(5);

        return view('kategoricourse.index', compact('kategoricourses'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        KategoriCourse::create($validate);

        return redirect()->route('kategoricourse.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriCourse  $kategoriCourse
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriCourse $kategoriCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriCourse  $kategoriCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoricourse = KategoriCourse::find($id);
        return view('kategoricourse.edit', compact('kategoricourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriCourse  $kategoriCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'kategori' => 'required',
        ]);

        $validate = $request->validate($rules);

        $kategoricourse = KategoriCourse::find($id);
        $kategoricourse->update($validate);
        return redirect()->route('kategoricourse.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriCourse  $kategoriCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoricourse = KategoriCourse::find($id);
        $kategoricourse->delete();
        return redirect()->route('kategoricourse.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
