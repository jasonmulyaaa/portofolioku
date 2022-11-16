<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Sosial;
use App\Models\Testimonial;
use App\Models\Working;
use App\Models\FormContact;
use App\Models\Tutorial;
use App\Models\PageTitle;
use App\Models\OurCourse;
use App\Models\Meta;

use Illuminate\Support\Facades\Storage;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resume = Resume::orderBy('created_at', 'DESC')->get();
        $konfigurasi = Konfigurasi::all();
        $resume1 = Resume::all();
        $pagetitle = PageTitle::all();
        $meta = Meta::all();
        $ourcourse1 = OurCourse::limit(5)->get();
        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();

        return view('cv.index', compact('resume', 'konfigurasi', 'ourcourse1', 'tutorial1', 'pagetitle', 'meta', 'tutorial2', 'resume1'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'user_id'=> 'required',
            'nama' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
            'instansi' => 'required',
            'no_telp' => 'required',
            'pesan' => 'required',
        ]);

        FormContact::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'instansi' => $request->instansi,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return back()->with('success', 'Pesan Anda Berhasil Terkirim! Pesan Anda Akan Dikelola Dalam 24 Jam.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $resume = Resume::where('slug', $slug)->first();
        if(empty($resume)){
            return abort(404);
        }
        else{

        $service = Service::where('user_id', $resume->user_id)->get();
        $blog = Blog::where('user_id', $resume->user_id)->get();
        $client = Client::where('user_id', $resume->user_id)->get();
        $education = Education::where('user_id', $resume->user_id)->get();
        $portfolio = Portfolio::where('user_id', $resume->user_id)->get();
        $kategori = Portfolio::where('user_id', $resume->user_id)->distinct()->get(['kategori_name', 'kategori']);

        $skill = Skill::where('user_id', $resume->user_id)->get();
        $sosial = Sosial::where('user_id', $resume->user_id)->get();
        $sosial1 = Sosial::where('user_id', $resume->user_id)->get();
        $sosial2 = Sosial::where('user_id', $resume->user_id)->get();
        $testimonial = Testimonial::where('user_id', $resume->user_id)->get();
        $working = Working::where('user_id', $resume->user_id)->get();
        $tutorial = Tutorial::where('user_id', $resume->user_id)->get();
        $konfigurasi = Konfigurasi::all();
        $meta = Meta::all();
        }

        $resume->views += 1;
        $resume->update();
        return view('cv.show', compact('resume', 'service', 'blog', 'client', 'education', 'portfolio', 'skill', 'sosial', 'testimonial', 'working', 'konfigurasi', 'kategori', 'tutorial', 'sosial1', 'sosial2', 'meta'));
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

    public function download(Request $request, $user_id){

        $resume = Resume::where('user_id', $user_id)->first();

        return Storage::download($resume->pdf);
    }

    public function testi_store(Request $request)
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

    public function show_pengajar($slug)
    {
        $resume = Resume::where('slug', $slug)->first();
        if(empty($resume)){
            return abort(404);
        }
        else
        {
            $service = Service::where('user_id', $resume->user_id)->get();
            $blog = Blog::where('user_id', $resume->user_id)->get();
            $client = Client::where('user_id', $resume->user_id)->get();
            $education = Education::where('user_id', $resume->user_id)->get();
            $portfolio = Portfolio::where('user_id', $resume->user_id)->get();
            $kategori = Portfolio::where('user_id', $resume->user_id)->distinct()->get(['kategori_name', 'kategori']);
    
            $skill = Skill::where('user_id', $resume->user_id)->get();
            $sosial = Sosial::where('user_id', $resume->user_id)->get();
            $sosial1 = Sosial::where('user_id', $resume->user_id)->get();
            $sosial2 = Sosial::where('user_id', $resume->user_id)->get();
            $testimonial = Testimonial::where('user_id', $resume->user_id)->get();
            $working = Working::where('user_id', $resume->user_id)->get();
            $tutorial = Tutorial::where('user_id', $resume->user_id)->get();
            $konfigurasi = Konfigurasi::all();
            $meta = Meta::all();

            return view('cv.show_pengajar', compact('resume', 'service', 'blog', 'client', 'education', 'portfolio', 'skill', 'sosial', 'testimonial', 'working', 'konfigurasi', 'kategori', 'tutorial', 'sosial1', 'sosial2', 'meta'));
        }
    }

}
