<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    protected $redirectTo = '/dashboard'; // Anpassen, wo der Benutzer nach dem erfolgreichen Login umgeleitet werden soll

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Anpassen, je nachdem wie deine Login-View heißt
    }

    // Du kannst die anderen Methoden aus AuthenticatesUsers hier anpassen, falls nötig

    // Beispiel für die Anpassung der logout-Methode:
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Anpassen, wo der Benutzer nach dem Logout umgeleitet werden soll
    }
}

