<div class="ui fluid vertical menu">
  <a href="{{ action('DashboardController@index') }}" class="item"> dashboard </a>
  @foreach ($domains as $domain)
    <a href="{{ route('service.index', [ ('domain='.$domain->id) ])}}" class="item">
      {{$domain->name}}
    </a>
  @endforeach
</div>
