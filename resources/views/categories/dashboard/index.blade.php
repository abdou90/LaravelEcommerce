@extends('admin.layouts.app')

@section('title')
Index
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>All Categories  <a class="btn btn-md btn-primary float-right" href="{{ route('dashboard.categories.add') }}"><i data-feather="plus"></i></a></h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>view</th>
                  <th>update</th>
                  <th>delete</th>

                </tr>
              </thead>
              <tbody>
              @forelse($categories as $i => $category)
                <tr>
                
                  <td>{{ $i+1 }}</td>
                  <td>{{ $category->name }}</td>
                  <td><a href="{{ route('dashboard.categories.show', $category->id) }}"><i data-feather="eye"></i></a></td>
                  <td><a href="{{ route('dashboard.categories.edit', $category->id) }}"><i data-feather="edit-3"></i></a></td>
                  <td>
                      <form method="POST" action="{{ route('dashboard.categories.delete', $category->id) }}">
                          @csrf
                        <button type="submit" class="btn btn-sm btn-danger"><i data-feather="trash-2"></i></button>
                      </form>
                    </td>


                
                </tr>
                @empty

                <div class="alert alert-warning" role="alert">
                There is no category for Now !
                </div>
            @endforelse


              </tbody>
            </table>
          </div>








@endsection


@section('scripts')
<script>
    
</script>
@endsection