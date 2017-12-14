@extends('user.layout.user')
@section('page_title') Product Details @stop

@section('content')
 @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
@if($profile_type==2)
@if($count>=50)
<h3>You have Uploaded maximum limit of 50 images to your product gallery</h3>
@else
        {!! Form::open(array('route' => 'photo.save', 'class' => 'form-horizontal row-border', 'files' => true )) !!}
<div class="form-group">
            <label for="name" class="col-md-4 control-label">Select Photo</label>

            <div class="col-md-8">
                <input type="file" name="photo" id="photo" required>

            </div>
        </div>  

                  <input type="hidden" name="product_id" value="{{$id}}">      
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Add To Gallery
                </button>
            </div>
        </div>
        {!! Form::close() !!}
        @endif
        @endif
        <div class="col-md-12">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Product</th>
								<th class="text-center">Category And Sub-category</th>
								@if($profile_type==2)
								<th class="text-center">Extra Info</th>
								@endif
							</tr>
						</thead>
						<tbody>
						
							<tr>
								
								<td class="product-details">
									<img width="200px" height="auto" src="../{{$product->product_image}}" alt="image description">
								<br><br>
									<h3 class="title">{{$product->product_name}}</h3>
									<span class="add-id"><strong>Price:</strong>Rs. {{$product->price}} per {{$product->measurement_unit}}</span>
									<span><strong style="width:50%">Key Features: </strong>{{$product->key_features}} </span>
									<span><strong style="width:50%">Delivery Time</strong>{{$product->delivery_time}}  <strong style="width:50%">Samples</strong>{{$product->delivery_time}}</span>
									<span><strong style="width:50%">Packing Details</strong>{{$product->packing_details}}</span>
								</td>
								<?php $category=DB::table('categories')->select('name')->where('id',$product->category_id)->first();
								$subcategory=DB::table('sub_categories')->select('name')->where('id',$product->sub_category_id)->first();
								 ?>
								<td class="product-category" style="width:30%"><span class="categories">{{$category->name}}<br>
								{{$subcategory->name}}</span></td>
								@if($profile_type==2)
								<td class="product-thumb" style="width:30%">
								@if($product->packing_details_img1)
									Packing Image 1:<img width="80px" height="auto" src="../{{$product->packing_details_img1}}" ><br><br>
									@endif
									@if($product->packing_details_img2)
									Packing Image 2:<img width="80px" height="auto" src="../{{$product->packing_details_img2}}"><br><br>
									@endif
									@if($product->plant_image)
									Plant/Shop Image:<img width="80px" height="auto" src="../{{$product->plant_image}}">
									@endif
									</td>
									@endif
							</tr>
						
						</tbody>
					</table>
					@if($profile_type==2)
					<h3>GALLERY:</h3>
					<div class="col-md-12">
					@foreach($gallery as $gal)

					<img width="200px" height="auto" src="../{{$gal->photo}}">
					<br>
					{!! Form::open([
            'method' => 'DELETE',
            'route' => ['photo.destroy', $gal->id]
        ]); !!}
<button class="delete" type="submit"  onclick='return confirm("Are you sure?")'><i class="fa fa-trash"></i></button>
        {!! Form::close(); !!}
        <br><br>
					@endforeach
					
					@endif
				</div>
			</div>

@stop