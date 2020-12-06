@extends('layout')
@section('content')

<div class="row my-3">
    <div class="col-md-6">
    <a href="{{ route('posts.index')}}" class="btn btn-info">Return Back</a>
    </div>
  </div>

<div class="card border-info my-3">
<div class="card-header">Post N° {{ $post->id }}</div>
    <div class="card-body">
        
    <form method="POST" action="{{ route('posts.update', ['post'=> $post->id])}}">
            @csrf
            @method('PUT')
            @include('posts.form')

    <div class="form-group">
        <div class="col-sm-4 mx-auto">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </div>

    </form>
        

    </div>
</div>


@endsection