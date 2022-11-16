<?php

namespace App\Http\Controllers;

use App\Models\Working;
use Illuminate\Http\Request;

class WorkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workings = Working::where('user_id', auth()->user()->id)->paginate(5);
        return view('working.index', compact('workings'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        Working::create([
            'judul' => $request->judul,
            'tahun_awal' => $request->tahun_awal,
            'tahun_akhir' => $request->tahun_akhir,
            'deskripsi' => $request->deskripsi,
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('working.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function show(Working $working)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $working = Working::find($id);
        return view('working.edit', compact('working'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Working  $working
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

        $working = Working::find($id);
        $working->update($validate);
        return redirect()->route('working.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $working = Working::find($id);
        $working->delete();
        return redirect()->route('working.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedWorking(Request $request)
    {
        $ids = $request->ids;
        Working::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
