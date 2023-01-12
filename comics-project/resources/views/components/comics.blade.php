<div class="black">
    <div class="cards">
        @foreach ($fumetti as $elem)
            <div class="fumetto">
                <img src="{{$elem['thumb']}}" alt="fumetto">
                <h5>{{$elem['title']}}</h5>
            </div>
        @endforeach
    </div>
  </div>