<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>
<body>
    @isset($username)
        
        <marquee behavior="" direction="">
            {{ $username }}
        </marquee>

        @if($username == 'Darlley')
            <h1>Nome esperado "{{ $username }}"</h1>
        @endif
        @unless ($username == 'Darlley')
            <h1>Nome não esperado "{{ $username }}"</h1>
        @endunless

    @endisset
</body>
</html>