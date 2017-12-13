@extends('user.layout.app')
@section('content')


<section style="padding: 50px 0" class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Register As Free Member</h2>
					
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-sm-12">
			@if (!empty($msg))
    {{ $msg }}
@endif
				<!-- product card -->
<div class="product-item bg-light">
	{!! Form::open(['route' => 'user.paidreg', 'class' => 'form-horizontal']) !!}
                    <!--<form class="form-horizontal" role="form" method="POST" action="unit.create">-->
                        {{ csrf_field() }}

               
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-8">
                                <input placeholder="Eg. John" type="text" class="form-control" name="firstname"  required pattern="[A-Za-z]{$}" title="no special characters allowed" autocomplete="off">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-8">
                                <input placeholder="Eg. Doe" type="text" class="form-control" name="lastname"  required pattern="[A-Za-z]{$}" title="no special characters allowed" autocomplete="off">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="john@doe.com" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" name="email" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="confpassword" onblur="confirmEmail()" type="password" class="form-control" name="confpassword" autocomplete="off" required>
                            </div>
                        </div>

                        
 <div class="form-group"><div class="col-md-6"><input type="checkbox" required>I hereby declare that I have clearly read the <a href="#">"Terms & Conditions"</a>.</div></div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
</div>



			</div>
		



			</div>
			
			
		</div>
	</div>
</section>
<script type="text/javascript">
    function confirmEmail() {
        var password = document.getElementById("password").value
        var confpassword = document.getElementById("confpassword").value
        if(password != confpassword) {
            alert('Password Not Matching!');
        }
    }
</script>



  @endsection