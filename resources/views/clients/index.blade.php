@extends('admin.layouts.app')

@section('title')
Clients
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>All Clients</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Complet Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Command Total</th>

                  <th>show</th>


                </tr>
              </thead>
              <tbody>
              @forelse($clients as $i => $client)
                <tr>
                
                  <td>{{ $i+1 }}</td>
                  <td>{{ $client->complet_name }} $</td>
                  <td>{{ $client->email }} $</td>
                  <td>{{ $client->phone }} $</td>
                  <td><a href="{{ route('dashboard.commands.show', $client->command->id ) }}">{{ $client->command->total }}</a></td>
                  <td><a href="{{ route('dashboard.clients.show', $client->id) }}"><i data-feather="eye"></i></a></td>

                
                </tr>
                @empty

                <div class="alert alert-warning" role="alert">
                There is no category for Now !
                </div>
            @endforelse


              </tbody>
            </table>
          </div>



            <div class="row">
                {{ $clients->links() }}
            </div>




@endsection


@section('scripts')
<script>
    
</script>
@endsection