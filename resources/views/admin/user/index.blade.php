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
                        
                        
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            
                            <td>
                                <a class="btn btn-info" href="{{route('user.edit', $user->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                {!! Form::open(array('url' => route('user.destroy', $user->id),'method' => 'DELETE', 'class'=> '')) !!}
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
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