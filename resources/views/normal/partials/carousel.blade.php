
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      @foreach($carousels as $i => $product)
        <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="{{ asset('images/Application/background.jpg')}}" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Welcome to the Store.</h1>
            <p>Here you can find some products you can purchase.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">No button for today :D</a></p>
          </div>
        </div>
      </div>


      @foreach($carousels as $i => $product)


        <div class="carousel-item">
        <img class="bd-placeholder-img" src="{{ asset('images/Application/background.jpg')}}" width="100%" height="100%"/>
            <div class="container">
            <div class="carousel-caption">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset( KarimIMG::noImg( $product->photo )  ) }}" />

                <h1>{{ $product->titre }}</h1>
                <p>{{ $product->description }}</p>
                <p><a class="btn btn-lg btn-primary" href="{{ route('products.show', $product->id) }}" role="button">Take a look</a></p>
            </div>
            </div>
        </div>


      @endforeach


    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>