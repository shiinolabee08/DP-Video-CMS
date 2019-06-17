@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">            
            <div class="col-md-6 col-sm-7">
                <form action="/admin/form-submission/find" method="get">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Search</span>
                        </div>
                        <input type="text" name="search" class="form-control" placeholder="Find record(s) via full name or email">
                    </div>
                </form>
            </div>
        </div>
        <hr>
        @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if ( count($data) )
            <h3>List of Form Submissions <span class="badge badge-secondary">{{ count($data) }}</span></h3>

            {{ $data->links() }}
            <table class="table table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Information</th>
                        <th scope="col">Submitted At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $form_submission)
                <tr>
                    <td scope="row">{{$form_submission->full_name}}</td>
                    <td>{{$form_submission->email}}</td>
                    <td style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;max-width:450px;">{{$form_submission->more_info}}</td>
                    <td>{{$form_submission->created_at->toFormattedDateString()}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('/admin/form-submissions/' . $form_submission->id . '/reply') }}" class="btn btn-primary">
                              	<i class="fa fa-reply"></i> Reply To Sender
                            </a>&nbsp;
                            <!-- <form action="{{url('/admin/case-study-categories', [$form_submission->id])}}" method="POST">
            					<input type="hidden" name="_method" value="DELETE">
           						<input type="hidden" name="_token" value="{{ csrf_token() }}">
           						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
           				     </form> -->
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