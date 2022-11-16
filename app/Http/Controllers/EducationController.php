<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::where('user_id', auth()->user()->id)->paginate(5);
        return view('education.index', compact('educations'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'tahun_awal' => 'required',
            'tahun_akhir' => 'required',
            'deskripsi' => 'required',

        ]);

        Education::create([
            'judul' => $request->judul,
            'tahun_awal' => $request->tahun_awal,
            'tahun_akhir' => $request->tahun_akhir,
            'deskripsi' => $request->deskripsi,
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('education.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::find($id);
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul' => 'required',
            'tahun_awal' => 'required',
            'tahun_akhir' => 'required',
            'deskripsi' => 'required',
        ]);

        $validate = $request->validate($rules);

        $education = Education::find($id);
        $education->update($validate);
        return redirect()->route('education.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->route('education.index')->with('success', 'Berhasil Menghapus Data!');
    }
    
    public function deleteCheckedEducation(Request $request)
    {
        $ids = $request->ids;
        Education::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
