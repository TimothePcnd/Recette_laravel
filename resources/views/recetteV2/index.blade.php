<x-layout>

{{--@extends('layouts.app')--}}
{{--@section('content')--}}

    <div class="container">
        <h1>Recette Manager</h1>
        <a href="{{ route('recetteV2.create') }}" class="btn btn-primary mb-3">Create Recette</a>

        @if ($recettesV2->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="p-3 mb-2 bg-secondary text-white">Title</th>
                    <th class="p-3 mb-2 bg-secondary text-white">Description</th>
                    <th class="p-3 mb-2 bg-secondary text-white">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($recettesV2 as $recetteV2)
                    <tr>
                        <td class="">{{ $recetteV2->title }}</td>
                        <td>{{ $recetteV2->description }}</td>
                        <td>
                            <a href="{{ route('recetteV2.edit', $recetteV2->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('recetteV2.destroy', $recetteV2->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No tasks available.</p>
        @endif
    </div>


{{--@endsection--}}
</x-layout>
