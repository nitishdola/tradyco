@extends('admin.layout.main')

@section('breadcumb')
<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item">Categories</li>
@stop

@section('content')
<div class="animated fadeIn">     
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> All Categories
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category Image</th>
                                <th>Actin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $k => $v)
                            <tr>
                                <td>{{ $k +1 }}</td>
                                <td>{{ $v->name }}</td>
                                <td><img src="{{ asset($v->category_image_path) }}" width="120" height="120"></td>

                                <td> <a href="#" class="btn btn-sm btn-info"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a> <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Remove </a> </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</div>
@stop