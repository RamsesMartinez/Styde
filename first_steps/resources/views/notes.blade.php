<!doctype html>
<html lang="es">
<head>
    <title>Notes</title>
</head>
<body>
    <h2>Notes</h2>
    <ul>
        @foreach ($notes as $note)
            <li>
                {{ $note->note }}
            </li>
        @endforeach
    </ul>

</body>
</html>