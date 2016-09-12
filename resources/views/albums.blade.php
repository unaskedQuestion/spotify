<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotify</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Album Title</th>
                <th>Song Title</th>
                <th>Duration</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                @foreach ($album->songs as $song)
                    <tr>
                        <td>{{ $album->title }}</td>
                        <td>{{ $song->title }}</td>
                        <td>{{ $song->duration }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
