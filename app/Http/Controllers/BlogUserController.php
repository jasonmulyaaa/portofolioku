<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Konfigurasi;
use App\Models\Resume;
use App\Models\Sosial;
use App\Models\Meta;
use App\Models\Tutorial;

class BlogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tutorial = Tutorial::where('slug', $slug)->first();
        $tutorial->views += 1;

        $tutorial->update();
        // $blog = Blog::where('slug', $slug)->first();
        $tutorial1 = Tutorial::where('user_id', $tutorial->user_id)->where('status', 'Aktif')->get();
        $tutorial2 = Tutorial::where('user_id', $tutorial->user_id)->where('status', 'Aktif')->get();
        $blog1 = Blog::where('user_id', $tutorial->user_id)->get();
        $resume = Resume::where('user_id', $tutorial->user_id)->first();
        $sosial = Sosial::where('user_id', $tutorial->user_id)->get();
        $sosial1 = Sosial::where('user_id', $tutorial->user_id)->get();

        $konfigurasi = Konfigurasi::all();
        $meta = Meta::all();

        return view('blogs.show', compact('resume','sosial','konfigurasi', 'blog1', 'tutorial', 'tutorial1', 'sosial1', 'meta', 'tutorial2'));
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

    public function blog_pengajar($slug)
    {
        // $tutorial = Tutorial::where('slug', $slug)->first();
        // $tutorial->views += 1;

        // $tutorial->update();
        $blog = Blog::where('slug', $slug)->first();
        // $tutorial1 = Tutorial::where('user_id', $tutorial->user_id)->where('status', 'Aktif')->get();
        $blog1 = Blog::where('user_id', $blog->user_id)->get();
        $resume = Resume::where('user_id', $blog->user_id)->first();
        $sosial = Sosial::where('user_id', $blog->user_id)->get();
        $sosial1 = Sosial::where('user_id', $blog->user_id)->get();

        $konfigurasi = Konfigurasi::all();
        $meta = Meta::all();

        return view('blogs.show_pengajar', compact('resume','sosial','konfigurasi', 'blog1', 'blog', 'sosial1', 'meta'));
    }
}
