<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ProjektrustA;
use Illuminate\Support\Facades\Validator;

class RustDataController extends Controller
{
    public function fetchData(Request $request)
    {
        try {
            // HTTP-Anfrage an die Rust-Anwendung senden
            $response = Http::get('http://rust-server-url:3030/get-data');

            // Überprüfen, ob die Anfrage erfolgreich war
            if ($response->successful()) {
                // JSON-Daten aus der Antwort abrufen
                $data = $response->json();

                // Überprüfen Sie die erwarteten Schlüssel in den Daten
                if (!isset($data['name'], $data['beschreibung'], $data['startdatum'], $data['enddatum'])) {
                    return back()->withErrors(['rust_server' => 'Unerwartete Datenstruktur vom Rust-Server.']);
                }

                // Validieren Sie die Daten mit Validator Facade
                $validator = Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'beschreibung' => 'required|string|max:1000',
                    'startdatum' => 'required|date',
                    'enddatum' => 'required|date|after:startdatum',
                ]);

                // Überprüfen Sie, ob die Validierung fehlgeschlagen ist
                if ($validator->fails()) {
                    return back()->withErrors($validator);
                }

                // Daten in die Datenbank einfügen
                ProjektrustA::create($data);

                // Die Daten an eine Ansicht übergeben
                return view('my_rust_data', ['data' => $data]);
            } else {
                return back()->withErrors(['rust_server' => 'Fehler beim Abrufen von Daten vom Rust-Server.']);
            }
        } catch (\Exception $e) {
            // Fehlerbehandlung, falls eine Ausnahme auftritt
            return back()->withErrors(['rust_server' => 'Ausnahme beim Abrufen von Daten vom Rust-Server.']);
        }
    }
}
