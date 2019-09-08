@extends('admin.layouts.app')

@section('title')
Adding Product
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>Adding Product</h2>



          <form method="post" action="{{ route('dashboard.products.store') }}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
                <label for="name">Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

            </div>

          <div class="form-group">
    <label for="name">Change Image</label>
        <input type="file" name="photo" class="form-control" id="photo" >
    </div>


          <div class="form-group">
    <label for="name">Title</label>
    <input type="text" name="titre" value="" class="form-control" id="titre" placeholder="Title">
  </div>

  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" name="prix" value="" class="form-control" id="prix" placeholder="Price">
  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection


@section('scripts')
<script>

</script>
@endsection