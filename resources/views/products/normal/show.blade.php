@extends('normal.layouts.app')

@section('title')
{{ $product->titre }}
@endsection

@section('content')


<h2>Product : {{ $product->titre }}</h2>




<div class="card mb-3">
<img src="{{ asset( \KarimIMG::noImg( $product->photo ) ) }}" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{{ $product->prix }} $</h5>
  <p class="card-text">{{ $product->description }}</p>
  <p class="card-text"><a href="{{ route('categories.show', $product->category->id )}}" ><small class="text-muted">Categry : {{ $product->category->name }}</small></a></p>
</div>
</div>

<form action="{{ route('shopingcart.add', $product->id ) }}" method="POST">

@csrf

    <div class="form-group">
    <label for="exampleInputEmail1">Items</label>
    <input type="number" name="howmany" min="1" placeholder="1" value="1" class="form-control" id="how_many">
  </div>

  <button type="submit" class="btn btn-primary">Add to cart</button>

</form>



@endsection

@section('scripts')
<script>
</script>
@endsection