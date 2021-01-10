@extends('layout');
@section('content')

    <div class="card border-primary my-3">
      <div class="card-body">
        <h4 class="card-title">Clients</h4>
        
        <table class="table table-hover table-bordered my-3">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->fullName }}</td>
                        <td>{{ $client->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

      </div>
    </div>


@endsection