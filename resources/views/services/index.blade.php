@extends('services')

@section('content')
  <div class="ui basic segment">
    @if ($departments)
      @foreach($departments as $department)
        @if ($department->services->count() > 0)
        <h5 class="ui olive dividing header"> {{ $department->name }} </h5>
        <div class="ui attached segment">
          <div class="index ui fluid small borderless vertical menu">
            @foreach ($department->services as $service)
              <a class="link item" href="{{ route('service.show', $service->id) }}">
                <div class="content">
                  <div class="header">{{ $service->name }} </div>
                </div>
              </a>
            @endforeach
          </div>
        </div>
        @endif
      @endforeach
    @elseif ($department)
      <h5 class="ui olive dividing header"> {{ $department->name }} </h5>
      <div class="ui attached segment">
        <div class="index ui fluid small borderless vertical menu">
          @foreach ($department->services as $service)
            <a class="link item" href="{{ route('service.show', $service->id) }}">
              <div class="content">
                <div class="header">{{ $service->name }} </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    @endif
  </div>
@endsection

@section('leftsidebar')
  @widget('departments')
@endsection
