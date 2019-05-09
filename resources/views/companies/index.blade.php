@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('companies.create') }}">New Company</a><hr>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if ( count($data) )
          <h3>List of Companies</h3>
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Logo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website Url</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $company)
              <tr>
                <th scope="row">{{$company->id}}</th>
                <th scope="row"><img src="{{ URL::to('/storage/' . $company->logo) }}"/></th>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->website_url}}</td>
                <td>{{$company->created_at->toFormattedDateString()}}</td>
                <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('companies/' . $company->id . '/edit') }}">
                            	<button type="button" class="btn btn-warning">Edit</button>
                            </a>&nbsp;
                            <form action="{{url('companies', [$company->id])}}" method="POST">
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