@extends('layouts.master')

@section('content')


<div class="container">
  <div class="row">
  <div class="col-md-3">
  </div>
    <div class="col-md-6">
     <form action="{{url('/add-to-cart')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
         <div class="form-group">
         <h3>{{ $product->titre }}</h3>
         </div>
         
        <div class="form-group">
            <label for=""> 
            <img style="width:260px " src = "{{ asset('images/'.$product->photo) }}" alt = "...">
            </label>
        </div>
        <div class="form-group">
         <label for="">prix :</label>
         <label for="">{{ $product->prix }}</label>
         </div>
        
         <div class="form-group">
         <label for="">description</label>
         <label for="">{{ $product->description }}</label>
         </div>
        <div class="form-group">
            <label for="">Quantité</label>
            <input name="qte" type="number" value="1" />
         </div>
         <input id="prodId" name="prodId" type="hidden" value="{{ $product->id }}">
         <div class="form-group">
         <input type="submit" class="form-control btn btn-primary" value="J'achete">
         </div>
     </form>
    </div>
    <div class="col-md-3">
  </div>
  </div>
</div>    

@endsection