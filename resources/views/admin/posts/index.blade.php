@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('posts.create') }}">New Post</a><hr>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if ( count($data) )
          <h3>List of Posts</h3>
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Website Url</th>
                <th scope="col">Is Published?</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $post)
              <tr>
                <th scope="row">{{$post->id}}</th>
                <th scope="row">{{$post->name}}</th>
                <td><a href="{{ URL::to($post->slug) }}">{{$post->slug}}</a></td>
                <th scope="row">{{$post->published ? 'Yes' : 'No'}}</th>
                <td>{{$post->created_at->toFormattedDateString()}}</td>
                <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('posts/' . $post->id . '/edit') }}">
                            	<button type="button" class="btn btn-warning">Edit</button>
                            </a>&nbsp;
                            <form action="{{url('posts', [$post->id])}}" method="POST">
              					<input type="hidden" name="_method" value="DELETE">
             						<input type="hidden" name="_token" value="{{ csrf_token() }}">
             						<input type="submit" class="btn btn-danger" value="Delete"/>
             				  </form>
                        </div>
          			</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
        @else 
          <div class="well">No records yet.</div>
        @endif
    </div>
@endsection