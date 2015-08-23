<div id="header-partial" class="ui attached segment two column grid">
    <div class="equal height row">
        <div class="column">
            <a href="{{ url('/') }}"> 
            	<img id="logo-img" src="{{asset('images/logo.png')}}" class="ui middle aligned tiny image"> 
            	<h3 class="ui header" style="display: inline;">Siaya County</h3>
            </a>
        </div>
        <div id="navigation-partial" class="right aligned column">
            <div class="ui celled horizontal list">
			  <a herf="#" class="item"> Services </a>
			  <a href="#" class="item"> FAQ </a>
			  @widget('sess')
			</div>       
        </div>
    </div>
</div>