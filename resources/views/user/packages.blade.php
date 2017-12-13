@extends('user.layout.app')
@section('content')


<section style="padding: 50px 0" class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Packages</h2>
					<p>Choose The Package of Your Choice.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-sm-12 col-lg-6">
				<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<h1 style="text-align:center">Free User</h1>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="">Features</a></h4>
		    
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		   <p style="text-align:center"><a href="{{route('user.free')}}"><button class="btn btn-primary btn-lg">Join Now</button></a></p>
		</div>
	</div>
</div>



			</div>
			<div class="col-sm-12 col-lg-6">
				<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<h1 style="text-align:center">Paid User</h1>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="">Features</a></h4>
		    
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <p style="text-align:center"><a href="{{route('user.paid')}}"><button class="btn btn-primary btn-lg">Join Now</button></a></p>
		</div>
	</div>
</div>



			</div>



			</div>
			
			
		</div>
	</div>
</section>




  @endsection