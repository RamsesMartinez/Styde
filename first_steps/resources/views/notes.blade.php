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

         <form method="POST">
             {!! csrf_field() !!}
             <textarea></textarea>
            <button type="submit">Create note</button>
        </form>
    </ul>

</body>
</html>