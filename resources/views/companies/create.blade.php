@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Add New Company</h1>
    <hr>
     <form action="/companies" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="description">Email Address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="name">Logo</label>
        <input type="file" class="form-control" name="logo">
      </div>
      <div class="form-group">
        <label for="name">Website Url</label>
        <input type="text" class="form-control" maxlength="50" name="website_url">
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