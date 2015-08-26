<div id="header-partial" class="ui attached segment three column grid">
    <div class="equal height row">
        <div class="column">
            <a href="{{ url('/') }}"> 
                <img id="logo-img" src="{{asset('images/logo.png')}}" class="ui middle aligned tiny image">
            </a>
        </div>
        <div class="column">
            <div class="ui middle aligned very basic padded segment">
                <h3 class="ui center aligned header" style="color: #d67c1c;">
                    County Government of Siaya
                    <div class="sub header" style="font-weight: bold; color: #d67c1c;"> 
                        Online Services Portal 
                    </div>
                </h3>                
            </div>
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