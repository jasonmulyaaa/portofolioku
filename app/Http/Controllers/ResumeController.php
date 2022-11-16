<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Konfigurasi;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Sosial;
use App\Models\Testimonial;
use App\Models\Working;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resume = Resume::where('user_id', auth()->user()->id)->first();

        return view('resumee.index', compact('resume'));
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
            'nama' => 'required',
            'foto' => 'image|file|required',
            'pdf' => 'file|max:2048|required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'pekerjaan' => 'required',
            'about_me' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'contact_map' => 'required',

        ]);

        $image1 = $request->file('foto')->store('post-images/slider');

        $validate['foto'] = $image1;

        $file = $request->file('pdf')->store('post-images/slider');

        $validate['pdf'] = $file;

        Resume::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'about_me' => $request->about_me,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_telp' => $request->no_telp,
            'contact_map' => $request->contact_map,
            'views' => $request->views,
            'foto' => $validate['foto'],
            'pdf' => $validate['pdf'],
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($request->nama, '-'),

        ]);

        return redirect()->route('resumee.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $resume = Resume::where('slug', $slug)->first();
        $service = Service::where('user_id', $resume->user_id)->get();
        $blog = Blog::where('user_id', $resume->user_id)->get();
        $client = Client::where('user_id', $resume->user_id)->get();
        $education = Education::where('user_id', $resume->user_id)->get();
        $portfolio = Portfolio::where('user_id', $resume->user_id)->get();
        $kategori = Portfolio::where('user_id', $resume->user_id)->get();
        $skill = Skill::where('user_id', $resume->user_id)->get();
        $sosial = Sosial::where('user_id', $resume->user_id)->get();
        $testimonial = Testimonial::where('user_id', $resume->user_id)->get();
        $working = Working::where('user_id', $resume->user_id)->get();
        $konfigurasi = Konfigurasi::all();

        return view('resumee.show', compact('resume', 'service', 'blog', 'client', 'education', 'portfolio', 'skill', 'sosial', 'testimonial', 'working', 'konfigurasi', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'nama' => 'required',
            'foto' => 'image|file|',
            'pdf' => 'max:2048',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'pekerjaan' => 'required',
            'about_me' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'contact_map' => 'required',
        ]);

        $validate = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldImage1) {
                Storage::delete($request->oldImage1);
            }
        };

        if ($request->file('foto')) {
            $validate['foto'] = $request->file('foto')->store('post-images/slider');
        };

        if ($request->file('pdf')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
        };

        if ($request->file('pdf')) {
            $validate['pdf'] = $request->file('pdf')->store('post-images/slider');
        };

        $resume = Resume::find($id);
        $validate['slug'] = Str::slug($request->nama, '-');
        $resume->update($validate);
        return redirect()->route('resumee.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
