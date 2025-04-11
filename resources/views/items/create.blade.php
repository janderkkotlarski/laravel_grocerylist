@extends('layouts.app')

@section('create', 'Create')

@section('content')
	<p>This is the create page.</p>
@endsection

<h1>Nieuw Item Aanmaken</h1>
<form action="{{ route('items.store') }}" method="POST">
	@csrf
	<label for="name">Naam:</label>
	<input type="text" id="name" name="name" required>
	<br>
	<label for="description">Beschrijving:</label>
	<textarea id="description" name="description"></textarea>
	<label for="category">Categorie:</label>
	<select name="category_id" id="category" required>
		@foreach($categories as $category)
			<option value="{{ $category->id }}">{{ $category->name }}</option>
		@endforeach
	</select>
	<br>
	<button type="submit">Opslaan</button>
</form>