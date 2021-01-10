@extends('layout');
@section('content')

<div class="row my-3">
    <div class="col-md-6">
    <a href="{{ route('client.create')}}" class="btn btn-info">
    Add New Client
    </a>
    </div>
  </div>

    <div class="card border-primary my-3">
      <div class="card-body">
        <h4 class="card-title">Clients</h4>
        
        <table class="table table-hover table-bordered my-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                        <td>
                            <form method="POST" action="{{ route('client.destroy', ['client' => $client->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-o"></i> 
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

      </div>
    </div>


@endsection