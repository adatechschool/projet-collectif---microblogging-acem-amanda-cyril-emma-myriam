

	<h1>Créer un post</h1>

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
		

		<p>
			<label for="img_url" >Image</label><br/>
			<input type="file" name="img_url" id="img_url" >

			<!-- Le message d'erreur pour "picture" -->
			@error("img_url")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="description" >Description</label><br/>
			<textarea name="description" id="description" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ old('description') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("description")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

