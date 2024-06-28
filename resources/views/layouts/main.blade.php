<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Rumah Sehat Herbal Inti Sehat TCM</title>
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>
