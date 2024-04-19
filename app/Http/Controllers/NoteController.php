<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::all_notes();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        Note::create([
            'title'=> $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('notes.index');
    }

    public function edit($id)
    {
        return view('notes.edit')
        ->with('note',Note::nota_por_id($id));
    }

    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }
}
