@extends('normal.layouts.app')

@section('title')
Checkout
@endsection

@section('content')


<h2>Your Cart</h2>




<div class="card mb-3">

<div class="card-body">
                    <div class="card-title">Fill information to pay the total of {{ $shoping_cart['total'] }} $</div>

                    <ul>
                        
                    @foreach( $shoping_cart['products'] as  $product_id => $quantity )

                        

                    @php 


                    $selected_product = KarimCheckout::getProductFromId( $product_id );


                    @endphp

                    <li>Product  : {{ $selected_product->titre }} [ {{ $quantity['quantity'] }} * {{$selected_product->prix }} ] =  {{ (float)$quantity['quantity'] * $selected_product->prix }} $</li>

                    @endforeach
                    </ul>

                </div>

                <div class="card-body">
                <h2>Identity and Card details</h2>


                {{-- 
                    
                    $table->string('complet_name');

$table->string('email')->unique();
$table->string('phone');
$table->text('adress');

$table->string('card_type');
$table->string('card_number');
$table->string('card_name');
$table->string('card_adress');
$table->string('card_country');
$table->string('cvv');
$table->string('exp_month');
$table->string('exp_year');
                    
                    --}}

                <form method="post" action="{{ route('shopingcart.validate') }}">
                    @csrf
                <div class="form-group">
                    <label for="complet_name">complet name</label>
                    <input type="text" name="complet_name" value="" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" value="" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="tel" id="phone" name="phone" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="phone">phone</label>
                    <textarea id="adress" name="adress" value="" class="form-control" ></textarea>
                </div>

                <hr />

                <div class="form-group">
                    <label for="card_name">Card Name</label>
                    <input type="text" id="card_name" name="card_name" placeholder="Name" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="card_type">Card type</label>
                    <input type="text" id="card_type" name="card_type" placeholder="Master Card" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="card_number">Card Number</label>
                    <input type="text" id="card_number" name="card_number" placeholder="12number" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="card_adress">Card Adress</label>
                    <input type="text" id="card_adress" name="card_adress" placeholder="adress" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="card_country">Card Country</label>
                    <input type="text" id="card_country" name="card_country" placeholder="adress" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="exp_month">Card expire month</label>
                    <input type="exp_month" id="exp_month" name="exp_month" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="exp_year">Card expire Year</label>
                    <input type="year" id="exp_year" name="exp_year" value="" class="form-control" >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
</div>




</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
    $('.list-qty').each(function(e, selector) {

        var parent = $(selector);

        if (   parent.find('.number-product')[1].val() != 1  ) {
            parent.find('.minus-product').attr('disabled', false);
        }
        
    });


});
</script>
@endsection