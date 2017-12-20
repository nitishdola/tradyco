@extends('user.layout.user')
@section('page_title') Business Profile @stop
@section('seo_title') Business Profile @stop

@section('content')

@if($business_details)
<table class="table table-responsive product-dashboard-table">
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
			</td>
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
@else


<div class="alert alert-danger">
  <strong>Oops !</strong> Business profile not added.
</div>

<a class="nav-link add-button" href="{{ route('user.business_details.create') }}"><i class="fa fa-plus-circle"></i> Add Business Profile </a>

@endif



@stop