<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function index()
    {
        $servers = DB::table('servers')->get();

        foreach ($servers as $server) {
            $containers = DB::table('containers')->where('server_id', $server->id)->get();

            foreach ($containers as $container) {
                $application = $container->application;
                $version = $container->version;

                $data = [
                    'server_id' => $server->id,
                    'container_id' => $container->id,
                    'application' => $application,
                    'version' => $version,
                ];

                DB::table('applications')->insert($data);
            }
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
