<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

        @foreach($categories as $category)
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('categories.show', $category->id)}}">{{ $category->name}} <span class="sr-only">(current)</span></a>
        </li>
        @endforeach
       
      </ul>

      <form class="form-inline mt-2 mt-md-0" action="{{ route('products.search') }}" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group" style="text-align:center">
            <input class="form-control mr-sm-2" type="text" name="q"
                    placeholder="Search users" aria-label="Search">
                <!--<input type="text" class="form-control" > <span class="input-group-btn">-->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <!--<button type="submit" class="btn btn-default">
                        search
                    </button>-->
                </span>
            </div>
        </form>





    </div>
  </nav>