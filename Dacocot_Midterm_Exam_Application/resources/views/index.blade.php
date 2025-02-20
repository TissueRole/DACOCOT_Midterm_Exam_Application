<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>
    <h1>Movie List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie['title'] }}</td>
                    <td>{{ $movie['director'] }}</td>
                    <td>{{ $movie['year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
