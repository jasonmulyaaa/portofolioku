<?php

namespace App\Http\Controllers;

use App\Models\Sosial;
use Illuminate\Http\Request;

class SosialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosials = Sosial::where('user_id', auth()->user()->id)->paginate(5);
        return view('sosial.index', compact('sosials'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'nama_sosmed' => 'required',
            'link' => 'required',
        ]);

        Sosial::create([
            'nama_sosmed' => $request->nama_sosmed,
            'link' => $request->link,
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('sosial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sosial  $sosial
     * @return \Illuminate\Http\Response
     */
    public function show(Sosial $sosial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sosial  $sosial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sosial = Sosial::find($id);
        return view('sosial.edit', compact('sosial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sosial  $sosial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'nama_sosmed' => 'required',
            'link' => 'required',
        ]);

        $validate = $request->validate($rules);

        $sosial = Sosial::find($id);
        $sosial->update($validate);
        return redirect()->route('sosial.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sosial  $sosial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $sosial = Sosial::find($id);
    $sosial->delete();
    return redirect()->route('sosial.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedSosial(Request $request)
    {
        $ids = $request->ids;
        Sosial::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
