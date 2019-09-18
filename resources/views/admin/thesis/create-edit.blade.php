@extends('admin.layout.layout')

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Thesis Form</strong>
                        
                    </div>
                    <div class="card-body">
                        <form action="/admin/thesis" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input class="form-control" id="title" type="text" placeholder="e.g.Digital Information Security...">
                                </div>
                            </div>
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ccnumber">Author Name</label>
                                    <input class="form-control" id="author" name="author" type="text" placeholder="e.g. Mg Mg...">
                                </div>
                            </div>
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="ccmonth">Academic Year</label>
                                <input type="text" class="form-control" placeholder="e.g.2007" name="academic_year">
                            </div>
                            
                            
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="ccyear">Description</label>
                                <textarea name="description" placeholder="e.g.lorem ipsum..." class="form-control" id="descripton"></textarea>
                            </div>
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="cvv">Abstract</label>
                                    <textarea name="abstract" placeholder="e.g.abstract" class="form-control" id="abstract"></textarea>
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