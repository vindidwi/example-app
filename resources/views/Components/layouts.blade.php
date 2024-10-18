<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

    <!-- Include header -->
    @include('Components.header')

    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Include footer -->
    @include('Components.footer')

</body>
</html>
