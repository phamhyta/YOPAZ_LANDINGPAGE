<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>YOPAZ</title>
</head>
<body>
    @include('front-end.components.header')
    @yield('content')
    @include('front-end.components.footer')
</html>
