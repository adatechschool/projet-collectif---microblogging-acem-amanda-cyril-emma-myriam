<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes posts') }}
        </h2>
    </x-slot>

@foreach ($posts as $post)
    <img src="{{ $post->img_url }}">
    <h2>by {{$post->user->name}}</h2>
    <p>{{$post->description}}</p>

@endforeach

</x-app-layout>