<?php

namespace App\Http\Controllers;

use App\Models\Sosial;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Working;
use App\Models\Education;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Tutorial;
use App\Models\Resume;
use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sosial = Sosial::where('user_id', auth()->user()->id)->count();
        $service = Service::where('user_id', auth()->user()->id)->count();
        $skill = Skill::where('user_id', auth()->user()->id)->count();
        $working = Working::where('user_id', auth()->user()->id)->count();
        $education = Education::where('user_id', auth()->user()->id)->count();
        $client = Client::where('user_id', auth()->user()->id)->count();
        $testimonial = Testimonial::where('user_id', auth()->user()->id)->count();
        $blog = Blog::where('user_id', auth()->user()->id)->count();
        $portfolio = Portfolio::where('user_id', auth()->user()->id)->count();
        $tutorial = Tutorial::where('user_id', auth()->user()->id)->count();

        $visittotal = Visit::count();
        $visittoday = Visit::where('visit_date', date('Y-m-d'))->count();
        $visituniqe = Visit::distinct()->get('visit_count')->count();
        $totalcv = Resume::count();
        $resumes = Resume::orderBy('views', 'DESC')->paginate(10);

        $resumes = Resume::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%");;
        })->orderBy('views', 'DESC')->paginate(10);

        return view('dashboard', compact('totalcv', 'sosial', 'service', 'skill', 'working', 'education', 'client', 'testimonial', 'blog', 'portfolio', 'tutorial', 'visittotal', 'visittoday', 'visituniqe', 'resumes'));
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
    public function show($id)
    {
        //
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
