@extends('normal.layouts.app')

@section('title')
Cart
@endsection

@section('content')


<h2>Your Cart</h2>




<div class="card mb-3">

<div class="card-body">
                    <div class="card-title"></div>
                    <table class="table table-dark mx-auto">
                        <thead class="thead-default">
                            <tr>
                                <th>Product</th>
                                <th >Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>*</th>
                                <th>Subtotal</th>
                                <th>Cancel</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach( $shoping_cart['products'] as  $product_id => $quantity )

                        

                        @php 


                        $selected_product = KarimCheckout::getProductFromId( $product_id );


                        @endphp



                            <tr>
                                <td><img src="{{ asset(KarimIMG::noImg( $selected_product->photo)  ) }}" width="90" height="90" class="img-fluid rounded"/></td>
                                <td>{{ $selected_product->titre }}</td>
                                <td>{{ $selected_product->prix }}</td>
                                <td>{{ $quantity['quantity'] }}</td>
                                <td>*</td>
                                <td>{{ $selected_product->prix * $quantity['quantity'] }}</td>
                                <td>
                                <form class="form-inline" action="{{ route('shopingcart.cancelitem',$selected_product->id) }}"   method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-inline remove-from-cart">Cancel</button>
                                    </form>
                                </td>
                                



                            </tr>

                            <tr class="list-qty">
                                <td>
                                
                                </td>

                                <td>
                                <form class="form-inline"  action="{{ route('shopingcart.minus',$selected_product->id) }}" method="post">
                                    @csrf
                                            <input disabled class="form-control minus-product w-100 p-3" type="number" name="howmany" placeholder="1" value="1" />
                                            <button disabled id="moins" class="btn btn-light btn-block minus-product w-100 p-3" type="submit">- Substract item</button>
                                        </form>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>

                                <form  action="{{ route('shopingcart.plus',$selected_product->id) }}" method="post">
                                    @csrf
                                            <input class="form-control w-100 p-3" type="number" name="howmany" placeholder="1" value="1" />
                                            <button id="plus" class="btn btn-light btn-block plus-product w-100 p-3" type="submit">+ Add item</button>
                                        </form>
                                </td>


                                <td>




                                </td>
                            </tr>


                            @if (!$loop->last)

                            <tr>
                            <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @endif






                            @endforeach




                        </tbody>
                    </table>
                </div>
</div>


@if( count($shoping_cart['products']) )
<div class="row">
<a href="{{ route('store.index') }}" class="btn btn-primary">Continue Shopping</a>
<form class="float-right" action="{{ url('valider') }}" method="get">
<button type="submit" class="btn btn-success float-right">Validate all</button>
</form>


</div>
@else

<div class="row">
<div class="alert alert-warning w-100" role="alert">
                            No Product are selected
                            </div>
                            </div>
@endif

</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
    $('.list-qty').each(function(e, selector) {

        var parent = $(selector);

        if (   parent.find('.number-product').val() != 1  ) {
            parent.find('.minus-product').attr('disabled', false);
        }
        
    });


});
</script>
@endsection