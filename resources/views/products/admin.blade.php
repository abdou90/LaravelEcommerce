<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

 
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="container">
<div class="row">   
<div class="col-md-4"></div>
<div class="col-md-4">
<table class="table table-dark mt-10">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><button> <a href="{{ route('admin.showadmin') }}">See All Products</a></button></td>
      <td><button><a href="{{ url('/admin/product/create') }}">Add Product</a></button></td>
    </tr>
    <tr>
      <td><button><a href="">See All categories</a></button></td>
      <td><button><a href="">Add Category</a></button></td>
    </tr>
    </tbody>
</table>
</div>
</div>
</div>
</body>

</html>