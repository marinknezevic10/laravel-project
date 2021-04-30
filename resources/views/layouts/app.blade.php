<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SportsBlog</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Početna</a>
            </li>
            <li>
                <a href="" class="p-3">O nama</a>
            </li>
            <li>
                <a href="" class="p-3">Objave</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Marin Knežević</a>
            </li>
            <li>
                <a href="" class="p-3">Prijava</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Registracija</a>
            </li>
            <li>
                <a href="" class="p-3">Odjava</a>
            </li>
        </ul>
    </nav>
    @yield('sadrzaj')
</body>
</html>