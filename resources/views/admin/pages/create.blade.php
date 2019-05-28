@extends('layouts.admin')

@section('content')
  <div class="container">
    <h1>Add New Page</h1>
    <hr>
     <form action="/pages" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="name">Slug</label>
        <input type="text" class="form-control" placeholder="URL friendly name for the page" name="slug">
      </div>
      <div class="form-group">
        <label for="description">Email Address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="name">Phone</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <div class="form-group">
        <label for="name">Assigned Company</label>
        <select class="form-control" name="company_id">
          <option value="">Select Company</option>
          @foreach ($companies->all() as $company)
              <option value="{{$company->id}}">{{ $company->name }}</option>
          @endforeach
        </select>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection