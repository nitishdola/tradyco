@extends('admin.layout.main')
@section('breadcumb')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.master.category.index') }}">All Categories</a></li>
<li class="breadcrumb-item active">Add New Category</li>
@stop

@section('content')

<div class="animated fadeIn">

			        
			        
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <strong>Product Category</strong>
                    <small>Form</small>
                </div>
                {!! Form::open(array('route' => 'admin.master.category.store', 'id' => 'admin.master.category.store', 'class' => 'form-horizontal row-border', 'files' => true)) !!}
                <div class="card-body">
                	<div class="row">
                		<div class="col-sm-12">
                			@include('admin.master.category._form')

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