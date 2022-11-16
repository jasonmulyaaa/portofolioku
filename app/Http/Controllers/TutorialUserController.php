<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use App\Models\PageTitle;
use App\Models\OurCourse;
use App\Models\Konfigurasi;
use App\Models\TutorialViews;
use App\Models\Meta;
use App\Models\SubKategoriTutorial;
use App\Models\KategoriTutorial;
use Illuminate\Http\Request;

class TutorialUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tutorials = Tutorial::where('status', 'Aktif')->latest()->paginate(9);
        $meta = Meta::all();
        $subkategoritutorial = SubKategoriTutorial::all();
        $tutorials = Tutorial::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->where('status', 'Aktif')->orderBy('created_at', 'desc')->paginate(9);

        $tutorials->appends($request->only('search'));

        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        $ourcourse1 = OurCourse::limit(5)->get();
        $konfigurasi = Konfigurasi::all();
        return view('home.tutorials.index', compact('tutorials', 'konfigurasi', 'tutorial1', 'ourcourse1', 'meta', 'tutorial2', 'subkategoritutorial'))->with('i', (request()->input('page', 1) - 1) * 9);
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
        $kategoritutorial = KategoriTutorial::where('kategori_name', $slug)->first();
        $meta = Meta::all();
        $pagetitle = PageTitle::first();
        $subkategoritutorial = SubKategoriTutorial::all();
        
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
        $tutorial3 = Tutorial::where('status', 'Aktif')->get();
        $ourcourse1 = OurCourse::limit(5)->get();
        $konfigurasi = Konfigurasi::all();
        return view('home.tutorials.show', compact('kategoritutorial', 'konfigurasi', 'tutorial1', 'tutorial2', 'ourcourse1', 'meta', 'tutorial3', 'subkategoritutorial', 'pagetitle'));
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

    public function detail($slug)
    {
        $tutorial_detail = Tutorial::where('slug', $slug)->first();
        $kategoritutorial = KategoriTutorial::where('id', $tutorial_detail->kategori)->first();
        $meta = Meta::all();
        $subkategoritutorial = SubKategoriTutorial::all();
        $pagetitle = PageTitle::first();

        $visittotal = $_SERVER['REMOTE_ADDR'];

        $validated = [
            'slug' => $tutorial_detail->slug,
            'user_id' => $tutorial_detail->user_id,
            'views' => $visittotal,
        ];
        TutorialViews::create($validated);

        $tutorial_detail->views += 1;
        $tutorial_detail->update();
        
        $tutorialviews = TutorialViews::where('slug', $slug)->distinct()->get('views')->count();

        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        $tutorial3 = Tutorial::where('status', 'Aktif')->get();
        $ourcourse1 = OurCourse::limit(5)->get();
        $konfigurasi = Konfigurasi::all();
        return view('home.tutorials.detail', compact('tutorial_detail', 'kategoritutorial', 'tutorialviews', 'konfigurasi', 'tutorial1', 'tutorial2', 'ourcourse1', 'meta', 'tutorial3', 'subkategoritutorial', 'pagetitle'));
    }

    public function intro($kategori_name)
    {
        $tutorial = SubKategoriTutorial::where('kategori_name', $kategori_name)->first();
        $tutorial_detail = Tutorial::where('sub_kategori', $tutorial->id)->orderBy('created_at', 'ASC')->first();
        $kategoritutorial = KategoriTutorial::where('id', $tutorial_detail->kategori)->first();
        $meta = Meta::all();
        $subkategoritutorial = SubKategoriTutorial::all();
        $pagetitle = PageTitle::first();

        // $visittotal = $_SERVER['REMOTE_ADDR'];

        // $validated = [
        //     'slug' => $tutorial_detail->slug,
        //     'user_id' => $tutorial_detail->user_id,
        //     'views' => $visittotal,
        // ];
        // TutorialViews::create($validated);

        // $tutorial_detail->views += 1;
        // $tutorial_detail->update();
        
        // $tutorialviews = TutorialViews::where('slug', $slug)->distinct()->get('views')->count();

        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        $tutorial3 = Tutorial::where('status', 'Aktif')->get();
        $ourcourse1 = OurCourse::limit(5)->get();
        $konfigurasi = Konfigurasi::all();
        return view('home.tutorials.intro', compact('tutorial', 'tutorial_detail', 'kategoritutorial', 'konfigurasi', 'tutorial1', 'tutorial2', 'ourcourse1', 'meta', 'tutorial3', 'subkategoritutorial', 'pagetitle'));
    }
}
