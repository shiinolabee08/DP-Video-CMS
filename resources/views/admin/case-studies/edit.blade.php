@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h1>Edit Case Study Details</h1>                
                <hr>
                <form action="{{url('/admin/case-studies', [$case_study->id])}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" value="{{$case_study->title}}" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Post Slug</label>
                        <input type="text" class="form-control" value="{{$case_study->post_slug}}" name="post_slug" placeholder="URL friendly name for your post">
                    </div>
                    <div class="feature-image">
                        <h4>Feature Image:</h4>
                        <img src="{{ URL::to('/uploads/case-studies/' . $case_study->feature_image) }}"/>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="name">New Feature Image?</label>
                        <input type="file" class="form-control" placeholder="Feature Image" name="new_feature_image">
                        <input type="hidden" name="feature_image" value="{{$case_study->feature_image}}">
                    </div>
                    <div class="form-group">
                    <label>Youtube Video Url</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">e.g. https://youtube.com/embed/oDNtCb3GAHQ</span>
                        </div>
                        <input type="text" class="form-control" value="{{$case_study->youtube_video_url}}"  name="youtube_video_url" placeholder="The unique Youtube Embed Link" aria-describedby="basic-addon3">
                    </div>
                </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" multiple name="category_id[]">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    @if ( in_array($category->id, $selected_categories) )
                                      selected
                                    @endif
                                >{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
              
                    <div class="form-group">
                        <label for="name">Publish this?</label>
                        <select class="form-control" name="published">
                        <option value="1" 
                            @if($case_study->published) 
                                selected
                            @endif
                        >Yes</option>
                        <option value="0"
                            @if($case_study->published == 0)
                                selected
                            @endif
                        >No(set as draft)</option>          
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
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Submit</button>
                    <a href="{{ URL::to('/admin/case-studies') }}" class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancel Edit</a>
                </form> 
            </div>
        </div>
    </div>
@endsection