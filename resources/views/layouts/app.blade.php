<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Material Dashboard 2 by Creative Tim</title>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />
    <!-- Include other CSS and JS files as needed -->
</head>
<body>
    <!-- Navbar content -->
    @include('layouts.navbar')

    <!-- Sidebar content -->
    @include('layouts.sidebar')

    <!-- Main content -->
    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
