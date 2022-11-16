<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testimonialspendings = Testimonial::where('user_id', auth()->user()->id)->where('status', 'pending')->paginate(5);
        $testimonials = Testimonial::where('user_id', auth()->user()->id)->where('status', 'accept')->paginate(5);

        $testimonials = Testimonial::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->where('user_id', auth()->user()->id)->where('status', 'accept')->orderBy('created_at', 'desc')->paginate(5);

        $testimonialspendings = Testimonial::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->where('user_id', auth()->user()->id)->where('status', 'pending')->orderBy('created_at', 'desc')->paginate(5);

        return view('testimonial.index', compact('testimonials', 'testimonialspendings'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'profesi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|required'
        ]);

        $image1 = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image1;

        Testimonial::create([
            'nama' => $request->nama,
            'profesi' => $request->profesi,
            'deskripsi' => $request->deskripsi,
            'gambar' => $validate['gambar'],
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('testimonial.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'nama' => 'required',
            'profesi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|'
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

        $testimonial = Testimonial::find($id);
        $testimonial->update($validate);
        return redirect()->route('testimonial.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        if ($testimonial->gambar) {
            Storage::delete($testimonial->gambar);
    };
    $testimonial->delete();
    return redirect()->route('testimonial.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedTestimonial(Request $request)
    {
        $ids = $request->ids;
        Testimonial::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }

    public function status(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->status = 'accept';
        $testimonial->update();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial Berhasil Dikirim!');
    }

}
