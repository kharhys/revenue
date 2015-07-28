@if($domains->count() > 0)
  <div class="ui attached segment">
    <div class="index ui fluid small borderless vertical menu">
      @foreach ($domains as $domain)
        <a class="link item" href="{{ route('domain.edit', $domain->id)}}">
          <div class="content">
            <div class="header">{{ $domain->name }}</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
