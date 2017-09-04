<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends ModuleController
{
    //non-transactional methods
    public function index() {
        return view('module.note.index');
    }
    //transactional methods
    
}
