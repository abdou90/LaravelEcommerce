@extends('layouts.master')

@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-3">
  </div>
    <div class="col-md-6">
     <form action=" {{ url('admin/product/'.$prod->id) }} " method="post" enctype="multipart/form-data">
     <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
         <div class="form-group">
         <label for="">Titre</label>
         <input type="text" name="titre" value="{{ $prod->titre }}" class="form-control">
         </div>
         <div class="form-group">
         <label for="">prix</label>
         <input type="text" name="prix" class="form-control" value="{{ $prod->prix }}">
         </div>

         <div class="form-group">
         <label for="">description</label>
         <textarea type="text" name="description" class="form-control">{{ $prod->description }}</textarea>
         </div>

         <div class="form-group">
         <input type="submit" class="form-control btn btn-danger" value="Modifier">
         </div>
     </form>
    </div>
    <div class="col-md-3">
  </div>
  </div>
</div>
@endsection