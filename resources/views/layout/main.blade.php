<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>frontend</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
</body>
</html>