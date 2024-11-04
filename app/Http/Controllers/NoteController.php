<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
class NoteController extends Controller
{
    public function index()
    {
        $notes=Note::orderBy('id','desc')->get();
        return view('note/index',compact('notes'));
    }
}
