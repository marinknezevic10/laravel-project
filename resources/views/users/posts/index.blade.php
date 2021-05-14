@extends('layouts.app')

@section('sadrzaj')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
        @if($posts->count())
                @foreach($posts as $post)
                <x-post :post="$post" />
                @endforeach
                
                {{ $posts->links() }}<!-- pagination-->
            @else
                <p>{{ $user->name }} nema nikakvih objava!</p>
            @endif
        </div>
    </div>
@endsection
