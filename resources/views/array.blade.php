<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Użytkownik</title>
</head>
<body>
    <h3>Użytkownik</h3>
    {{-- {{print_r($user)}} --}}
    Imię i nazwisko: {{$user ['firstName']}} {{$user ['lastName']}}
    <ul>
        @foreach ($user['hobby'] as $hobby)
            <li>{{$hobby}}</li>
        @endforeach
    </ul>
</body>
</html>