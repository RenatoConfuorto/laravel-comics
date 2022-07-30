@extends('layouts.app')

@section('page-title')
    {{ $title }}
@endsection

@section('main-content')
    <div class="stripe"></div>
    <div class="comic-container">
      <div class="container">

        <div class="comic-cover">
          <span>comic book</span>
          <img src="{{ $thumb }}" alt="">
          <span>view gallery</span>
        </div>

        <div class="comic-description">
            <h2>{{ $title }}</h2>
            <div class="price-section">
                <h3>U.S. price <span>{{ $price }}</span></h3>
                <div class="available">
                  <p>Available</p>
                  <p>
                      check availability
                  </p>
                </div>
            </div>
            <p class="description">{!! $description !!}</p>
        </div>

      </div>

      <div class="comic-details">
        <div class="container">
          <div class="col">
              <h3>talent</h3>
              <div class="col-section">
                  <h4>Art By:</h4>
                  <div class="col-section-content light">
                      {{ collect($artists)->implode(', ') }}
                  </div>
              </div>

              <div class="col-section">
                  <h4>Written By:</h4>
                  <div class="col-section-content light">
                      {{ collect($writers)->implode(', ') }}
                  </div>
              </div>
          </div>

          <div class="col">
              <h3>specs</h3>
              <div class="col-section">
                  <h4>Series:</h4>
                  <div class="col-section-content">
                      {{ $series }}
                  </div>
              </div>
              <div class="col-section">
                  <h4>U.S. Price:</h4>
                  <div class="col-section-content">
                      {{ $price }}
                  </div>
              </div>
              <div class="col-section">
                  <h4>On Sale Date:</h4>
                  <div class="col-section-content">
                      {{ $sale_date }}
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>
@endsection
