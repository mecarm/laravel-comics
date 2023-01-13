<div class="black">
    <div class="cards">
        @foreach ($fumetti as $id => $elem)
            <div class="fumetto">
                <img src="{{$elem['thumb']}}" alt="fumetto">
                <h5><a href="{{ route('prodotto.fumetto', compact('id') ) }}">{{$elem['title']}}</a></h5>
            </div>
        @endforeach
    </div>
  </div>