@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <h1>Add New Case Study</h1>
            <hr>
            <form action="/case-studies" method="post" enctype="multipart/form-data">
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
                            <span class="input-group-text" id="basic-addon3">https://youtube.com/watch?v=</span>
                        </div>
                        <input type="text" class="form-control" name="youtube_video_url" placeholder="The unique Youtube ID(e.g oDNtCb3GAHQ)" aria-describedby="basic-addon3">
                    </div>
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
            </form>
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="well">
                <h3>Case Study Categories</h3>
                <hr>
                @if ( count($categories) )
                    <ul class="list-group list-group-flush">
                        @foreach($categories as $category)
                        <li>{{ $category->title }}</li>
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