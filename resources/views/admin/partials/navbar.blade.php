<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">

        <li class="nav-item text-nowrap">
            <form method="post" action="{{ route('logout') }}">

                @csrf
                <button class="btn btn-warning nav-link" type="submit">Sign out</button>
            </form>
          
        </li>
      </ul>
    </nav>