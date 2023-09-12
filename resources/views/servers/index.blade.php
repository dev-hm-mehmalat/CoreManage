<div class="container">
    <h1>Servers</h1>
    <a href="{{ route('servers.create') }}" class="btn btn-primary">Add New Server</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>IP Address</th>
                <th>OS Version</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servers as $server)
            <tr>
                <td>{{ $server->id }}</td>
                <td>{{ $server->name }}</td>
                <td>{{ $server->ip_address }}</td>
                <td>{{ $server->os_version }}</td>
                <td>
                    <a href="{{ route('servers.show', $server->id) }}" class="btn btn-info">View</a>
                    <form action="{{ route('servers.destroy', $server->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Create New Server</h1>

    <!-- Hier kannst du das Formular für die Servererstellung hinzufügen -->
</div>
