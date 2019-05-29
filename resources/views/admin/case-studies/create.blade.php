@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <h3>Add New Case Study</h3>
            <hr>
            <form action="/admin/case-studies" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="name">Feature Image</label>
                    <input type="file" class="form-control" placeholder="Feature Image" name="feature_image">
                </div>
                <div class="form-group">
                    <label>Youtube Video Url</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">e.g. https://youtube.com/embed/oDNtCb3GAHQ</span>
                        </div>
                        <input type="text" class="form-control" name="youtube_video_url" placeholder="The unique Youtube Embed Link" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="case_study_category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
              
                <div class="form-group">
                    <label for="name">Publish this?</label>
                    <select class="form-control" name="published">
                        <option value="1" selected="">Yes</option>
                        <option value="0">No(set as draft)</option>          
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
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                <a href="{{ URL::to('/admin/case-studies') }}" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
            </form>
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="well">
                <h3>Categories</h3>
                <hr>
                @if ( count($categories) )
                    <ul class="list-group">
                        @foreach($categories as $category)
                        <li class="list-group-item">{{ $category->title }}({{count($category->caseStudies)}})</li>
                        @endforeach
                    </ul>
                @else 
                    <div>No categories yet.</div>
                @endif
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection