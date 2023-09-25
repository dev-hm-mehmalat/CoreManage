<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\MeinController;
use Illuminate\Routing\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Route
Route::get('/', function () {
    $ide_stry = env('IDET_STRY');
    $id_ind = env('ID_IND');
    return "IDET_STRY: $ide_stry, ID_IND: $id_ind";
});

// Test Environment Route
Route::get('/test-env', function() {
    $ide_stry = env('IDET_STRY');
    $id_ind = env('ID_IND');
    return "IDET_STRY: $ide_stry, ID_IND: $id_ind";
});
// routes/web.php

// Server Routes
Route::get('/server', [ServerController::class, 'index'])->name('server'); // Liste der Server
Route::get('/servers/create', [ServerController::class, 'create'])->name('servers.create'); // Formular zum Erstellen eines Servers
Route::post('/servers', [ServerController::class, 'store'])->name('servers.store'); // Route zum Speichern eines Servers
Route::get('/servers/{id}', [ServerController::class, 'show'])->name('servers.show'); // Route zum Anzeigen eines bestimmten Servers
Route::delete('/servers/{id}', [ServerController::class, 'destroy'])->name('servers.destroy'); // Route zum Löschen eines Servers
Route::post('/update-application', 'UpdateController@updateApplication');
Route::post('/update-application-database', [UpdateController::class, 'updateApplicationInDatabase'])->name('update.database');

// Route zum Aktualisieren von Daten
Route::post('/update', [UpdateController::class, 'index'])->name('update.index');



// Dashboard Route (with middleware)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // Hier kannst du deine Dashboard-Ansicht definieren
        // Zum Beispiel: return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Authentifizierungsrouten
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Weitere Authentifizierungsrouten können hier hinzugefügt werden...
