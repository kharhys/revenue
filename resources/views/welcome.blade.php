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
			@widget('header')
		</header>
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
			<div class="ui attached segment two column divided grid">
		    <div class="equal height row">
		        <div class="six wide column">

							<div class="ui basic segment">
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

									<button type="submit" class="fluid ui orange submit button"> Sign In</button>

							    <div class="ui horizontal divider">
							      Can't Login?
							    </div>

							    <div class="ui two column middle aligned relaxed fitted stackable grid">
							      <div class="column">
							        <a class="fluid ui green labeled button" href="{{url('auth/register')}}">
							          Register
							        </a>
							      </div>

							     <div class="center aligned column">
							       <a href="/password/email" class="fluid ui labeled button">
							         Reset Password
							       </a>
							     </div>
							   </div>

								</form>

							</div>
		        </div>

		        <div id="feature" class="ten wide column" style=" overflow-y: auto;">
							<div  class="ui basic segment" style=" overflow-y: auto;">
								<h3 class="ui dividing  header"> <strong> What is County Self Help Portal? </strong> </h3>
						    <p>
						      The County Government of Uasin Gishu is cinstantly improving its service delivery to citizens and
						      the business community. E-services portal is your one-stop-shop to make dealing with the county easy.
						      Services are available 24 7 and through out  the week. You do not need to visit the county for your services.
						    </p>
						    <p>
						      Aply the service anywahere from the cofort of your home, office or cybercafe
						      To answer your questions on a specific topic, click and read more.
						    </p>

								<div class="ui basic segment">
					        <p>The following are some of the services availbale on this portal to logged in users.</p>
						    </div>


								<div class="ui basic segment">
									<div class="ui list">
										<a class="item">
											<i class="help icon"></i>
											<div class="content">
												<div class="header">How do I make payment?</div>
												<div class="description">
													The county has an MPESA paybill number 646464 that
													customers will use to make payments online. Details are found in the invoice
													once have filled the applications and approved.
													Payments can also be made to the KCB revenue account. Details are contained in
													the invoice
												</div>
											</div>
										</a>
										<a class="item">
											<i class="help icon"></i>
											<div class="content">
												<div class="header">How do I get ntifications?</div>
												<div class="description">
													The portal isself service meaning that you get SMS notificatins and emails for your applications.
													Whether they are rejected, approved or requested to rovide more documentation.
												</div>
											</div>
										</a>
										<a class="item">
											<i class="help icon"></i>
											<div class="content">
												<div class="header">How do I get my aplications?</div>
												<div class="description">
													All documents will be send to your email. Once your applications have been approved,
													you will get an invoice via email and once payment is made online(MPESA or bank)
													your permit or SBP will begenerated and sent to your mail for you to print.
												</div>
											</div>
										</a>
										<a class="item">
											<i class="help icon"></i>
											<div class="content">
												<div class="header">If I have no Computer what do I do?</div>
												<div class="description">
													The service will be available from all the cybers across the county. Cyber cafe operators have been trained
													to work with wananchi on the on-line service provision.
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="ui basic segment">
									Contact Us:
									Business Permits 072234567000
									Land and property rates 072234567000
									Health 072234567000
									Halls/Stadium 072234567000
								</div>

							</div>

		        </div>

		    </div>
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
