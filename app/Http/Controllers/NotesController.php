<?php

namespace App\Http\Controllers;

use App\Note;

class NotesController extends Controller
{

    /**
     * Display a listing of notes
     *
     * @return Response
     */
    public function index()
    {
        $notes = Note::orderBy('updated_at', 'DESC')->with(array('type' => function ($query) {
            $query->select('id', 'type', 'colour');
        }))->get();

        return $notes;
    }

    /**
     * Show the form for creating a new note
     *
     * @return Response
     */
    public function create()
    {
        return View::make('notes.create');
    }

    /**
     * Store a newly created note in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = \Validator::make($data = \Input::all(), Note::$rules);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator)->withInput();
        }

        $note = new Note;
        $note->title = $data['title'];
        $note->text = $data['text'];
        $note->type_id = $data['type_id'];
        $note->save();

        return "Guardado correctamente";
    }

    /**
     * Display the specified note.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);

        return $note;
    }

    /**
     * Show the form for editing the specified note.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $note = Note::find($id);

        return $note;
    }

    /**
     * Update the specified note in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $note = Note::findOrFail($id);

        $validator = \Validator::make($data = \Input::all(), Note::$rules);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator)->withInput();
        }

        $note->update($data);

        return true;
    }

    /**
     * Remove the specified note from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Nota::destroy($id);

        return true;
    }

}
