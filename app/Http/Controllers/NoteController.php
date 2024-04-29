<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category // Adding category field
        ]);

        return redirect()->route('notes.index');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category // Updating category field
        ]);

        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();

        return redirect()->route('notes.index');
    }
}
