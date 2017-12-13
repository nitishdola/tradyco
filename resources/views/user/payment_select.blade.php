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
	{!! Form::open(['route' => 'user.paymentsel', 'class' => 'form-horizontal']) !!}
                    <!--<form class="form-horizontal" role="form" method="POST" action="unit.create">-->
                        {{ csrf_field() }}

               
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Select Payment</label>

                            <div class="col-md-8">
                               <select name="payment" class="form-control"><option>Online Payment</option>
                               <option>By Cheque</option>
                               <option>By Demand Draft</option></select>
                            </div>
                        </div>
                        <input type="hidden" name="firstname" value="{{$firstname}}">
                        <input type="hidden" name="lastname" value="{{$lastname}}">
                        <input type="hidden" name="email" value="{{$email}}">
                        <input type="hidden" name="password" value="{{$password}}">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Proceed
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




  @endsection