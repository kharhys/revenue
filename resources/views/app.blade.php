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

		<div id="header">@include('header')</div>

		<div id="window">
			@if ((session()->has('message')))
			<div class="ui green segment">
				<h5 class="ui subheader"> <i class="ui info circle icon"></i> {{ session('message') }} </h5>
			</div>
			@endif
			<div class="ui attached segment two column divided grid">
		    <div class="equal height row">

	        <div class="four wide column">
						@yield('rightsidebar')
	        </div>

	        <div class="twelve wide column">
						@yield('content')
	        </div>

		    </div>
			</div>
		</div>

	  <footer class="app-footer">
			<script type="text/javascript">
				filterLocation = function(id){
					if(id != 0) {
						$.get('http://revenue.uasingishu.go.ke/wards', { subcounty: id }, function(data){
							var toAppend = '';
							var targetEl = "#ward_id";
							$.each(data,function(id, ward){
								toAppend += '<option value="' + ward.id + '" >'+ ward.name +'</option>';
							});
							$(targetEl).html(toAppend);
							$(targetEl).parent().dropdown('set text', 'Select Ward');
						});
					}
				}
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
                  <div class="ui basic horizontal segment">
                    <div class="ui borderless list">
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
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="ui basic horizontal segment">
                    <div class="ui borderless list">
                      <div class="item">
                        <i class="orange bullseye icon"></i>
                        <div class="content">
                          <a class="header">County Mission</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="orange bullseye icon"></i>
                        <div class="content">
                          <a class="header">County Vision</a>
                        </div>
                      </div>
                      <div class="item">
                        <i class="orange bullseye icon"></i>
                        <div class="content">
                          <a class="header">Master Plan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="ui basic horizontal segment">
                    <div class="ui borderless list">
                      <div class="item">
                        <i class="small circular inverted blue twitter icon"></i>
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
