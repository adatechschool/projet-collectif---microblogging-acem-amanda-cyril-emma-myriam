<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="grid place-items-center h-screen">
      <div class="flex items-center mt-3 gap-2">
        <img class="rounded-full w-7" src="https://www.paris.edu/wp-content/uploads/2017/11/default2-1.jpg">
        <p>{{$post->user->name}}:</p>
    </div>
      
  
      <img class="w-2/5" src="{{ $post->img_url }}">
      <p>{{$post->description}}</p>
    <div>
  </x-app-layout>