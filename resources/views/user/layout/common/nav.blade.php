<a class="navbar-brand" href="{{route('user.home')}}">
	<img src="images/logo.png" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav ml-auto main-nav ">
		<li class="nav-item active">
			<a class="nav-link" href="{{route('user.home')}}">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">My Webpage</a>
		</li>
		
		<!--<li class="nav-item dropdown dropdown-slide">
			<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Listing <span><i class="fa fa-angle-down"></i></span>
			</a>
			
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</li>-->
	</ul>
	<ul class="navbar-nav ml-auto mt-10">
		<!-- <li class="nav-item">
			<a class="nav-link login-button" href="index.html">Login</a>
		</li> -->
		<li class="nav-item">
		@if($profile_type==2)
			<a class="nav-link add-button" href="#"><i class="fa fa-plus-circle"></i> Paid User</a>
			@else
			<a class="nav-link add-button" href="#"><i class="fa fa-plus-circle"></i> Free User</a>
			@endif
		</li>
	</ul>
</div>