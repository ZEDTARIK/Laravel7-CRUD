@extends('layout')
@section('content')

<div class="row my-3">
    <div class="col-md-6">
    <a href="{{ route('customer.index')}}" class="btn btn-info">Return Back</a>
    </div>
  </div>

<div class="card border-info my-3">
<div class="card-header">Customer N° {{ $customer->id }}</div>
    <div class="card-body">
        
    <form method="POST" action="{{ route('customer.update',['customer' => $customer->id] ) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="fullName" class="col-md-2 col-form-label text-md-right">Full Name</label>
                <div class="col-md-6">
                    <input id="fullName"  class="form-control" name="fullName" value="{{ $customer->fullName}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">Email Customer</label>
                <div class="col-md-6">
                    <input id="email"  class="form-control" name="email" value="{{ $customer->email}}">
                </div>
            </div>

    <div class="form-group">
        <div class="col-sm-4 mx-auto">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </div>

    </form>
        

    </div>
</div>


@endsection