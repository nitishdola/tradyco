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
			</td>
			<td class="product-category"><span class="categories">{{$business_details->business_type}}</span></td>
			<td class="product-category"><span class="categories">{{$business_details->business_email}}</span></td>
		</tr>
	</tbody>
</table>
@endif
@else
<div class="alert alert-danger">
  <strong>Oops !</strong> Business profile not added.
</div>

<a class="nav-link add-button" href="{{ route('user.business_details.create') }}"><i class="fa fa-plus-circle"></i> Add Business Profile </a>
@endif



@stop