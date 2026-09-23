<x-layout>
  
  <h1>Pagina di dettaglio</h1>
  <h2>{{ $articolo['name'] }} {{ $articolo['surname'] }}</h2>
  <p>Paese: {{ $articolo['country'] }}</p>
  <p>Eta: {{ $articolo['age'] }}</p>
  <a href="{{ route('articoli') }}">Torna indietro</a>

</x-layout>



