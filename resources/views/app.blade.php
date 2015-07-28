<html>
	<head>
		<link href='/css/semantic.css' rel='stylesheet' type='text/css'>
		<link href='//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.1/components/icon.css' rel='stylesheet' type='text/css'>

		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"  type="text/javascript"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.1/semantic.min.js"  type="text/javascript"></script>

		<link href="/css/app.css" rel="stylesheet">
	</head>

	<body>

		<div id="header">@include('header')</div>

	  <div id="window">
			<div class="sidebar" id="leftsidebar"> @yield('rightsidebar') </div>
	    <div id="viewport">
				@if ((session()->has('message')))
					<div class="ui yellow segment">
						<p> <i class="ui info icon"></i> {{ session('message') }} </p>
					</div>
				@endif
				@yield('content')
			</div>
	    <div  class="sidebar" id="rightsidebar"> @yield('leftsidebar') </div>
	  </div>
	  <footer class="app-footer">
			<script type="text/javascript">
				filterLocation = function(id){
					if(id != 0) {
					 console.log(id);
					}
					/* $.post('http://revenue.uasingishu.go.ke/v1/api/ui/filter',{FilterColumnID: target, SelectedID: id },function(data){
						var targetEl = "[name='ColumnID[" + target + "]']";
						var toAppend = '';
						if (data.code == 200){
							$.each(data.options,function(id,name){
								toAppend += '<option value="'+id+'" selected>'+name+'</option>';
							});
						}
						$(targetEl).html(toAppend);
						$(targetEl).parent().dropdown('set text', 'select');
					}); */
				}
				$(document).ready(function(){
					$('.ui.dropdown').dropdown();
				  $('.ui.accordion').accordion();
					$('.menu .item').tab();
				});
			</script>

		@yield('scripts')
	</footer>

	</body>

</html>
