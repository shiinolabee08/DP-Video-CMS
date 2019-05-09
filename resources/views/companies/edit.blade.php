@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Edit Company Details</h1>
    <hr>
     <form action="{{url('companies', [$company->id])}}" method="post" enctype="multipart/form-data">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" value="{{$company->name}}"class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="description">Email Address</label>
        <input type="email" value="{{$company->email}}"class="form-control" name="email">
      </div>
      @if( strlen($company->logo) )
        <br>
        <img src="{{ URL::to('/storage/' . $company->logo) }}"/>
      @endif
      <div class="form-group">
        <label for="name">Change Logo</label>
        <input type="file" class="form-control" name="logo">
      </div>
      <div class="form-group">
        <label for="name">Website Url</label>
        <input type="text" value="{{$company->website_url}}"class="form-control" maxlength="50" name="website_url">
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