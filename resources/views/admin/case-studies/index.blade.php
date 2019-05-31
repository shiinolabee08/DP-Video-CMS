@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <div class="btn-group mb-3">
                    <a class="btn btn-primary" href="{{ route('case-studies.create') }}"><i class="fa fa-plus"></i> New Case Study</a>
                    <a href="#" class="btn btn-primary"><i class="fa fa-filter"></i> Filters</a>
                </div>            
            </div>
            <div class="col-md-6 col-sm-7">
                <form action="/admin/case-study/find" method="get">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Search</span>
                        </div>
                        <input type="text" name="search" class="form-control" placeholder="Find record(s) via title">
                    </div>
                </form>
            </div>
        </div>
        <hr>
        @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if ( count($data) )
            <h3>List of Case Studies <span class="badge badge-secondary">{{ count($data) }}</span></h3>

            {{ $data->links() }}
            <table class="table table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Feature Image</th>
                        <th scope="col">Youtube Video Url</th>
                        <th scope="col">Category</th>
                        <th scope="col">Is Published?</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $casestudy)
                <tr>
                    <td scope="row">{{$casestudy->title}}</td>
                    <td style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;max-width:150px;">{{$casestudy->feature_image}}</td>
                    <td>{{$casestudy->youtube_video_url}}</td>
                    <td>{{$casestudy->categoriesToString()}}</td>
                    <th scope="row">{{$casestudy->published ? 'Yes' : 'No'}}</th>
                    <td>{{$casestudy->created_at->toFormattedDateString()}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('/admin/case-studies/' . $casestudy->id . '/edit') }}" class="btn btn-primary">
                              	<i class="fa fa-edit"></i> Edit
                            </a>&nbsp;
                            <form action="{{url('/admin/case-studies', [$casestudy->id])}}" method="POST">
            					<input type="hidden" name="_method" value="DELETE">
           						<input type="hidden" name="_token" value="{{ csrf_token() }}">
           						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
           				     </form>
                        </div>
        			</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $data->links() }}
        @else 
            <div class="alert alert-info">No records yet.</div>
        @endif
    </div>
@endsection