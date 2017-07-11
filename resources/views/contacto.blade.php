<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>My page Web</title>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1>Personas que se contactaron</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Mensaje</th>
            </tr>
            </thead>
            <tbody>

            @forelse($messages as $message)
            <tr>
                <td>{{ $message-> id }}</td>
                <td>{{ $message-> name}}</td>
                <td>{{ $message-> email }}</td>
                <td>{{ $message-> phone }}</td>
                <td>{{ $message-> message }}</td>
            </tr>
            @empty
                <p>No se ha contactado ninguna persona</p>
            @endforelse
            </tbody>
        </table>

</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>