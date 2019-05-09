@extends('layouts.app')

@section('content')
  <div class="container">
      <a class="btn btn-primary" href="{{ route('employees.create') }}">New Employee</a><hr>
      @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif

      @if ( count($data) )
        <h3>List of Employees</h3>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Company</th>
              <th scope="col">Created At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $employee)
            <tr>
              <th scope="row">{{$employee->id}}</th>
              <td>{{$employee->first_name}} {{$employee->last_name}}</td>
              <td>{{$employee->email}}</td>
              <td>{{$employee->phone}}</td>
              <td>{{$employee->companyDetails->name}}</td>
              <td>{{$employee->created_at->toFormattedDateString()}}</td>
              <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="{{ URL::to('employees/' . $employee->id . '/edit') }}">
                          	<button type="button" class="btn btn-primary">Edit</button>
                          </a>&nbsp;
                          <form action="{{url('employees', [$employee->id])}}" method="POST">
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