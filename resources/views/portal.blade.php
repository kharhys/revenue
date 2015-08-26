<html>
	<head>
		<meta charset="utf-8" >
		<title> Siaya County Portal </title>
		<link href="{{asset('css/semantic.css')}}" rel='stylesheet' type='text/css'>
		<link href='//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.1/components/icon.css' rel='stylesheet' >
		<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.min.css" rel="stylesheet" >
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"  type="text/javascript"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.1/semantic.min.js"  type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.pkgd.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
    <script src="{{asset('scripts/jquery.mixitup.min.js')}}" type="text/javascript"></script>
	</head>

	<body>

	  	<header id="header" class="row">
  			@widget('header')
  			@yield('contact')
	  	</header>

      @yield('content')


	  	<div>
  			<script type="text/javascript">
  				$(document).ready(function(){
            $('.ui.dropdown').dropdown();
            $('#dashboard-menu .item, #tasks-menu .item').tab();
  					$('#mix-wrapper').mixItUp({
              load: {
                sort: 'order:asc'
              },
              animation: {
                duration: 500
              },
              selectors: {
                target: '.mix-target',
                filter: '.filter-btn',
                sort: '.sort-btn'
              },
              callbacks: {
                onMixEnd: function(state){
                  console.log(state)
                }
              }
            });
  				});
					$('.menu').on('click', '.item', function() {
						if(!$(this).hasClass('dropdown')) {
							$(this)
								.addClass('active')
								.siblings('.item')
									.removeClass('active');
						}
					});
  			</script>
  			@yield('scripts')
	  	</div>

	  	<footer id="footer-partial" >
            <div class="ui three column grid">
                <div class="column">
                  <div class="ui basic horizontal segment">
                    <div class="ui list">
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
                  <div class="ui basic horizontal segment">
                    <div class="ui relaxed list">
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
                  <div class="ui basic horizontal segment">
                    <div class="ui relaxed list">
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

	</body>

</html>
