@extends('user.layout.user')
@section('page_title') Add Product @stop
@section('seo_title')  Add Product @stop

@section('content')
<div class="">

    

	{!! Form::open(array('route' => 'product.forward', 'method' =>'post', 'class' => 'form-horizontal row-border', 'files' => true )) !!}
               
        
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Select Category</label>

            <div class="col-md-8">
            	<select name="category_id" required>
                <option value="">Select One</option>
                 @foreach($category as $cat)
                 <option value="{{$cat->id}}">{{$cat->name}}</option>
                 @endforeach   
                </select>

            </div>
        </div>

                        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Create
                </button>
            </div>
        </div>
        {!! Form::close() !!}
</div>
@stop