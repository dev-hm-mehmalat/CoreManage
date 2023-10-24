<?php

namespace App\Http\Controllers;

use App\Models\ProjektrustA;
use App\Http\Requests\Projektrust_ARequest;
use Illuminate\Http\Request;

class ProjektrustController extends Controller
{
    public function store(Projektrust_ARequest $request)
    {
        $data = $request->validated();

        ProjektrustA::create($data);

        return redirect()->route('index')->with('success', 'Daten wurden erfolgreich gespeichert.');
    }
}
