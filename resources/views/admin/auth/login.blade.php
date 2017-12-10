@extends('admin.layout.auth')

@section('auth_form')

<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
    {{ csrf_field() }}


    <div class="input">
        <label for="name">Email</label>
        <input type="text" name="email" id="email">
        <span class="spin"></span>
    </div>

    <div class="input">
        <label for="pass">Password</label>
        <input type="password" name="password" id="password">
        <span class="spin"></span>
    </div>

    <div class="button login">
        <button type="submit"><span>GO</span> <i class="fa fa-check"></i></button>
    </div>
</form>
@endsection



          


