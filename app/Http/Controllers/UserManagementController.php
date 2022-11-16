<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Hash;
class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where('role', '!=', 'superadmin')->paginate(5);

        $users = User::when($request->search, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%")->Orwhere('name', 'like', "%{$request->search}%");
        })->where('role', '!=', 'superadmin')->orderBy('created_at', 'desc')->paginate(5);

        return view('usermanagement.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);

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
            'foto' => 'image|file',
            'nama' => 'required',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required',
            'nis',
        ]);

        if ($request->file('foto') == NULL) {
            
            $image1 = $request->file('foto') == NULL;
        }
        else{
            $image1 = $request->file('foto')->store('post-images/slider');
        };

        $validate['foto'] = $image1;

            User::create([
                'foto' => $validate['foto'],
                'nama' => $request->nama,
                'email' => $request->email,
                'nis' => $request->nis,
                'name' => $request->name,
                'role' => $request->role,
                'password' => Hash::make($request->password),

            ]);
        return redirect()->route('usermanagement.index')->with('success', 'Berhasil Menyimpan Data!');
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
        $user = User::find($id);
        return view('usermanagement.edit', compact('user'));
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
        $rules = ([
            'foto' => 'image|file',
            'nama' => 'required',
            'nis' => 'required',
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $validate = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        };
        if ($request->file('foto')) {
            $validate['foto'] = $request->file('gambar')->store('post-images/slider');
        };

        $validate['password'] = bcrypt($request['password']);

        $user = User::find($id);
        $user->update($validate);

        return redirect()->route('usermanagement.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->foto) {
            Storage::delete($user->foto);
        }
        $user->delete();
        return redirect()->route('usermanagement.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
