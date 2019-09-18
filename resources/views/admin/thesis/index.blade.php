@extends('admin.layout.layout');


@section('content')
<div class="container-fluid">
        <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-edit"></i> Thesis
              
            </div>
            
            <div class="card-body">
                <div class="clearfix">
                    <a href="/admin/thesis/create" class="btn btn-success float-right mb-2">New</a>
                  </div>
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>file</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($all_thesis as $thesis)
                    
                
                  <tr>
                    <td>{{ $thesis->name }}</td>
                    <td>{{ $thesis->author }}</td>
                    <td><a href="#">Download</a></td>
                    <td>
                      <span class="badge badge-dark">Inactive</span>
                    </td>
                    <td>
                      <a class="btn btn-success" href="#">
                        <i class="fa fa-search-plus"></i>
                      </a>
                      <a class="btn btn-info" href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a class="btn btn-danger" href="#">
                        <i class="fa fa-trash-o"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection