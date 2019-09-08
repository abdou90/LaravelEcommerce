@extends('admin.layouts.app')

@section('title')
Products
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')


          <h2>All Products  <a class="btn btn-md btn-primary float-right" href="{{ route('dashboard.products.add') }}"><i data-feather="plus"></i></a></h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>

                {{--
                    
                    $table->bigIncrements('id');
            $table->string('titre');
            $table->integer('prix');
            $table->string('description');
            $table->string('photo');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();   
                    
                    --}}
                  <th>#</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>view</th>
                  <th>update</th>
                  <th>delete</th>

                  {{--
                    MANAGE THE SOFT DELETE
                    --}}

                </tr>
              </thead>
              <tbody>
              @forelse($products as $i => $product)
                <tr>
                
                  <td>{{ $i+1 }}</td>
                  <td>{{ $product->titre }}</td>
                  <td>{{ $product->prix }} $</td>
                  <td><a href="{{ route('dashboard.categories.show', $product->category->id) }}">{{ $product->category->name }}</a></td>
                  <td><a href="{{ route('dashboard.products.show', $product->id) }}"><i data-feather="eye"></i></a></td>
                  <td><a href="{{ route('dashboard.products.edit', $product->id) }}"><i data-feather="edit-3"></i></a></td>
                  <td>
                      <form method="POST" action="{{ route('dashboard.products.delete', $product->id) }}">
                          @csrf
                        <button type="submit" class="btn btn-sm btn-danger"><i data-feather="trash-2"></i></button>
                      </form>
                    </td>


                
                </tr>
                @empty

                <div class="alert alert-warning" role="alert">
                There is no Product for Now !
                </div>
            @endforelse


              </tbody>
            </table>
          </div>



          <div class="row">
                {{ $products->links() }}
            </div>




@endsection


@section('scripts')
<script>
    
</script>
@endsection