@if(Auth::user())
	<div id="sess-partial" class="item"> 
		<div class="ui dropdown">
		  <div class="text"> 
		  	{{Auth::user()->agentAccount->name}} 
		  	<span class="description" style="font-style: italic;">{{Auth::user()->agentAccount->type}}</span>
		  </div>

		  <i class="dropdown icon"></i>

		  <div class="menu">

		    @foreach(Auth::user()->accounts as $account)
		    	@if($account->id != Auth::user()->agentAccount->id)
			    <div class="item">
			      <span class="description" style="font-style: italic;">{{$account->type}}</span>
			      {{$account->name}}
			    </div>
				@endif
		    @endforeach

		    @if(count(Auth::user()->accounts) > 1)
		    <div class="divider"></div>
		    @endif
			
			<a style="color: #d5d5d5;" href="{{url('dashboard')}}" class="center aligned item">		    	
		    	<span style="color: #8C8B8B; font-weight: 100" > <i class="ui home icon"></i>  Account </span> 
		    </a>
			<a style="color: #d5d5d5;" href="{{url('dashboard')}}" class="center aligned item">		    	
		    	<span style="color: #8C8B8B; font-weight: 100" > <i class="ui user icon"></i>  Profile </span> 
		    </a>
		    <a href="{{url('auth/logout')}}" class="item">
		    	<span style="color: #8C8B8B; font-weight: 100" > <i class="ui sign out icon"></i> Sign Out</span> 
		    </a>		    

		  </div>
		</div>
	</div>
@else
	<a href="{{ url('auth/login') }}" class="item" > Login </a>
	<a href="{{ url('auth/register') }}" class="ui inverted orange button">
		Register
	</a>
@endif