@extends('layouts.app')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"></div>
                    <table class="table table-dark mx-auto">
                        <thead class="thead-default">
                            <tr>
                                <th style="width:50%">Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $total = 0  ?>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                 <?php $total += $details['price'] * $details['quantity'] ?>
                            <tr>
                                <td><img src="{{ asset('images/'.$details['photo']) }}" width="90" height="90" class="img-fluid rounded"/></td>
                                <td>${{ $details['price'] }}</td>
                                <td>
                                    <ul class="list-qty">
                                        <li>
                                        <form  action="{{url('/cart/decrementer/'.$details['id'])}}"   method="get">
                                            <button disabled id="moins" class="btn btn-light bt-sm float-left minus-product" type="submit">-</button>
                                        </form>
                                        </li>
                                        <li><input disabled class="form-control text-center number-product" type="text" id="qty"  value="{{ $details['quantity'] }}"></li>
                                        <li>
                                        <form  action="{{ url('/cart/incrementer/'.$details['id']) }}"   method="get">
                                            <button id="plus" class="btn btn-light bt-sm float-rigth plus-product" type="submit">+</button>
                                        </form>
                                        </li>
                                    </ul>    
                                </td>
                                <td></td>
                                <td><span class="bg-light text-dark rounded p-2 font-weight-bold">
                                ${{ $details['price'] * $details['quantity'] }}
                                </span>
                                </td>
                                <td>
                                
                                <form  action="{{ url('/delete-from-cart/'.$details['id']) }}"   method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger remove-from-cart">delete</button>
                                </form>
                                
                                </td>
                            </tr>
                                @endforeach
                                @endif
                            <tr>
                                <td><a href="{{ url('/product') }}" class="btn btn-warning"> Continue Shopping</a></td>
                                <td colspan="3" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total {{ $total }}$</strong></td>
                                <td>
                                <form action="{{ url('valider') }}" method="get">
                                <button type="submit" class="btn btn-success">Valider</button>
                                </form>
                                </td>
                            </tr>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection