<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\OurCourse;
use App\Models\Konfigurasi;
use App\Models\Tutorial;
use App\Models\Meta;
use Illuminate\Http\Request;

class BlogHomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::latest()->paginate(9);
        $meta = Meta::all();
        
        $blogs = Blog::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(9);

        $blogs->appends($request->only('search'));

        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        $ourcourse1 = OurCourse::limit(5)->get();
        $konfigurasi = Konfigurasi::all();
        return view('home.blogger.index', compact('blogs', 'konfigurasi', 'tutorial1', 'ourcourse1', 'meta', 'tutorial2'))->with('i', (request()->input('page', 1) - 1) * 9);
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
        $blog = Blog::where('slug', $slug)->first();
        $meta = Meta::all();
        
        // $visittotal = $_SERVER['REMOTE_ADDR'];

        // $validated = [
        //     'slug' => $tutorial->slug,
        //     'user_id' => $tutorial->user_id,
        //     'views' => $visittotal,
        // ];
        // TutorialViews::create($validated);

        // $tutorial->views += 1;
        // $tutorial->update();
        
        // $tutorialviews = TutorialViews::where('slug', $slug)->distinct()->get('views')->count();

        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        $blog3 = Blog::all();
        $ourcourse1 = OurCourse::limit(5)->get();
        $konfigurasi = Konfigurasi::all();
        return view('home.blogger.show', compact('konfigurasi', 'tutorial1', 'tutorial2', 'ourcourse1', 'meta', 'blog', 'blog3'));
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
