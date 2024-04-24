<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shinkyowa Admin - {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/admin/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/') . $stylesheet }}">
</head>

<body>
    <div class="content">
        <x-admin-sidebar />
        <div class="sub-content">
            <x-admin-topbar />
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
