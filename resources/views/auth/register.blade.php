@extends('layouts.app')

@section('sadrzaj')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Ime</label>
                    <input type="text" name="name" id="name" placeholder="Vaše ime"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Korisničko ime</label>
                    <input type="text" name="username" id="name" placeholder="Korisničko ime"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Vaš email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Lozinka</label>
                    <input type="password" name="password" id="password" placeholder="Vaša lozinka"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Ponovite lozinku</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ponovite lozinku"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
            </form>
        </div>
    </div>
@endsection