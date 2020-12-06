@extends('layout')
@section('content')

<div class="row my-3">
    <div class="col-md-6">
    <a href="{{ route('posts.index')}}" class="btn btn-info">Return Back</a>
    </div>
  </div>

<div class="card border-info my-3">
    <div class="card-header">Create New Post</div>
    <div class="card-body">
        
    <form method="POST" action="{{ route('posts.store')}}">
            @csrf
            @include('posts.form')

    <div class="form-group">
        <div class="col-sm-4 mx-auto">
            <button type="submit" class="btn btn-info">Save</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
    </div>

    </form>
        

    </div>
</div>


@endsection