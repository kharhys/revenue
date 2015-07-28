@if($services->count() > 0)
  <div class="ui attached segment">
    <div class="index ui fluid small borderless vertical menu">
      @foreach ($services as $service)
        <a class="link item" href="{{ route('service.edit', $service->id)}}">
          <div class="content">
            <div class="header">{{ $service->name }}</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
