<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('name', 'Category Name', array('class' => 'col-md-3 control-label')) !!}
  <div class="col-md-9">
    {!! Form::text('name', null, ['class' => 'form-control required', 'id' => 'name', 'placeholder' => 'Category Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('category_image') ? 'has-error' : ''}}">
  {!! Form::label('category_image', 'Category Image', array('class' => 'col-md-3 control-label')) !!}
  <div class="col-md-9">
    {!! Form::file('category_image', null, ['class' => 'form-control required', 'id' => 'category_image', 'placeholder' => 'category_image', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('category_image', '<span class="help-inline">:message</span>') !!}
</div>
