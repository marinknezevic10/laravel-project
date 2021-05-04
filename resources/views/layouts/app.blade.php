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
                <a href="/" class="p-3">Početna</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">O nama</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Objave</a>
            </li>
        </ul>

        <ul class="flex items-center">
        <!--@if (auth()->user()) ako je korisnik prijavljen prikazi njegovo ime i prezime -->
        @auth <!--lakši način -->
            <li>
                <a href="" class="p-3">{{ auth()->user()->name }}</a><!--ispisuje ime korisnika koje je unio-->
            </li>
            <li>
                <form action="{{ route ('logout') }}" method="post" class="inline p-3">
                @csrf<!-- zato sto idemo metodom post moramo koristi csrf zbog protekcije korisnika-->
                <button type="submit">Odjava</button>
                </form>
            </li>
        @endauth

        <!--@else ako nije prijavljen prikaži priavi i registraciju -->
        @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Prijava</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Registracija</a>
            </li>
        @endguest
       <!-- @endif-->
            
            
            
        </ul>
    </nav>
    @yield('sadrzaj')
</body>
</html>