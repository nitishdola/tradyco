<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
  {!! Form::label('category_id', 'Select Category', array('class' => 'col-md-3 control-label')) !!}
  <div class="col-md-9">
    {!! Form::select('category_id', $categories, null, ['class' => 'selectize-basic required', 'id' => 'category_id', 'placeholder' => 'Seelct Category', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('category_id', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('name', 'Sub Category Name', array('class' => 'col-md-3 control-label')) !!}
  <div class="col-md-9">
    {!! Form::text('name', null, ['class' => 'form-control required', 'id' => 'name', 'placeholder' => 'Category Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('sub_category_image') ? 'has-error' : ''}}">
  {!! Form::label('sub_category_image', 'Sub Category Image', array('class' => 'col-md-3 control-label')) !!}
  <div class="col-md-9">
    {!! Form::file('sub_category_image', null, ['class' => 'form-control required', 'id' => 'sub_category_image', 'placeholder' => 'sub_category_image', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('sub_category_image', '<span class="help-inline">:message</span>') !!}
</div>
