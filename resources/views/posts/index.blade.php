@extends('layout')

@section('content')

<div class="row my-3">
  <div class="col-md-6">
  <a href="{{ route('posts.create')}}" class="btn btn-info">Add New Post</a>
  </div>
</div>

<div class="card border-primary my-3">
    <div class="card-header">List Posts</div>
    <div class="card-body">
      
      <ul class="nav nav-tabs nav-stacked">
        <li class="nav-item">
        <a href="{{ route('posts.index') }}" class="nav-link @if($tab === 'list') active @endif">Posts Active</a>
        </li>
        <li class="nav-item">
          <a href="{{url('/posts/archive')}}" class="nav-link @if($tab === 'archive') active @endif">Archives</a>
        </li>
      </ul>

        <table class="table table-hover table-bordered my-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col"></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
                <td>
                  @if( !$post->deleted_at )
                    <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                  </form>
                  @else 
                    <form method="POST" action="{{ url('/posts/'.$post->id.'/restore') }}">
                      @csrf
                      @method('PATCH')
                      <button type="submit" class="btn btn-sm btn-success">Restore</button>
                  </form>
                @endif
                </td> 
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection