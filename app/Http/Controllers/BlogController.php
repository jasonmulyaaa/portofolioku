<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::where('user_id', auth()->user()->id)->paginate(5);

        $blogs = Blog::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);

        return view('blog.index', compact('blogs'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'tanggal' => date('Y-m-d'),
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        Blog::create([
            'judul' => $request->judul,
            'tanggal' => date('Y-m-d'),
            'deskripsi' => $request->deskripsi,
            'gambar' => $validate['gambar'],
            'user_id' => auth()->user()->id,
            'slug' => Str::slug($request->judul, '-'),
        ]);
        return redirect()->route('blog.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'gambar' => 'image|file|',
            'judul' => 'required',
            'deskripsi' => 'required',
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

        $blog = Blog::find($id);
        $validate['slug'] = Str::slug($request->judul, '-');
        $blog->update($validate);
        return redirect()->route('blog.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog->gambar) {
            Storage::delete($blog->gambar);
    };
    $blog->delete();
    return redirect()->route('blog.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedBlog(Request $request)
    {
        $ids = $request->ids;
        Blog::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
