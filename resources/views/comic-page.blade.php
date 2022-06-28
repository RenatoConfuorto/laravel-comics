@extends('layouts.app')

@section('page-title')
    {{ $title }}
@endsection

@section('main-content')
    <div class="comic-cover">
        <img src="{{ $thumb }}" alt="">
    </div>

    <div class="comic-description">
        <h2>{{ $title }}</h2>
        <div class="price-section">
            <h3>U.S. price {{ $price }}</h3>
            <p>Available</p>
            <p>
                check availability
            </p>
        </div>
        <p>{!! $description !!}</p>
    </div>

    <div class="comic-details">
      <div class="col">
        <h3>talent</h3>
        <div class="col-section">
          <h4>Art By:</h4>
          <div class="col-section-content">
            {{ collect($artists)->implode(', ') }}
          </div>
        </div>

        <div class="col-section">
          <h4>Written By:</h4>
          <div class="col-section-content">
            {{  collect($writers)->implode(', ') }}
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
@endsection
