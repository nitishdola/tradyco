@extends('user.layout.user')
@section('page_title') Profile Edit @stop
@section('seo_title')  Edit Profile @stop

@section('content')
<div class="">
	{!! Form::model($user_info, array('route' => ['user.profile.update'], 'id' => 'user.profile.update', 'class' => 'form-horizontal row-border')) !!}
               
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">First Name</label>

            <div class="col-md-8">

                {!! Form::text('firstname', null, ['class' => 'form-control required', 'id' => 'firstname', 'autocomplete' => 'off', 'required' => 'true', 'pattern' =>'[A-Za-z]{$}' ]) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Last Name</label>

            <div class="col-md-8">
            	{!! Form::text('lastname', null, ['class' => 'form-control required', 'id' => 'lastname', 'autocomplete' => 'off', 'required' => 'true', 'pattern' =>'[A-Za-z]{$}' ]) !!}

            </div>
        </div>

        <!-- <div class="form-group">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
        
            <div class="col-md-6">
                {!! Form::text('email', null, ['class' => 'form-control required', 'id' => 'email', 'autocomplete' => 'off', 'required' => 'true', 'pattern' =>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$']) !!}
            </div>
        </div> -->

                        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Update
                </button>
            </div>
        </div>
        {!! Form::close() !!}
</div>
@stop