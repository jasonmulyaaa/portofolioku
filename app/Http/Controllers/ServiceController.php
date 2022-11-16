<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('user_id', auth()->user()->id)->paginate(5);
        return view('service.index', compact('services'))->with('i', (request()->input('page', 1) - 1) * 5);

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
            'deskripsi' => 'required',
            'gambar' => 'image|file|required'
        ]);

        $image1 = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image1;

        Service::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $validate['gambar'],
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('service.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|'
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

        $service = Service::find($id);
        $service->update($validate);
        return redirect()->route('service.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        if ($service->gambar) {
            Storage::delete($service->gambar);
    };
    $service->delete();
    return redirect()->route('service.index')->with('success', 'Berhasil Menghapus Data!');
    }
    
    public function deleteCheckedService(Request $request)
    {
        $ids = $request->ids;
        Service::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
