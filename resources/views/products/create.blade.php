@extends('layouts.master')

@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-3">
  </div>
    <div class="col-md-6">
     <form action="{{ route('products.store') }} " method="post" enctype="multipart/form-data">
         <div class="form-group">
         {{ csrf_field() }}
         <label for="">Titre</label>
         <input type="text" name="titre" class="form-control">
         </div>
         <div class="form-group">
         <label for="">prix</label>
         <input type="text" name="prix" class="form-control">
         </div>

         <div class="form-group">
         <label for="">description</label>
         <textarea type="text" name="description" class="form-control"></textarea>
         </div>

        <div class="form-group">
          <label for="">Image</label>
          <input class="form-control" type="file" name="photo">
        </div>

        <div class="form-group">
          <label for="">Category</label>
          <select id="form-control" class="form-control" name="category">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @endforeach
          </select>
    </div>

         <div class="form-group">
         <input type="submit" class="form-control btn btn-primary" value="enregistrer">
         </div>
     </form>
    </div>
  </div>
</div>
@endsection