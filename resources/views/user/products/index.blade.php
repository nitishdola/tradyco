@extends('user.layout.user')
@section('page_title') My Products @stop

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
<a class="nav-link add-button" href="{{ route('product.create') }}"><i class="fa fa-plus-circle"></i> Add A Product </a>
<div class="col-md-12">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product</th>
								<th class="text-center">Category And Sub-category</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($products as $pro)
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{$pro->product_image}}" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">{{$pro->product_name}}</h3>
									<span class="add-id"><strong>Price:</strong>Rs. {{$pro->price}} per {{$pro->measurement_unit}}</span>
									<span><strong style="width:50%">Key Features: </strong>{{$pro->key_features}} </span>
									<span><strong style="width:50%">Delivery Time</strong>{{$pro->delivery_time}}  <strong style="width:50%">Samples</strong>{{$pro->delivery_time}}</span>
									<span><strong style="width:50%">Packing Details</strong>{{$pro->packing_details}}</span>
								</td>
								<?php $category=DB::table('categories')->select('name')->where('id',$pro->category_id)->first();
								$subcategory=DB::table('sub_categories')->select('name')->where('id',$pro->sub_category_id)->first();
								 ?>
								<td class="product-category" style="width:30%"><span class="categories">{{$category->name}}<br>
								{{$subcategory->name}}</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
											{!! Form::open([
            'method' => 'GET',
            'route' => ['product.view', $pro->slug]
        ]); !!}
<button class="view" type="submit"><i class="fa fa-eye"></i></button>
           

        {!! Form::close(); !!}		
											</li>
											<!--<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>-->
											<li class="list-inline-item">
											{!! Form::open([
            'method' => 'DELETE',
            'route' => ['product.destroy', $pro->id]
        ]); !!}
<button class="delete" type="submit"  onclick='return confirm("Are you sure?")'><i class="fa fa-trash"></i></button>
           

        {!! Form::close(); !!}
												
													
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>

@stop