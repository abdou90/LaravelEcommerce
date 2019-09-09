@extends('admin.layouts.app')

@section('title')
Commands
@endsection

@section('styles')
<style>
</style>
@endsection

@section('content')





          <h2>All Commands</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Total</th>
                  <th>Client</th>
                  <th>show</th>


                </tr>
              </thead>
              <tbody>
              @forelse($commands as $i => $command)
                <tr>
                
                  <td>{{ $i+1 }}</td>
                  <td>{{ $command->total }} $</td>
                  <td><a href="{{ route('dashboard.clients.show', $command->client->id) }}">{{ $command->client->email }}</a></td>
                  <td><a href="{{ route('dashboard.commands.show', $command->id) }}"><i data-feather="eye"></i></a></td>



                
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
                {{ $commands->links() }}
            </div>




@endsection


@section('scripts')
<script>
    
</script>
@endsection