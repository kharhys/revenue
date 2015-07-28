<div class="ui fluid vertical pointing menu">
  <a href="{{ action('DashboardController@index') }}" class="item"> dashboard </a>
  @foreach ($dockets as $docket)
  <div class="item">
    <b> {{$docket->name}} </b>
    <div class="menu">
      @foreach ($docket->domains as $domain)
        <a href="{{ route('service.index', [ ('domain='.$domain->id) ])}}" class="item">
          {{$domain->name}}
        </a>
      @endforeach
    </div>
  </div>
  @endforeach
</div>
