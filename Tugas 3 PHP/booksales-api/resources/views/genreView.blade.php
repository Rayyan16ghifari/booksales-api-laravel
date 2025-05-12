<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px 12px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Daftar Genre</h1>

    @if(count($genres) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                    <tr>
                        <td>{{ $genre->id }}</td>
                        <td>{{ $genre->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data genre.</p>
    @endif
</body>
</html>

