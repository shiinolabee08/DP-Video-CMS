@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <div class="btn-group mb-3">
                    <a class="btn btn-primary" href="{{ route('case-study-categories.create') }}"><i class="fa fa-plus"></i> New Category</a>
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
            <h3>List of Categories <span class="badge badge-secondary">{{ count($data) }}</span></h3>

            {{ $data->links() }}
            <table class="table table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Category Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $casestudycategory)
                <tr>
                    <td scope="row">{{$casestudycategory->title}}</td>
                    <td>{{$casestudycategory->description}}</td>
                    <td>{{$casestudycategory->created_at->toFormattedDateString()}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('/admin/case-study-categories/' . $casestudycategory->id . '/edit') }}" class="btn btn-primary">
                              	<i class="fa fa-edit"></i> Edit
                            </a>&nbsp;
                            <form action="{{url('/admin/case-study-categories', [$casestudycategory->id])}}" method="POST">
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