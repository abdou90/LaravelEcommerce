@extends('layouts.app')

@section('title')

Index
@endsection

@section('content')


<div class="container border border-primary rounded mt-1 mb-2">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @foreach($products as $prod)
                <div class="col-md-4 mb-3">
                    <div class="card bg-light text-center">
                        <div class="card-body">
                            <h3 class="card-title bg-primary">{{ $prod->titre }}</h3>
                            <hr>
                            <div class="card-img mt-2 mb-2">
                            <img src = "{{ asset('images/'.$prod->photo) }}" class="img-fluid rounded" alt="">
                            </div>
                            <div class="card-text mt-2 mb-4"><small>{{ $prod->description }}</small></div>
                            <div class="badge badge-info p-2 mt-2">{{ $prod->prix }}</div>
                            <div class="card-text mt-3">
                                <form action="{{ url('add-to-cart/'.$prod->id) }}" method="post">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Quantité</label>
                                        <input name="qte" type="number" value="1" />
                                    </div>
                                    <div class="card-footer">
                                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
        <div class="card mt-4">
            <div class="card-body">
                <h3 class="card-title text-center">Categorie</h3>
                <hr class="w-25">
                <ul class="list-group text-center">
                    @foreach($categories as $category)
                    <li class="list-group-item "><a href="">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>
    
@endsection