@extends('normal.layouts.app')

@section('title')
Index
@endsection

@section('content')

    <!-- Three columns of text below the carousel -->
    <div class="row">




    @forelse( $products as $product )

{{--
    $table->string('titre');
            $table->integer('prix');
            $table->string('description');
    --}}

    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>{{ $product->titre }} - {{ $product->prix }} $</h2>
        <p>{{ $product->description }}</p>
        <p><a class="btn btn-secondary" href="{{ route('products.show', $product->id )}}" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->



    @empty

    <div class="alert alert-alert" role="alert">
    There is no products
    </div>

    @endforelse









    </div><!-- /.row -->



    {{ $products->links() }}





@endsection

@section('scripts')
<script>
</script>
@endsection