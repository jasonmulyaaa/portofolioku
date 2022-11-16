<?php

namespace App\Http\Controllers;

use App\Models\WhyCourse;
use Illuminate\Http\Request;

class WhyCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whycourses = WhyCourse::latest()->paginate(5);

        return view('whycourse.index', compact('whycourses'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'icon' => 'required',
            'deskripsi' => 'required',
        ]);

        WhyCourse::create($validate);
        return redirect()->route('whycourse.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhyCourse  $whyCourse
     * @return \Illuminate\Http\Response
     */
    public function show(WhyCourse $whyCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhyCourse  $whyCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whycourse = WhyCourse::find($id);
        return view('whycourse.edit', compact('whycourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhyCourse  $whyCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul' => 'required',
            'icon' => 'required',
            'deskripsi' => 'required',
        ]);

        $validate = $request->validate($rules);

        $whycourse = WhyCourse::find($id);
        $whycourse->update($validate);
        return redirect()->route('whycourse.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhyCourse  $whyCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whycourse = WhyCourse::find($id);
        $whycourse->delete();
        return redirect()->route('whycourse.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
