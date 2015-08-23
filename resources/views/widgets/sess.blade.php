@if(Auth::user())
	<div class="item"> ur in </div>
@else
	<a href="#" class="item"> Login </a>
	<a href="#" class="item"> Register </a>
@endif