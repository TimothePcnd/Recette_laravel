<x-layout>
    <h1>Mes recettes</h1>

    @foreach($recettes as $key => $recette)
        <p>
            <a href="{{ route('recettes.show', $key) }}">
            {{$recette['title']}}</a>
        </p>
    @endforeach
</x-layout>
