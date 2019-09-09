@extends('admin.layouts.app')

@section('title')
{{ $client->complet_name }}
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')

        



          <h2>Client : {{ $client->complet_name }}</h2>



          <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $client->phone }}</h5>
            <p class="card-text">{{ $client->email }}</p>
            <p class="card-text"><a href="{{ route('dashboard.commands.show', $client->command->id )}}" ><small class="text-muted">Command Total : {{ $client->command->total }} $</small></a></p>
        </div>
        </div>



@endsection