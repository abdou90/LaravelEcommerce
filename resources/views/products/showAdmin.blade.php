@extends('layouts.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">photo</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $prod)
    <tr>
      <td>{{ $prod->titre }}</td>
      <td><img style="width:180px " src = "{{ asset('images/'.$prod->photo) }}" alt = "..."></td>
      <td>{{$prod->prix }}</td>
      <td><form action="{{ url('admin/product/'.$prod->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <a href="{{ url('admin/product/'.$prod->id.'/edit') }}" class="btn btn-warning" role="button">Editer</a>
                        <button type="submit" class="btn btn-danger" role="button">Supprimer</button>
                    </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection