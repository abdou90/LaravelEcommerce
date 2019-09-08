@extends('admin.layouts.app')

@section('title')
Message
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')


          <h2>MESSAGE </h2>


          <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">{{ $message }}</h1>
                <p class="lead">Why you see this ? Because the developer of the application define rules for the application to not carsh.</p>
            </div>
            </div>



@endsection


@section('scripts')
<script>

</script>
@endsection