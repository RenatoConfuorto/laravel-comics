@extends('layouts.app')

@section('page-title')
    DC Comics | Comics
@endsection

@section('main-content')
    <div class="container">

      <div class="comics-list">
        
          <div class="label">
              current series
          </div>

            @foreach ($comics as $comic)
                <div class="comic-card">
                    <div class="cover">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>

                    <a href="{{ route('comic-page', ['id' => $comic['id']]) }}">{{ $comic['series'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
