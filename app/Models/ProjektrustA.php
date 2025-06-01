<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjektrustA extends Model
{
    use HasFactory;

    protected $table = 'projekrusta';  // Da der Tabellenname sich von der Modellbezeichnung unterscheidet, geben Sie den Tabellennamen explizit an

    protected $fillable = [
        'name',
        'beschreibung',
        'startdatum',
        'enddatum',
    ];
}
