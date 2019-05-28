@extends('layouts.admin')

@section('content')
  <div class="container">
      <a class="btn btn-primary" href="{{ route('case-studies.create') }}">New Case Study</a><hr>
      @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif

      @if ( count($data) )
        <h3>List of Case Studies</h3>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Feature Image</th>
              <th scope="col">Youtube Video Url</th>
              <th scope="col">Is Published?</th>
              <th scope="col">Created At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $casestudy)
            <tr>
              <th scope="row">{{$casestudy->id}}</th>
              <td>{{$casestudy->title}}</td>
              <td>{{$casestudy->feature_image}}</td>
              <td>{{$casestudy->youtube_video_url}}</td>
              <th scope="row">{{$casestudy->published ? 'Yes' : 'No'}}</th>
              <td>{{$casestudy->created_at->toFormattedDateString()}}</td>
              <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="{{ URL::to('case-studies/' . $casestudy->id . '/edit') }}">
                          	<button type="button" class="btn btn-primary">Edit</button>
                          </a>&nbsp;
                          <form action="{{url('case-studies', [$casestudy->id])}}" method="POST">
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