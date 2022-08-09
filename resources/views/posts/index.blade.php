<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

<div class="masonry sm:masonry-sm md:masonry-md pl-10 pr-10 pt-10">
    @foreach ($posts as $post)
    <div class="rounded-lg bg-white-500 p-2 break-inside mt-3">
    <a href="/posts/{{$post->id}}"><img class="rounded-md" src="{{ $post->img_url }}"></a>
    <p class="mt-1.5">{{$post->description}}</p>
    <div class="flex items-center mt-1 gap-2">
    <img class="rounded-full w-7" src="https://www.paris.edu/wp-content/uploads/2017/11/default2-1.jpg">
    <h2 class="font-semibold">{{$post->user->name}}</h2>
    </div>
    <!--<img src = "{{url('/1B0XWTzkmKaXb8Q6dy45fJpmiKQj5KzvYHhTUkmb.jpg')}}" />-->

    </div>
    @endforeach
</div>

</x-app-layout>