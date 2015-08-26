@extends('portal')

@section('content')
<div id="login-partial" class="ui grid">
  <div class="three column row" style="padding-right: 1em;">
    <div class="right floated column" style="margin-right: 1em;">
    	<div class="ui segment" style="margin: 2em;">
    		<h4 class="ui dividing orange header">Login To Access E-County Services</h4>
			@if (count($errors) > 0)
				<div class="ui segment" style="background: red; color: white;">
					Invalid Email or Password
					<ul class="ui list">
						@foreach ($errors->all() as $error)
						  <div class="item" style="color: white;">   {{ $error }}  </div>
						@endforeach
					</ul>
				</div>
			@endif
			<div class="ui  padded basic segment">
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

					<button type="submit" class="ui fluid orange button">	Login	</button>
					<div class="ui center aligned sub header" style="text-transform: capitalize;">
						<a  href="/password/email">Forgot Your Password?</a>
					</div>
				</form>
			</div>
    	</div>
    </div>
  </div>
</div>
@endsection
