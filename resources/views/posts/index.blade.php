<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

<div class="flex justify-center flex-row flex-wrap gap-3 pt-20 pl-20 pr-20 pb-10 columns-4">
    @foreach ($posts as $post)
    <div class="w-64">
    <img class="rounded-md" src="{{ $post->img_url }}">
    <h2>by {{$post->user->name}}</h2>
    <p>{{$post->description}}</p>
    </div>
    @endforeach
</div>

</x-app-layout>