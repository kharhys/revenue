@extends('portal')

@section('contact')
  @include('dashboard.contact')
@endsection

@section('content')
<div id="window">
  <div class="ui grid">
    <div class="four wide column">
      <div id="dashboard-menu" class="ui vertical fluid tabular menu">
        @yield('menu')
      </div>
    </div>

    <div class="twelve wide stretched column">
      <div id="dashboard-viewport" class="ui segment">
        @yield('viewport')
      </div>
    </div>
  </div>
</div>
@endsection
