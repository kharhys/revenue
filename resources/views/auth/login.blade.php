@extends('welcome')

@section('content')
<div class="ui very padded segment">
	<h4 class="ui dividing header">Login </h4>
	@if (count($errors) > 0)
		<div class="ui red segment">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul class="ui selection list">
				@foreach ($errors->all() as $error)
					<li class="item">{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form class="ui form" role="form" method="POST" action="/auth/login">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="ui field">
			<label>E-Mail Address</label>
			<input type="email" name="email" value="{{ old('email') }}">
		</div>

		<div class="ui field">
			<label>Password</label>
			<input type="password"  name="password">
		</div>

		<div class="ui field">
				<input type="checkbox" name="remember"> Remember Me
		</div>

		<button type="submit" class="ui fluid basic button">	Login	</button>
		<a href="/password/email">Forgot Your Password?</a>

	</form>


</div>
@endsection
