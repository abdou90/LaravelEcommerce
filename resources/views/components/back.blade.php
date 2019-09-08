
@if( !isset($title) )

    @php

        $title = "Back";

    @endphp

@endif

@if( !isset($link) )

    @php

        $link = URL::previous();

    @endphp

@endif



<div class="card">
  <div class="card-body">
    <h5 class="card-title">Back to {{ $title }}</h5>
    {{ $slot }}
    <a href="{{ $link }}" class="btn btn-primary"><- </a>
  </div>
</div>