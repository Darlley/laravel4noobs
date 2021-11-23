<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>
<body>
    <marquee behavior="" direction="">
        {{ $username }}
        @if(1 !== 1)
            - deu certo
        @else
            - não deu certo
        @endif

        @foreach ($args as $arg)
            {{ $arg }}
        @endforeach
    </marquee>
</body>
</html>