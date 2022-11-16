<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialPengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resumes = Resume::orderBy('created_at', 'DESC')->get();

        $resumes = Resume::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->get();

        return view('testipengajar.index', compact('resumes'));
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
            'user_id' => 'required',
            'nama' => 'required',
            'profesi' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);

        $image1 = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image1;

        Testimonial::create([
            'user_id' => $request->user_id,
            'gambar' => $validate['gambar'],
            'nama' => $request->nama,
            'profesi' => $request->profesi,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);
        return back()->with('success', 'Berhasil Mengirim Testimonial!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resume = Resume::find($id);
        return view('testipengajar.show', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
