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
		<li class="active" ><a href=""><i class="fa fa-user"></i> My Ads</a></li>
		<li><a href=""><i class="fa fa-bookmark-o"></i> Favourite Ads <span>5</span></a></li>
		<li><a href=""><i class="fa fa-file-archive-o"></i>Archived Ads <span>12</span></a></li>
		<li><a href=""><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a></li>
		<li><a href="{{ route('user.logout') }}"><i class="fa fa-cog"></i> Logout</a></li>
		<li><a href=""><i class="fa fa-power-off"></i>Delete Account</a></li>
	</ul>
</div>