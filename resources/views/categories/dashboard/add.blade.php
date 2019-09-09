@extends('admin.layouts.app')

@section('title')
Adding Category
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>Adding new category </h2>


          <form method="post" action="{{ route('dashboard.categories.store') }}">
              @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="" class="form-control" id="name" placeholder="Name">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>




@endsection


@section('scripts')
<script>

</script>
@endsection