@extends('admin.layout.layout')

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row mt-3">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                        <strong>Thesis Form</strong>
                        
                    </div>
                    <div class="card-body">
                        @if(isset($thesis->id))
                        <form action="{{route('thesis.update', $thesis->id)}}" enctype="multipart/form-data" method="post">
                            @method('patch')
                            @csrf
                            @else
                            <form action="{{route('thesis.store')}}" method="post" enctype="multipart/form-data" method="post">
                                
                                @csrf
                                @endif
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$thesis->title) }}" id="title" type="text" placeholder="e.g.Digital Information Security...">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Author Name</label>
                                            <input class="form-control @error('author') is-invalid @enderror" id="author" value="{{ old('author',$thesis->author) }}" name="author" type="text" placeholder="e.g. Mg Mg...">
                                            @error('author')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="academic_year">Academic Year</label>
                                        <input type="text" value="{{ old('academic_year',$thesis->academic_year) }}" class="form-control @error('academic_year') is-invalid @enderror" placeholder="e.g.2007" name="academic_year">
                                        @error('academic_year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    
                                    
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="ccyear">Description</label>
                                        <textarea name="description" placeholder="e.g.lorem ipsum..." class="form-control @error('description') is-invalid @enderror" id="descripton">{{ old('description',$thesis->description) }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="cvv">Abstract</label>
                                            <textarea name="abstract" placeholder="e.g.abstract..." class="form-control @error('abstract') is-invalid @enderror" id="abstract">{{ old('abstract',$thesis->abstract) }}</textarea>
                                            @error('abstract')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="cvv">File(upload)</label>
                                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file">
                                            <p>
                                                <span class="secondary">{{ old('file',$thesis->file) }}</span>
                                            </p>
                                            @error('file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Save" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    @endsection