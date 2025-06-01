<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeinController extends Controller
{
    public function index(Request $request)
    {
        // Hier kommt Ihre spezifische Logik für die Index-Aktion
        return view('index'); // Zeigen Sie die "index"-Ansicht an
    }

    public function create()
    {
        // Hier kommt Ihre spezifische Logik für die Create-Aktion
        return view('create');
        // Zeigen Sie die "create"-Ansicht an
    }

    // Weitere Controller-Methoden und Logik...
}
