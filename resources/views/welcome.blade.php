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
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset( KarimIMG::noImg( $product->photo )  ) }}" />
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

    <div class="row">
    {{ $products->links() }}
    </div>

    





@endsection

@section('scripts')
<script>
</script>
@endsection