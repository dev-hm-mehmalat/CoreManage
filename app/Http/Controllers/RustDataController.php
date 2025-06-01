<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RustDataController extends Controller
{
    /**
     * Alle Einträge aus der `projekrusta` Tabelle abrufen.
     */
    public function index()
    {
        $entries = DB::table('projekrusta')->get();
        return response()->json($entries);
    }
/**
 * Einen neuen Eintrag zur `projekrusta` Tabelle hinzufügen.
 */
public function store(Request $request)
{
    // Validierung
    $validatedData = $request->validate([
        'data' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'beschreibung' => 'required|string|max:1000',
        'startdatum' => 'required|date',
    ]);

    $id = DB::table('projekrusta')->insertGetId([
        'data' => $validatedData['data'],
        'name' => $validatedData['name'],
        'beschreibung' => $validatedData['beschreibung'],
        'startdatum' => $validatedData['startdatum'],
    ]);

    return response()->json(['message' => 'Eintrag erfolgreich hinzugefügt', 'id' => $id]);
}

    /**
     * Einen bestimmten Eintrag aus der `projekrusta` Tabelle löschen.
     */
    public function destroy($id)
    {
        DB::table('projekrusta')->where('id', $id)->delete();
        return response()->json(['message' => 'Eintrag erfolgreich gelöscht']);
    }
}
