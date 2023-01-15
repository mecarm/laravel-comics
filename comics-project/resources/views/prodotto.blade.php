@extends('layouts.app')

@section('page-title', "DC Comics - Fumetto")

@section('main-content')

    {{-- barra blu sotto jumbotron con immagine fumetto all'interno --}}
    <div class="blu-bar">
      <img src="{{ $prodotto_singolo['thumb']}}" alt="Comic Image" class="cards-img-top">
    </div>
    {{-- card con titolo e descrizione --}}
    <div class="card-comic">
        <div class="cards-body">
          <h5 class="cards-title">{{ $prodotto_singolo['title'] }}</h5>
          {{-- barra verde con prezzo --}}
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
      {{-- Sezione grigia con informazioni fumetto generate dinamicamente  --}}
      <section class="grey-section">
        <div class="center-section">
        <div class="left-container">
          <h2>Talent</h2>
          <div class="inside-cont">
            <h5>Art by:</h5>
            <p>
              @foreach ($prodotto_singolo['artists'] as $elem)
             {{ $elem }},
              @endforeach
            </p>
          </div>
          <div class="inside-cont">
            <h5>Written by:</h5>
            <p>
              @foreach ($prodotto_singolo['writers'] as $elem)
             {{ $elem }},
              @endforeach
            </p>
          </div>
        </div>
        <div class="right-container">
          <h2>Specs</h2>
          <div class="inside-cont">
            <h5>Series: </h5>
            <p>{{$prodotto_singolo['series']}}</p>
          </div>
          <div class="inside-cont">
            <h5>U.S. Price: </h5>
            <p>{{$prodotto_singolo['price']}}</p>
          </div>
          <div class="inside-cont">
            <h5>On Sale Date: </h5>
            <p>{{$prodotto_singolo['sale_date']}}</p>
          </div>
        </div>
      </div>
      </section>

@endsection
