<x-layout>
{{--@extends('layouts.app')

@section('content')--}}
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('recetteV2.update', $recetteV2->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $recetteV2->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $recetteV2->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
{{--
@endsection --}}
</x-layout>
