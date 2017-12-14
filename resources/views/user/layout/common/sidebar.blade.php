<div class="widget user-dashboard-profile">
	<!-- User Image -->
	<div class="profile-thumb">
		<i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i>
	</div>
	<!-- User Name -->
	<h5 class="text-center">{{ UserHelper::getUserInfo()->firstname }} {{ UserHelper::getUserInfo()->lastname }} </h5>
	<p>Joined {{ date('M d, Y', strtotime(UserHelper::getUserInfo()->created_at) ) }}</p>
	<a href="{{ route('user.profile.edit') }}" class="btn btn-main-sm">Edit Profile</a>
</div>
<!-- Dashboard Links -->
<div class="widget user-dashboard-menu">
	<ul>
		<li class="active" ><a href="{{ route('user.business_details.index') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Business Profile</a></li>
		<li><a href=""><i class="fa fa-envelope-open-o"></i> Requests Inbox <span>5</span></a></li>
		<li><a href=""><i class="fa fa-envelope-square"></i>Responses Sent <span>2</span></a></li>
		<li><a href="{{route('my.products')}}"><i class="fa fa-shopping-bag"></i> My Products <span>23</span></a></li>
		<li><a href="{{ route('user.logout') }}"><i class="fa fa-cog"></i> Logout</a></li>
	</ul>
</div>