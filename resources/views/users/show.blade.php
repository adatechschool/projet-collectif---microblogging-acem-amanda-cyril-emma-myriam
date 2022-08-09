<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    
    <img class="w-1/5 rounded-full" src="https://play-lh.googleusercontent.com/XVHP0sBKrRJYZq_dB1RalwSmx5TcYYRRfYMFO18jgNAnxHAIA1osxM55XHYTb3LpkV8" />
  <h2 class="font-bold">{{$user->name}}</h2>
  <p>{{$user->biography}}</p>
  <p>On this site since {{$user->created_at}}</p>
</x-app-layout>