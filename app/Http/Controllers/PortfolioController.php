<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $portfolios = Portfolio::where('user_id', auth()->user()->id)->paginate(5);

        $portfolios = Portfolio::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");
        })->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);

        return view('portfolio.index', compact('portfolios'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|required',
            'video',
            'link',
            'screenshot' => 'image|file|',
        ]);

        if ($request->file('screenshot') != NULL && $request->link != NULL) {

            return redirect()->route('portfolio.index')->with('errors', 'Pilih Salah Satu Data!');
        }

        if ($request->link != NULL && $request->video != NULL) {

            return redirect()->route('portfolio.index')->with('errors', 'Pilih Salah Satu Data!');
        }

        if ($request->file('screenshot') != NULL && $request->video != NULL) {

            return redirect()->route('portfolio.index')->with('errors', 'Pilih Salah Satu Data!');
        }

        if ($request->file('screenshot') == NULL && $request->video == NULL && $request->link == NULL) {

            return redirect()->route('portfolio.index')->with('errors', 'Harap Isi Screenshot\Link\Video!');
        }

        $image1 = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image1;

        if ($request->file('screenshot') == NULL) {
            
            $image2 = $request->file('screenshot') == NULL;
        }
        else{
            $image2 = $request->file('screenshot')->store('post-images/slider');
        };

        $validate['screenshot'] = $image2;


        Portfolio::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'kategori_name' => Str::slug($request->kategori, '-'),
            'deskripsi' => $request->deskripsi,
            'gambar' => $validate['gambar'],
            'link' => $request->link,
            'video' => $request->video,
            'screenshot' => $validate['screenshot'],
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('portfolio.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'gambar' => 'image|file|',
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

        $portfolio = Portfolio::find($id);
        $validate['kategori_name'] = Str::slug($request->kategori, '-');
        $portfolio->update($validate);
        return redirect()->route('portfolio.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        if ($portfolio->gambar) {
            Storage::delete($portfolio->gambar);
    };
    $portfolio->delete();
    return redirect()->route('portfolio.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedPortfolio(Request $request)
    {
        $ids = $request->ids;
        Portfolio::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
