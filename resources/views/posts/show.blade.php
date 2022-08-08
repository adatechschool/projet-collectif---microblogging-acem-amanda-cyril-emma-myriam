<x-guest-layout>
<h1>{{ $post->title }}</h1>
  {{$post->user->name}}:
  {{$post->description}}
  <img src="{{ $post->img_url }}">
  <p><a href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>
</x-guest-layout>