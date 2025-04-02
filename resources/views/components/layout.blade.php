@props(["title", "slot"])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel='stylesheet' />
    <title>{{ $title }}</title>
</head>
<body>
    {{ $slot }}
</body>
</html>
