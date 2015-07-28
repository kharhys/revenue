@extends('services')

@if($services->count() > 0)
  @section('content')
      <div class="ui basic segment">
        <h5 class="ui olive dividing header"> {{ $services[0]->department->name }} </h5>
        <div class="ui attached segment">
          <div class="index ui fluid small borderless vertical menu">
            @foreach ($services as $service)
              <a class="link item" href="{{ route('service.show', $service->id) }}">
                <div class="content">
                  <div class="header">{{ $service->name }} </div>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </div>
  @endsection
@endif

@section('leftsidebar')
  <div class="ui fluid vertical pointing menu">
    <div class="item">
      <div class="menu">
        @foreach($departments as $department)
          <a href="{{ route('service.index', [ ('department='.$department->id) ])}}" class="item">
            {{ $department->name }}
          </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
