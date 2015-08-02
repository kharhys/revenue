<html>
	<head>
		<meta charset="utf-8" >
		<link href="{{asset('css/semantic.css')}}" rel='stylesheet' type='text/css'>
		<link href='//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.1/components/icon.css' rel='stylesheet' type='text/css'>

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"  type="text/javascript"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.1/semantic.min.js"  type="text/javascript"></script>

		<link href="{{asset('css/app.css')}}" rel="stylesheet">
	</head>

	<body>

		<header id="header" class="row">
			<h3 id="heading" class="ui center aligned header">
				<img id="logo-img" src="{{asset('images/logo.png')}}" class="ui tiny image">
				<div class="content">
					THE COUNTY GOVERNMENT OF UASIN GISHU SELF HELP PORTAL
					<div class="sub header">
						<a target='_blank' href="http://uasingishu.go.ke/">
							website
							<i class="external icon"></i>
						</a>
					</div>
				</div>
			</h3>
		</header>

	  <div id="window">
			@if (count($errors) > 0)
			<div class="ui red segment">
				<strong>Whoops!</strong> There were some problems with your input.
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
			<form class="ui form attached very padded segment two column divided grid" method="POST" action="/auth/register">
				<div class="equal height row">
					<div class="column">

						<h4 class="ui horizontal header divider"> Personal Information </h4>

						<div class="ui basic segment">
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
				        <input type="number" name="mobile" placeholder="Mobile Phone Number" value="{{ Input::old('mobile') }}">
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

						<div class="ui basic segment">
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

	  <footer class="app-footer">
			<script type="text/javascript">
				$(document).ready(function(){
					$('.ui.dropdown').dropdown();
				  $('.ui.accordion').accordion();
					$('.menu .item').tab();
				});
			</script>

			@yield('scripts')

			<footer class="row">
        <div class="sixteen wide column">
          <div class="ui olive segment">
            <p>&nbsp</p>
            <footer id="footer">
              <div class="ui three column grid">
                <div class="column">
                  <div class="ui horizontal segment">
                    <div class="ui divided list">
                      <div class="item">
                        <i class="orange conversation icon"></i>
                        <div class="content">
                          <a class="header">Email</a>
                          <div class="description"> info@uasingishu.go.ke</div>
                        </div>
                      </div>
                      <div class="item">
                        <i class="orange mail icon"></i>
                        <div class="content">
                          <a class="header">Postal Address</a>
                          <div class="description">P.O Box 40 - 30100, ELDORET</div>
                        </div>
                      </div>
                      <div class="item">
                        <i class="orange phone square icon"></i>
                        <div class="content">
                          <a class="header">Phone Number</a>
                          <div class="description">053-2016000 || 020-32603</div>
                        </div>
                      </div>
                      <div class="item">
                        <i class="orange fax icon"></i>
                        <div class="content">
                          <a class="header">Fax</a>
                          <div class="description">+254-053-2062884</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="ui horizontal segment">
                    <div class="ui relaxed divided list">
                      <div class="item">
                        <div class="content">
                          <a class="header">About</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="circular orange angle double right icon"></i>
                        <div class="content">
                          <a class="header">County Mission</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="circular orange angle double right icon"></i>
                        <div class="content">
                          <a class="header">County Vision</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="circular orange angle double right icon"></i>
                        <div class="content">
                          <a class="header">Master Plan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="ui horizontal segment">
                    <div class="ui relaxed divided list">
                      <div class="item">
                        <div class="content">
                          <a class="header">Social Media</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="circular inverted blue twitter icon"></i>
                        <div class="content">
                          <a class="header">Twitter</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="circular facebook icon" style="background: #3b5998; color: #fff;"></i>
                        <div class="content">
                          <a class="header">Facebook</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="circular inverted red google plus icon"></i>
                        <div class="content">
                          <a class="header">Google Plus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </footer>
            <p>&nbsp</p>
          </div>
        </div>
      </footer>
	</footer>

	</body>

</html>
