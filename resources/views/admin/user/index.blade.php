@extends('admin.layout.layout');

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <a class="btn btn-success mb-2" href="{{route('user.create')}}">Create New</a>
        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i> User Permission
            </div>
            <div class="card-body">
                
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        
                        <tr>
                            <td>Wut Yee Phyo Idiot</td>
                            <td>wutyeephyoidiot@gmail.com</td>
                            <td>Super Admin</td>
                            
                            <td>
                                <button class="btn btn-info">Edit</button>
                                <button class="btn btn-danger">del</button>
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection