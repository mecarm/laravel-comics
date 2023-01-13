@extends('layouts.app')

@section('page-title', "DC Comics - Fumetto")

@section('main-content')

    <div class="card-comic">
        <img src="{{ $prodotto_singolo['thumb']}}" alt="Comic Image" class="cards-img-top">
        <div class="cards-body">
          <h5 class="cards-title">{{ $prodotto_singolo['title'] }}</h5>
          <p class="cards-text">{{ $prodotto_singolo['description'] }}</p>
        </div>
      </div>

@endsection
