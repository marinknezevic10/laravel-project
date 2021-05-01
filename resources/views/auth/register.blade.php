@extends('layouts.app')

@section('sadrzaj')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Ime</label>
                    <input type="text" name="name" id="name" placeholder="Vaše ime"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')
                    border-red-500 @enderror" value="{{ old('name') }}"> <!--{{ old('name') }}, ostaje na stranici ako je korisnik unio krive podatke-->

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Korisničko imeee</label>
                    <input type="text" name="username" id="name" placeholder="Korisničko ime"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username')
                    border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Vaš email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')
                    border-red-500 @enderror" value="{{ old('email') }}">
                    
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Lozinka</label>
                    <input type="password" name="password" id="password" placeholder="Vaša lozinka"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')
                    border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Ponovite lozinku</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ponovite lozinku"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation')
                    border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                    font-medium w-full">Registriraj se</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection