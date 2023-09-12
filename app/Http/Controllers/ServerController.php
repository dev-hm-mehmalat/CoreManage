<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServerController extends Controller
{
    public function index()
    {
        $ide_stry = env('IDET_STRY');
        $id_ind = env('ID_IND');

        if (
            $ide_stry &&
            $id_ind &&
            env('DESC_STRY') &&
            env('TGP_ENVN_PARET_ENV')
        ) {
            $servers = Server::all();
            return view('servers.index', compact('servers'));
        } else {
            return 'Fehler: Nicht alle Umgebungsvariablen sind definiert.';
        }
    }

    public function show($id)
{
    // Findet den Server mit der gegebenen ID oder gibt einen 404-Fehler zurück, falls nicht gefunden
    $server = Server::findOrFail($id);

    // Gibt die Ansicht zurück, die den Server anzeigt
    return view('servers.show', compact('server'));
}


    public function create()
    {
        return view('servers.create'); // Zeige das Formular zur Servererstellung
    }

    public function store(Request $request)
    {
        $server = new Server();
        $server->name = $request->input('name');
        $server->ip_address = $request->input('ip_address');
        $server->os_version = $request->input('os_version');
        $server->save();

        return redirect('/server'); // Nach der Erstellung zur Serverliste umleiten
    }

    public function destroy($id)
    {
        $server = Server::findOrFail($id);
        $server->delete();

        return redirect('/server'); // Nach dem Löschen zur Serverliste umleiten
    }

    // Weitere Controller-Methoden hier...
}

