<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello Emma! Miaoooo !
                    <p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('posts.create') }}" title="Créer un article" >Créer un nouveau post</a>
	</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
