@extends('admin.layouts.app')

@section('title')
Editing Product
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>Editing category : {{ $product->titre }}</h2>



          <form method="post" action="{{ route('dashboard.products.udpate', $product->id) }}" enctype="multipart/form-data">
          @csrf


          <img src="{{ asset( \KarimIMG::noImg( $product->photo ) ) }}" class="img-fluid" alt="Product Image">

          <div class="form-group">
    <label for="name">Change Image</label>
        <input type="file" name="photo" class="form-control" id="photo" >
    </div>

    <div class="form-group">
        <label for="name">Category</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ ($category->id == $product->category_id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

    </div>


          <div class="form-group">
    <label for="name">Title</label>
    <input type="text" name="titre" value="{{ $product->titre }}" class="form-control" id="titre" placeholder="Title">
  </div>

  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" name="prix" value="{{ $product->prix }}" class="form-control" id="prix" placeholder="Price">
  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection


@section('scripts')
<script>

</script>
@endsection