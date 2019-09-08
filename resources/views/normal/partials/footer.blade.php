  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020 Store, Inc. &middot; <a href="{{ route('login')}}">Login as Admin</a> &middot;
    @if(Auth::check() )
    @if(Auth::user()->is_admin)
        <a href="{{ route('home')}}">Dashboard</a> 
    @endif
    @endif
    </p>
  </footer>