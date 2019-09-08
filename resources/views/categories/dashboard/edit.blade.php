@extends('admin.layouts.app')

@section('title')
Editing Category
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>Editing category : {{ $category->name }}</h2>


          <form method="post" action="{{ route('dashboard.categories.udpate', $category->id) }}">
          @csrf
  
          <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name" placeholder="Name">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection


@section('scripts')
<script>

</script>
@endsection