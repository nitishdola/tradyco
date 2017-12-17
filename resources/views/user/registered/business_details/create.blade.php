@extends('user.layout.user')
@section('page_title') Add Business profile @stop
@section('seo_title')  Add Business profile @stop

@section('content')
<div class="">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

	{!! Form::open(array('route' => 'user.business_details.save', 'id' => 'user.business_details.save', 'class' => 'form-horizontal row-border', 'files' => true )) !!}
               
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Business Name</label>

            <div class="col-md-8">

                {!! Form::text('business_name', null, ['class' => 'form-control required', 'id' => 'business_name', 'autocomplete' => 'off', 'required' => 'true' ]) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Business Type</label>

            <div class="col-md-8">
            	{!! Form::select('business_type', $business_types, null, ['class' => 'form-control required', 'id' => 'business_type', 'required' => 'true', 'placeholder' => 'Select Business Type' ]) !!}

            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Business Email</label>

            <div class="col-md-8">
                {!! Form::email('business_email', $default_email, ['class' => 'form-control required', 'id' => 'business_email' ]) !!}

            </div>
        </div>

        @if($profile_type == 2)

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Business Address</label>

            <div class="col-md-8">

                {!! Form::textarea('business_address', null, ['class' => 'form-control required', 'id' => 'business_address', 'autocomplete' => 'off', 'rows' => 4 ]) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Owner/CEO name</label>

            <div class="col-md-8">
                {!! Form::text('ceo_name',  null, ['class' => 'form-control required', 'id' => 'ceo_name']) !!}

            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Phone</label>

            <div class="col-md-8">
                {!! Form::text('phone_1', null, ['class' => 'form-control required', 'id' => 'phone_1' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Additional Phone Number </label>

            <div class="col-md-8">
                {!! Form::text('phone_2', null, ['class' => 'form-control required', 'id' => 'phone_2' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Mobile Number </label>

            <div class="col-md-8">
                {!! Form::text('mobile_number', null, ['class' => 'form-control required', 'id' => 'mobile_number' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Fax Number </label>

            <div class="col-md-8">
                {!! Form::text('fax_number', null, ['class' => 'form-control required', 'id' => 'fax_number' ]) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Business Website </label>

            <div class="col-md-8">
                {!! Form::text('business_website', null, ['class' => 'form-control required', 'id' => 'business_website' ]) !!}

            </div>
        </div> 


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Logo </label>

            <div class="col-md-8">
                <input type="file" name="logo" id="logo">

            </div>
        </div>  


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Business Description</label>

            <div class="col-md-8">

                {!! Form::textarea('business_description', null, ['class' => 'form-control required', 'id' => 'business_description', 'autocomplete' => 'off', 'rows' => 4 ]) !!}

            </div>
        </div> 


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Year of Establishment</label>

            <div class="col-md-8">

                {!! Form::text('year_of_establishment', null, ['class' => 'form-control required', 'id' => 'year_of_establishment', 'autocomplete' => 'off', ]) !!}

            </div>
        </div> 


        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Registration Number</label>

            <div class="col-md-8">

                {!! Form::text('registration_number', null, ['class' => 'form-control required', 'id' => 'registration_number', 'autocomplete' => 'off', ]) !!}

            </div>
        </div> 

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Sales Volume</label>

            <div class="col-md-8">

                {!! Form::text('sales_volume', null, ['class' => 'form-control required', 'id' => 'sales_volume', 'autocomplete' => 'off', ]) !!}

            </div>
        </div> 

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Number of Staff</label>

            <div class="col-md-8">

                {!! Form::text('number_of_staff', null, ['class' => 'form-control required', 'id' => 'number_of_staff', 'autocomplete' => 'off', ]) !!}

            </div>
        </div>  

        @endif

                        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Create
                </button>
            </div>
        </div>
        {!! Form::close() !!}
</div>
@stop