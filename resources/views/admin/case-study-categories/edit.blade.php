@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <h3>Edit Case Study Category</h3>
            <hr>
            <form action="{{ url('/admin/case-study-categories', [$case_study_category->id]) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" value="{{$case_study_category->title}}"name="title">
                </div>
                <div class="form-group">
                    <label for="name">Slug</label>
                    <input type="text" class="form-control" placeholder="Slug" value="{{$case_study_category->slug}}"name="slug">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="5" cols="15">{{$case_study_category->description}}</textarea>
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
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                <a href="{{ URL::to('/admin/case-study-categories') }}" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
            </form>
        </div>
        <div class="col-md-5 col-sm-12">
            
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection