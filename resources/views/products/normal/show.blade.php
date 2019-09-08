@extends('normal.layouts.app')

@section('title')
{{ $product->titre }}
@endsection

@section('content')


<h2>Product : {{ $product->titre }}</h2>
<p><a class="btn btn-success btn-lg" href="#">Purchase</a></p>



<div class="card mb-3">
<img src="{{ asset( \KarimIMG::noImg( $product->photo ) ) }}" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{{ $product->prix }} $</h5>
  <p class="card-text">{{ $product->description }}</p>
  <p class="card-text"><a href="{{ route('categories.show', $product->category->id )}}" ><small class="text-muted">Categry : {{ $product->category->name }}</small></a></p>
</div>
</div>


@endsection

@section('scripts')
<script>
</script>
@endsection