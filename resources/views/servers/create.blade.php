<form method="POST" action="{{ route('servers.store') }}">
    @csrf
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="ip_address">IP Address</label>
        <input type="text" name="ip_address" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="os_version">OS Version</label>
        <input type="text" name="os_version" class="form-control" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Create Server</button>
</form>
