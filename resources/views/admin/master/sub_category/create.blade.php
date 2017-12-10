@extends('admin.layout.main')
@section('breadcumb')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.master.category.index') }}">All Sub Categories</a></li>
<li class="breadcrumb-item active">Add New Sub Category</li>
@stop

@section('content')

<div class="animated fadeIn">

			        
			        
    <div class="row">
        <div class="col-sm-8">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        
            <div class="card">
                <div class="card-header">
                    <strong>Product Sub Category</strong>
                    <small>Form</small>
                </div>
                {!! Form::open(array('route' => 'admin.master.sub_category.store', 'id' => 'admin.master.sub_category.store', 'class' => 'form-horizontal row-border', 'files' => true)) !!}
                <div class="card-body">
                	<div class="row">
                		<div class="col-sm-12">
                			@include('admin.master.sub_category._form')

                			{!! Form::label('', '', array('class' => 'col-md-3 control-label')) !!}
						        {!! Form:: submit('Submit', ['class' => 'btn btn-success']) !!}
						    {!!form::close()!!}

                		</div>
                	</div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection