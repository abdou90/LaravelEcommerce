@extends('admin.layouts.app')

@section('title')
{{ $product->titre }}
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')

        



          <h2>Product : {{ $product->titre }}</h2>



          <div class="card mb-3">
        <img src="{{ asset( \KarimIMG::noImg( $product->photo ) ) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->prix }} $</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><a href="{{ route('dashboard.categories.show', $product->category->id )}}" ><small class="text-muted">Category : {{ $product->category->name }}</small></a></p>
        </div>
        </div>










@endsection


@section('scripts')
<script>

</script>
@endsection