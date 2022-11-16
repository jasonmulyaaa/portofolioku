<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use App\Models\KategoriTutorial;
use App\Models\SubKategoriTutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tutorials = Tutorial::where('user_id', auth()->user()->id)->paginate(5);
        $kategoritutorial = KategoriTutorial::where('user_id', auth()->user()->id)->get();
        $subkategoritutorial = SubKategoriTutorial::where('user_id', auth()->user()->id)->get();

        $tutorials = Tutorial::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);

        $tutorials->appends($request->only('search'));

        return view('tutorial.index', compact('tutorials', 'kategoritutorial', 'subkategoritutorial'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'deskripsi' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'keywords' => 'required',
            'status' => 'required',
            'nama',
            'slug',
            'views',
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;


        Tutorial::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'sub_kategori' => $request->sub_kategori,
            'keywords' => $request->keywords,
            'status' => $request->status,
            'views' => $request->views,
            'gambar' => $validate['gambar'],
            'nama' => auth()->user()->nama,
            'user_id' => auth()->user()->id,
            // 'user_id' => auth()->user()->id,
            'slug' => Str::slug($request->judul, '-'),
        ]);
        return redirect()->route('tutorial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorial $tutorial)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorial = Tutorial::find($id);
        $kategoritutorial = KategoriTutorial::where('user_id', auth()->user()->id)->get();
        $subkategoritutorial = SubKategoriTutorial::where('user_id', auth()->user()->id)->get();
        return view('tutorial.edit', compact('tutorial', 'kategoritutorial' ,'subkategoritutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'gambar' => 'image|file|',
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'keywords' => 'required',
            'status' => 'required',
            'nama',
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

        $tutorial = Tutorial::find($id);
        $validate['slug'] = Str::slug($request->judul, '-');
        $tutorial->update($validate);
        return redirect()->route('tutorial.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutorial = Tutorial::find($id);

        if ($tutorial->gambar) {
            Storage::delete($tutorial->gambar);
    };
    $tutorial->delete();
    return redirect()->route('tutorial.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedTutorial(Request $request)
    {
        $ids = $request->ids;
        Tutorial::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }

    public function getSubKategori($departmentid=0)
    {
    // Fetch Employees by Departmentid
    $empData['data'] = SubKategoriTutorial::select('id','kategori')
    ->where('id_kategori',$departmentid)
    ->get();

    return response()->json($empData);    
}
}
