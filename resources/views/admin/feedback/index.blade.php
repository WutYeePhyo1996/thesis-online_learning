@extends('admin.layout.layout');


@section('content')

<div class="container-fluid">

        <div class="animated fadeIn">
                <a class="btn btn-success mb-2" href="{{('/contact')}}">Create New</a>
                @if(session()->has('fail-msg'))
                <div class="alert alert-danger">
                  <p>{!! session('fail-msg') !!}</p>
                </div>
              @endif

          <div class="card">
            <div class="card-header">
              <i class="fa fa-edit"></i> DataTables
              <div class="card-header-actions">
                <a class="card-header-action" href="https://datatables.net" target="_blank">
                  <small class="text-muted">docs</small>
                </a>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Created at</th>
                  </tr>
                </thead>
                <tbody>
                    @if(isset($feedbacks))
                @foreach($feedbacks as $feedback)
                  <tr>
                  <td>{{$feedback->name}}</td>
                  <td>{{$feedback->email}}</td>
                  <td>{{$feedback->subject}}</td>
                  <td>{{$feedback->message}}</td>
                  <td>{{$feedback->created_at}}</td>
                  </tr>
                @endforeach
                @endif

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection
