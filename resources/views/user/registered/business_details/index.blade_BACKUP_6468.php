@extends('user.layout.user')
@section('page_title') Business Profile @stop
@section('seo_title') Business Profile @stop

@section('content')

@if($business_details)
@if($profile_type==2)
<div class="row">
<div class="col-md-12">
<img width="80px" height="auto" src="{{$business_details->logo}}" alt="image description"></td>
<h2>Business Name: {{$business_details->business_name}}</h2>
<p>Business Type: {{$business_details->business_type}}</p>
<p>Ceo Name: {{$business_details->ceo_name}}</p>
<p>Address: {{$business_details->business_address}}</p>
<p>Contact Number: {{$business_details->phone_1}}</p>
<p>Alternate Number: {{$business_details->phone_2}}</p>
<p>Mobile: {{$business_details->mobile_number}}</p>
<p>Business Email: {{$business_details->business_email}}</p>
<p>Business Website: {{$business_details->business_website}}</p>
<p>Business Description: {{$business_details->business_description}}</p>
<p>Year of Establishment: {{$business_details->year_of_establishment}}</p>
<p>Registration Number: {{$business_details->registration_number}}</p>
<p>Sales Volume: {{$business_details->sales_volume}}</p>
<p>Number of Staff: {{$business_details->number_of_staff}}</p>
</div>
</div>
@else
<table class="table table-responsive product-dashboard-table">
<<<<<<< HEAD
	<tbody>
		<tr>
			
			<td class="weighted">
				Business Name	
			</td>
			<td class="product-details">
				{{ $business_details->business_name }}
			</td>
		</tr>

		<tr>


			<td class="weighted">
				Business Type	
			</td>
			<td class="product-details">
				{{ $business_details->business_type }}
			</td>
		</tr>

		<tr>

			<td class="weighted">
				Address	
			</td>
			<td class="product-details">
				{{ $business_details->business_address }}
			</td>
		</tr>

		
		<tr>
			<td class="weighted">
				Contact Number(s)	
			</td>
			<td class="product-details">
				{{ $business_details->phone_1 }} {{ $business_details->phone_2 }}
			</td>
		</tr>

		<tr>

			<td class="weighted">
				Mobile Number
			</td>
			<td class="product-details">
				{{ $business_details->mobile_number }}
			</td>
		</tr>


		<tr>

			<td class="weighted">
				FAX Number
			</td>
			<td class="product-details">
				{{ $business_details->fax_number }}
=======
	<thead>
		<tr>
			<th>Business Name</th>
			<th>Business Type</th>
			<th class="text-center">Business Email</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="product-details">
				<h3 class="title">{{$business_details->business_name}}</h3>	
>>>>>>> 6d5002e613968fba9925addf608847fddc540629
			</td>
			<td class="product-category"><span class="categories">{{$business_details->business_type}}</span></td>
			<td class="product-category"><span class="categories">{{$business_details->business_email}}</span></td>
		</tr>

		<tr>

			<td class="weighted">
				Business Email
			</td>
			<td class="product-details">
				{{ $business_details->business_email }}
			</td>
		</tr>


		<tr>

			<td class="weighted">
				Business Website
			</td>
			<td class="product-details"> 
				{{ $business_details->business_website }}
			</td>
		</tr>


		<tr>

			<td class="weighted">
				Logo
			</td>
			<td class="product-details">
				<img src="{{ asset($business_details->logo) }}" width="190" height="140">
			</td>
		</tr>


		<tr>

			<td class="weighted">
				Description
			</td>
			<td class="product-details">
				{{ $business_details->business_description }}
			</td>
		</tr>


		<tr>

			<td class="weighted">
				Year of Establiishmet
			</td>
			<td class="product-details">
				{{ $business_details->year_of_establishment }}
			</td>
		</tr>

		<tr>

			<td class="weighted">
				Registration Number 
			</td>
			<td class="product-details">
				{{ $business_details->registration_number }}
			</td>
		</tr>

		<tr>

			<td class="weighted">
				Sales Volume
			</td>
			<td class="product-details">
				{{ $business_details->sales_volume }}
			</td>
		</tr>

		<tr>

			<td class="weighted">
				Number of Staff
			</td>
			<td class="product-details">
				{{ $business_details->number_of_staff }}
			</td>
		</tr>

		<tr>

			<td class="weighted">
				CEO
			</td>
			<td class="product-details">
				{{ $business_details->ceo_name }}
			</td>
		</tr>

	</tbody>
</table>
<<<<<<< HEAD
@else


=======
@endif
@else
>>>>>>> 6d5002e613968fba9925addf608847fddc540629
<div class="alert alert-danger">
  <strong>Oops !</strong> Business profile not added.
</div>

<a class="nav-link add-button" href="{{ route('user.business_details.create') }}"><i class="fa fa-plus-circle"></i> Add Business Profile </a>
@endif



@endif



@stop