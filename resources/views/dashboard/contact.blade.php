<div id="contact-partial">
  <div class="ui secondary pointing menu">

    <a class="item">   Services   </a>
    <a class="item" id="dashboard-anchor" href="{{url('dashboard')}}">  Dashboard   </a>
    @if (Authority::can('manage', 'App\Workflow'))
    <a class="item" id="workspace-anchor" href="{{url('dashboard/workspace')}}">  Workspace   </a>
    @endif

    <div class="right menu">
      <span class="item"> +254 712 677 809 </span>
      <span class="item"> info@siaya.go.ke </span>
		  <span class="item"> <a href="https://twitter.com/countysiaya"> Twitter </a> </span>
    </div>

  </div>
</div>
