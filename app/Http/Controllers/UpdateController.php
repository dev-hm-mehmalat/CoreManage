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
    public function index(Request $request)
    {
        $content=json_decode($request->getContent(), true);
        ($content);
        $latestVersion = DB::table('servers')->where('name', '=', $content['name'])->latest()->value('os_version');

        $updates = DB::table('servers')
        ->where('os_version', '=>', $latestVersion)
        ->orWhere('os_version', '=', $latestVersion)
        ->get();


        $notifications = [];

        foreach ($updates as $update) {
            $data = [
                'server_id' => $update->id,
                'ip_address' => $update->ip_address,
                'version' => $update->os_version,
                'new_version' => $content['version'],
                'creation_date' => now(),

            ];

            $notifications[] = $data;

            $this->sendNotification($data);

        }
            $this->updateApplicationInDatabase($content);
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
            'Die TYPO3-Version auf dem Server %s (ip_address %s) muss aktualisiert werden. Die aktuelle Version ist %s, die neue Version ist %s.',
            $data['server_id'],
            $data['ip_address'],
            $data['version'],
            $data['new_version']
        );

        Mail::to("mehmalat.1986@gmail.com")->send((new UpdateNotification($message,$data)));
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
/**
 * Aktualisiert die Version einer bestimmten Anwendung in der Datenbank.
 *
 * @param Request $request
 * @return \Illuminate\Http\JsonResponse
 */
public function updateApplicationInDatabase(array $content)
{
    $applicationName = $content['name'];
    $newVersion = $content['version'];


    if (!$applicationName || !$newVersion) {
        return response()->json(['message' => 'Name und Version sind erforderlich.'], 400);
    }

    try {
        $updatedRows = DB::table('servers')
            ->where('name', $applicationName)
            ->update(['os_version' => $newVersion]);

        if ($updatedRows > 0) {
            return response()->json(['message' => 'Anwendung erfolgreich aktualisiert.']);
        } else {
            return response()->json(['message' => 'Anwendung nicht gefunden oder keine Änderungen vorgenommen.'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'Ein Fehler ist aufgetreten.', 'error' => $e->getMessage()], 500);
    }
}

}
