
<?php

namespace App\Http\Controllers;

use App\Models\ProjektrustA;
use App\Http\Requests\Projektrust_ARequest;
use Illuminate\Http\Request;

class ProjektrustController extends Controller
{
    // Zeigt ein Formular zum Erstellen eines neuen Projekts an
    public function create()
    {
        return view('projektrusta.create');
    }

    // Speichert ein neues Projekt mit Custom Request
    public function store(Projektrust_ARequest $request)
    {
        $data = $request->validated();

        ProjektrustA::create($data);

        return redirect()->route('projektrusta.index')->with('success', 'Daten wurden erfolgreich gespeichert.');
    }

    // Zeigt alle Projekte
    public function index()
    {
        $projekte = ProjektrustA::all();
        return view('projektrusta.index', ['projekte' => $projekte]);
    }

    // Weitere Methoden können hier hinzugefügt werden...
}
