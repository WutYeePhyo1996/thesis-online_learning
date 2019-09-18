@extends('admin.layout.layout');


@section('content')
<div class="container-fluid">
        <div class="animated fadeIn">
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
                    <th>Username</th>
                    <th>Date registered</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>Bernhard Shelah</td>
                    <td>2012/06/01</td>
                    <td>Admin</td>
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
                  
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection