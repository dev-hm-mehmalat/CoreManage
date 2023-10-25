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
        // Die composer.lock-Datei lesen
          // Hier können Sie die Daten aus dem Request oder anderen Quellen abrufen
          $data = 'Ihre Daten'; // Hier Ihre Daten setzen
          $name = 'Standardwert'; // Hier Ihren Standardwert setzen
          $beschreibung = 'Ihre Beschreibung'; // Hier Ihre Beschreibung setzen
          $startdatum = '2023-10-24'; // Hier das gewünschte Startdatum setzen



            $id = DB::table('projekrusta')->insertGetId([
                'data' => $data,
                'name' => $name,
              'beschreibung' => $beschreibung, // Hinzufügen der Beschreibung
                'startdatum' => $startdatum,
            ]);
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



