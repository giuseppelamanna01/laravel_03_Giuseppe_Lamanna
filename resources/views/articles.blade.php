<x-layout>
  
  <h1>Questi sono gli articoli sui calciatori</h1>
  @foreach($articoli as $articolo)
      <p>{{ $articolo['name'] }} {{ $articolo['surname'] }} - {{ $articolo['country'] }}</p>
      <a href="{{ route('dettagli', ['id' => $articolo['id']]) }}">Vai al dettaglio</a>
      <hr>
  @endforeach

</x-layout>



