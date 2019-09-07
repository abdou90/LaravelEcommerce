
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    @foreach( $categories as $category)
                    <li class="list-group-item active"><a class="nav-link" href="#">{{ $category->name }}</a></li>
                    @endforeach

                    </ul>





          <form class="form-inline mt-2 mt-md-0" action="/search" method="POST" role="search">
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
            </div>
        </nav>