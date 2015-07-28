@if($dockets->count() > 0)
  <div class="ui attached segment">
    <div class="index ui fluid small borderless vertical menu">
      @foreach ($dockets as $docket)
        <a class="link item" href="#">
          <div class="content">
            <div class="header">{{ $docket->name }}</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
