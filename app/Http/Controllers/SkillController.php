<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $skills = Skill::where('user_id', auth()->user()->id)->paginate(5);

        $skills = Skill::when($request->search, function ($query) use ($request) {
            $query->where('skill', 'like', "%{$request->search}%");;
        })->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);

        return view('skill.index', compact('skills'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'skill' => 'required',
            'persen' => 'required',
        ]);

        Skill::create([
            'skill' => $request->skill,
            'persen' => $request->persen,
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('skill.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = ([
            'skill' => 'required',
            'persen' => 'required',
        ]);

        $validate = $request->validate($rules);

        $skill = Skill::find($id);
        $skill->update($validate);
        return redirect()->route('skill.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $skill = Skill::find($id);
    $skill->delete();
    return redirect()->route('skill.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedSkill(Request $request)
    {
        $ids = $request->ids;
        Skill::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
