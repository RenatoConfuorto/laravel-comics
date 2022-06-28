@extends('layouts.app')

@section('page-title')
    DC Comics | Comics
@endsection

@section('main-content')
    <div class="label">
      current series
    </div>

    <div class="container">

      <div class="comics-list">
  
        @foreach ($comics as $comic)
            <div class="comic-card">
              <div class="cover">
                <img src="{{ $comic['thumb'] }}" alt="">
              </div>
  
              <a href="#">{{ $comic['series'] }}</a>
            </div>
        @endforeach
      </div>
    </div>
@endsection