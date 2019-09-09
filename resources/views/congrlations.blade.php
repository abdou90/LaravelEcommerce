@extends('normal.layouts.app')

@section('title')
Index
@endsection

@section('content')

    <!-- Three columns of text below the carousel -->
    <div class="row">

    <h2>Congratulations your command will arrive soon we will phone you</h2>

    <div class="text-center">

        <img src="{{asset('images/Application/congrlations.webp')}}" class="img-fluid">
    </div>

    </div><!-- /.row -->
<hr>

<div class="row">
<a href="{{ route('store.index') }}" class="btn btn-primary">Back Shopping</a>
</div>





@endsection

@section('scripts')
<script>
</script>
@endsection