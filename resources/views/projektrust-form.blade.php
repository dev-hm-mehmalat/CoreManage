

<!DOCTYPE html>
<html>
<head>
    <title>Projektrust Formular</title>
</head>
<body>
    <form action="{{ route('speichern') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="beschreibung" placeholder="Beschreibung">
        <input type="date" name="startdatum">
        <input type="date" name="enddatum">
        <button type="submit">Speichern</button>
    </form>
</body>
</html>


