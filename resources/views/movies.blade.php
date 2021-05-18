@extends('layouts.app')

@section ('title')
<title>Movies</title>
@endsection

@section ('main')
<main>
  <div class="cards">
    @foreach ($movies as $movie)
    <div class="card">
      <p>{{$movie->title}}</p>
      <p>{{$movie->nationality}}</p>
      <p>{{$movie->date}}</p>
      <p>{{$movie->vote}}</p>
    </div>
    @endforeach

  </div>
</main>


@endsection
