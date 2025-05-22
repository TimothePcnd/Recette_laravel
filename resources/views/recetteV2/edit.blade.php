<x-layout>
{{--@extends('layouts.app')

@section('content')--}}
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('recetteV2.update', $recetteV2->id) }}" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $recetteV2->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $recetteV2->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
{{--
@endsection --}}
</x-layout>
