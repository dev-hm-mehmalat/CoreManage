@extends('layouts.app')

@section('content')
    <h1>Server Details</h1>

    <p><strong>Name:</strong> {{ $server->name }}</p>
    <p><strong>IP Address:</strong> {{ $server->ip_address }}</p>
    <p><strong>OS Version:</strong> {{ $server->os_version }}</p>

    <!-- Hier können Sie weitere Serverdetails hinzufügen -->

    <a href="{{ route('server') }}">Zurück zur Serverliste</a>
@endsection
