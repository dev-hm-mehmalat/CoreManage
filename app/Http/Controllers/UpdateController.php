<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\UpdateNotification;
use Illuminate\Support\Facades\Mail;

class UpdateController extends Controller
{
    /**
     * Gibt eine Liste aller Anwendungen zurück, die aktualisiert werden müssen.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $latestVersion = DB::table('applications')->where('name', '=', 'typo3')->latest()->value('version');

        $updates = DB::table('applications')
            ->where('version', '<', $latestVersion)
            ->orWhere('version', '=', $latestVersion)
            ->get();

        $notifications = [];

        foreach ($updates as $update) {
            $data = [
                'server_id' => $update->server_id,
                'container_id' => $update->container_id,
                'application' => $update->application,
                'version' => $update->version,
                'new_version' => $latestVersion,
                'creation_date' => now(),
            ];

            $notifications[] = $data;

            $this->sendNotification($data);
        }

        return response()->json([
            'success' => true,
            'notifications' => $notifications,
        ]);
    }

    /**
     * Sendet eine Benachrichtigungs-E-Mail an den Benutzer, wenn eine Anwendung aktualisiert werden muss.
     *
     * @param array $data
     */
    public function sendNotification($data)
    {
        $user = DB::table('users')->where('id', $data['server_id'])->first();

        $message = sprintf(
            'Die TYPO3-Version auf dem Server %s (Container %s) muss aktualisiert werden. Die aktuelle Version ist %s, die neue Version ist %s.',
            $data['server_id'],
            $data['container_id'],
            $data['version'],
            $data['new_version']
        );

        Mail::to($user->email)->send((new UpdateNotification($message)));
    }

    /**
     * Aktualisiert eine bestimmte Anwendung.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $application = $request->input('application');

        $result = $this->updateApplicationLogic($application);

        $message = $result ? 'Die Anwendung wurde erfolgreich aktualisiert.' : 'Beim Aktualisieren der Anwendung ist ein Fehler aufgetreten.';
        $code = $result ? 200 : 500;

        return response()->json(['message' => $message], $code);
    }

    /**
     * Aktualisiert eine bestimmte Anwendung.
     *
     * @param string $application
     * @return bool
     */
    private function updateApplicationLogic(string $application)
    {
        // Implementiere hier die Update-Logik für die Anwendung

        $result = true;  // Nehmen Sie an, dass das Update erfolgreich war.

        return $result;
    }
}
