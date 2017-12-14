@extends('user.layout.user')
@section('page_title') Add Product @stop
@section('seo_title')  Add Product @stop

@section('content')
<div class="">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

	{!! Form::open(array('route' => 'product.save', 'class' => 'form-horizontal row-border', 'files' => true )) !!}
               
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Product Name</label>

            <div class="col-md-8">

                {!! Form::text('product_name', null, ['class' => 'form-control required', 'id' => 'product_name', 'autocomplete' => 'off', 'required' => 'true' ]) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Sub-Category</label>

            <div class="col-md-8">
            	<select name="sub_category_id" required>
                <option value="">Select One</option>
                 @foreach($sub_category as $cat)
                 <option value="{{$cat->id}}">{{$cat->name}}</option>
                 @endforeach   
                </select>

            </div>
        </div>

<div class="form-group">
            <label for="name" class="col-md-4 control-label">Product Image </label>

            <div class="col-md-8">
                <input type="file" name="product_image" id="product_image">

            </div>
        </div>  
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Price(in Rupees)</label>

            <div class="col-md-8">
                {!! Form::number('price', null, ['class' => 'form-control required', 'id' => 'price' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Key Features</label>

            <div class="col-md-8">
 {!! Form::text('key_features',  null, ['class' => 'form-control required', 'id' => 'key_features']) !!}
                

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Delivery time</label>

            <div class="col-md-8">
                {!! Form::text('delivery_time',  null, ['class' => 'form-control required', 'id' => 'delivery_time']) !!}

            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Measurement Unit</label>

            <div class="col-md-8">
                {!! Form::text('measurement_unit', null, ['class' => 'form-control required', 'id' => 'measurement_unit' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Samples(If Any)</label>

            <div class="col-md-8">
                {!! Form::text('samples', null, ['class' => 'form-control required', 'id' => 'samples' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Packing Details </label>

            <div class="col-md-8">
                {!! Form::text('packing_details', null, ['class' => 'form-control required', 'id' => 'packing_details' ]) !!}

            </div>
        </div>
@if($profile_type==2)

       <div class="form-group">
            <label for="name" class="col-md-4 control-label">Packing Details Image 1</label>

            <div class="col-md-8">
                <input type="file" name="packing_details_img2" id="packing_details_img1">

            </div>
        </div>  


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Packing Details Image 2</label>

            <div class="col-md-8">
                <input type="file" name="packing_details_img2" id="packing_details_img2">

            </div>
        </div>  


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Your Shop/Plant Image</label>

            <div class="col-md-8">
                <input type="file" name="plant_image" id="plant_image">

            </div>
        </div>  
@endif
                  <input type="hidden" name="category_id" value="{{$category_id}}">      
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