<div class="ui fluid vertical secondary pointing menu">
  <a href="{{ action('DashboardController@index') }}" class="item"> dashboard </a>
  <div class="item">
    <b> Hire </b>
    <div class="menu">
      @foreach ($domains as $domain)
        <a href="{{route('domain.edit', $domain->id)}}" class="item">
          {{$domain->name}}
        </a>
      @endforeach
    </div>
  </div>
</div>
