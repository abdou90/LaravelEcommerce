@extends('admin.layouts.app')

@section('title')
Index
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





@if( Auth::user()->is_admin )
          <h2>Latest 5 Admins</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>

                </tr>
              </thead>
              <tbody>
              @forelse($admins as $i => $admin)
                <tr>
                
                  <td>{{ $i }}</td>
                  <td>{{ $admin->email }}</td>

                
                </tr>
                @empty

                <div class="alert alert-warning" role="alert">
                There is no admins for Now !
                </div>
            @endforelse


              </tbody>
            </table>
          </div>

          @endif


          <h2>Latest 5 Users</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Email</th>

                </tr>
              </thead>
              <tbody>
              @forelse($users as $i => $user)
                <tr>
                
                  <td>{{ $i }}</td>
                  <td>{{ $user->email }}</td>

                
                </tr>
                @empty

                <div class="alert alert-warning" role="alert">
                There is no user for Now !
                </div>
            @endforelse


              </tbody>
            </table>
          </div>



          <h2>Latest 5 Categories</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>

                </tr>
              </thead>
              <tbody>
              @forelse($categories as $i => $category)
                <tr>
                
                  <td>{{ $i }}</td>
                  <td>{{ $category->name }}</td>

                
                </tr>
                @empty

                <div class="alert alert-warning" role="alert">
                There is no category for Now !
                </div>
            @endforelse


              </tbody>
            </table>
          </div>



          <h2>Latest 5 Products</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>

                </tr>
              </thead>
              <tbody>
              @forelse($products as $i => $product)
                <tr>
                
                  <td>{{ $i }}</td>
                  <td>{{ $product->titre }}</td>

                
                </tr>

                @empty

                <div class="alert alert-warning" role="alert">
                There is no product for Now !
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