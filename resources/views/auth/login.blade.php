@extends('user.layout.app')
@section('content')


<section style="padding: 50px 0" class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">

                    <h2>Login</h2>

                    @if (!empty($msg))
                    <div class="row">
                        <!-- offer 01 -->
                        <div class="col-sm-12">
                            {{ $msg }}
                        </div>
                    </div>
                    @endif

                    <div class="product-item bg-light">
                        <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                <label class="control-label"></label>
                                <div class="col-md-6">
                                    
                                    <input id="email" placeholder="Registered Email ID" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label"></label>
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a> -->
                                </div>
                            </div>
                        </form>

                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</section>

 @endsection