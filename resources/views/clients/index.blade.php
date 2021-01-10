@extends('layout');
@section('content')

    <div class="card border-primary my-3">
      <div class="card-body">
        <h4 class="card-title">Clients</h4>
        
        <table class="table table-hover table-bordered my-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id}}</td>
                        <td>{{ $client->fullName }}</td>
                        <td>{{ $client->email}}</td>
                        <td>
                            <a href="{{'/client/'.$client->id.'/edit'}} " class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

      </div>
    </div>


@endsection