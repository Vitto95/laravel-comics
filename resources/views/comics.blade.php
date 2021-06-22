@extends('layouts.main')

@section('content')

<main>
  
    <div class="container">
      <div class="comics">
        @foreach ($comics as $comic)
          <div class="comics-item">
            <img src="{{ $comic['thumb'] }}" alt="">
            <p>{{ $comic['series'] }}</p>
          </div>

        @endforeach

      </div>


      <button>Load More</button>
    </div>
  

  
</main>

@endsection