<div class="black">
    <div class="cards">
        @foreach ($fumetti as $elem)
            <div class="fumetto">
                <img src="{{$elem['thumb']}}" alt="fumetto">
                <h5><a href="/prodotto">{{$elem['title']}}</a></h5>
            </div>
        @endforeach
    </div>
  </div>