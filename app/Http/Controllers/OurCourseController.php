<?php

namespace App\Http\Controllers;

use App\Models\OurCourse;
use App\Models\KategoriCourse;
use App\Models\User;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OurCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourcourses = OurCourse::latest()->paginate(5);
        $kategoricourse = KategoriCourse::all();

        $akun = User::where('role', 'Pengajar')->get();


        return view('ourcourse.index', compact('ourcourses', 'kategoricourse', 'akun'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'pengajar' => 'required',
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        OurCourse::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'pengajar' => $request->pengajar,
            'gambar' => $validate['gambar'],
            'slug' => Str::slug($request->judul, '-'),
        ]);
        return redirect()->route('ourcourse.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurCourse  $ourCourse
     * @return \Illuminate\Http\Response
     */
    public function show(OurCourse $ourCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurCourse  $ourCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ourcourse = OurCourse::find($id);
        $kategoricourse = KategoriCourse::all();
        $akun = User::where('role', 'Pengajar')->get();

        return view('ourcourse.edit', compact('ourcourse', 'kategoricourse', 'akun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurCourse  $ourCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'gambar' => 'image|file|',
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'pengajar' => 'required',
            'slug',
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

        $ourcourse = OurCourse::find($id);
        $validate['slug'] = Str::slug($request->judul, '-');
        $ourcourse->update($validate);
        return redirect()->route('ourcourse.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurCourse  $ourCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourcourse = OurCourse::find($id);

        if ($ourcourse->gambar) {
            Storage::delete($ourcourse->gambar);
    };
    $ourcourse->delete();
    return redirect()->route('ourcourse.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
