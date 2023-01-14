@extends('layouts.app')

@section('page-title', "DC Comics - Fumetto")

@section('main-content')

    <div class="blu-bar">
      <img src="{{ $prodotto_singolo['thumb']}}" alt="Comic Image" class="cards-img-top">
    </div>

    <div class="card-comic">
        <div class="cards-body">
          <h5 class="cards-title">{{ $prodotto_singolo['title'] }}</h5>
          <div class="green-bar">
            <div class="price">
              <span>U.S. Price: {{ $prodotto_singolo['price'] }}</span>
              <span>Availabile</span>
            </div>
            <div class="availability">
                <div class="line"></div>
                <div class="check">Check Availability</div>
            </div>
          </div>        
          <p class="cards-text">{{ $prodotto_singolo['description'] }}</p>
        </div>
      </div>

@endsection
