@extends('portal')

@section('content')

<div id="window">

	@if (count($errors) > 0)
	<div class="ui orange segment">
		<div class="ui red sub header" style="text-transform: capitalize; font-size: 1em;"> 
			There were some problems with your input. 
		</div>
		<ul class="ui list">
			@foreach ($errors->all() as $error)
			<div class="item">
				<i class="erase icon"></i>
				{{ $error }}
			</div>
			@endforeach
		</ul>
	</div>
	@endif

	<form class="ui form very padded attached segment two column divided grid" method="POST" action="/auth/register">
		<div class="equal height row">
			<div class="column">

				<h4 class="ui horizontal header divider"> Personal Information </h4>

				<div class="ui basic padded segment">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="ui required field">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Full Name"  value="{{ old('name') }}">
					</div>
					<div class="required field">
		        <label>ID/Passport Number</label>
		        <input type="text" name="idnumber" placeholder="National ID Number" value="{{ Input::old('idnumber') }}">
		      </div>
		      <div class="required field">
		        <label>Mobile Number</label>
		        <input type="text" name="mobile" placeholder="Mobile Phone Number" value="{{ Input::old('mobile') }}">
		      </div>

					<div class="two fields">
			      <div class="required field">
			        <label>Postal Address</label>
			        <input type="text" name="address" placeholder="Postal Address" value="{{ Input::old('address') }}">
			      </div>
			      @widget('selectCode')
			    </div>

				</div>
			</div>

			<div class="column">
				<h4 class="ui horizontal header divider"> Account Information </h4>

				<div class="ui basic padded segment">
					<div class="ui required field">
						<label for="email">E-Mail Address</label>
						<div class="ui icon input">
							<input type="email" name="email" value="{{ old('email') }}">
		          <i class="at icon"></i>
		        </div>
					</div>
					<div class="ui required field">
						<label for="email">Confirm E-Mail Address</label>
						<div class="ui icon input">
							<input type="email" name="email_confirmation" value="{{ old('email') }}">
		          <i class="at icon"></i>
		        </div>
					</div>

					<div class="ui required field">
						<label for="password">Password</label>
						<div class="ui icon input">
							<input type="password" name="password">
		          <i class="lock icon"></i>
		        </div>
					</div>
					<div class="required field">
		        <label>Password Confirmation</label>
		        <div class="ui icon input">
		          <input type="password" name="password_confirmation">
		          <i class="lock icon"></i>
		        </div>
		      </div>
				</div>

			</div>

			<div id="submit" class="eight column row">
				<div class="column">
					<div class="ui hidden divider"></div>
					<button type="submit" class="ui fluid orange button">
						Register
					</button>
				</div>
			</div>

		</form>

	</div>
</div>

@endsection