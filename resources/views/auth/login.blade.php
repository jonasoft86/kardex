@extends('layouts.app')

@section('content')



	<!-- main -->
	<div class="main">
		<h1>Kardex</h1>
		<div class="signin-form">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
	

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
             

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" >

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
 
                        <input type="submit" value="Entrar">
                    </div>
                </div>
                
			</form>

		</div>
	</div>


@endsection
