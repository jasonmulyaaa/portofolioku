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
use App\Models\Banner;
use App\Models\KategoriCourse;
use App\Models\OurCourse;
use App\Models\GambarWhyCourse;
use App\Models\WhyCourse;
use App\Models\Tutorial;
use App\Models\KategoriTutorial;
use App\Models\PageTitle;
use App\Models\Visit;
use App\Models\Partner; 
use App\Models\User; 
use App\Models\Meta;

class HomeResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = User::where('role', 'PKL')->Orwhere('role', 'User')->get();
        $resume = Resume::orderBy('created_at', 'DESC')->limit(16)->get();
        $resume1 = Resume::all();
        $meta = Meta::all();
        $blog = Blog::limit(3)->get();
        $konfigurasi = Konfigurasi::all();
        $pagetitle = PageTitle::all();
        $banner = Banner::all();
        $kategoricourse = KategoriCourse::all();
        $ourcourse = OurCourse::all();
        $ourcourse1 = OurCourse::limit(5)->get();
        $gambarwhycourse = GambarWhyCourse::all();
        $whycourse = WhyCourse::limit(4)->get();
        $whycourse1 = WhyCourse::skip(4)->take(4)->get();
        $kategoritutorial = KategoriTutorial::all();
        $tutorial = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial1 = Tutorial::where('status', 'Aktif')->limit(3)->orderBy('created_at', 'DESC')->get();
        $tutorial2 = Tutorial::where('status', 'Aktif')->orderBy('created_at', 'DESC')->get();
        $partner = Partner::all();

        $visittotal = $_SERVER['REMOTE_ADDR'];

        $validated = [
            'visit_count' => $visittotal,
            'visit_date' => date('Y-m-d'),
        ];
        Visit::create($validated);

        return view('welcome', compact('resume', 'konfigurasi', 'banner', 'kategoricourse', 'ourcourse', 'gambarwhycourse', 'whycourse', 'whycourse1', 'tutorial', 'tutorial1', 'ourcourse1', 'pagetitle', 'resume1', 'meta', 'partner', 'tutorial2', 'kategoritutorial', 'blog'));
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

        return view('show', compact('resume', 'service', 'blog', 'client', 'education', 'portfolio', 'skill', 'sosial', 'testimonial', 'working', 'konfigurasi', 'kategori'));
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
