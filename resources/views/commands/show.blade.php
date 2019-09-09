@extends('admin.layouts.app')

@section('title')
Command {{ $command->id }}
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>Command : {{ $command->id }}</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>

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

                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Desc</th>

                  <th>view</th>
                  <th>update</th>
                  <th>delete</th>

                </tr>
              </thead>
              <tbody>

              @forelse($command->products as $i => $product)
                <tr>
                
                  <td>{{ $i+1 }}</td>
                  <td>{{ $product->titre }}</td>
                  <td>{{ $product->prix }}</td>

                  
                  <td>{{ str_limit( $product->description , 50 ) }} ...</td>

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
                There is no Products for Now ! <a href="#">Add a product Now !!!</a>
                </div>
            @endforelse


              </tbody>
            </table>
          </div>



          @component('components.back', ['title' => 'Categories'])

          @endcomponent








@endsection


@section('scripts')
<script>
    feather.replace();
</script>
@endsection