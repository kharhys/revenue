@extends('dashboard')

@section('content')
<div class="ui attached segment">
  <div id="bottom" class="ui basic clearing segment">
    <h5 class="ui right floated header">
      <a href="{{ route('plot.create') }}" class="ui olive button"> Register plot </a>
    </h5>
    <h5 class="ui left floated header">
      <div class="ui basic index button"> {{$plots->count()}} Registered Plot(s)  </div>
    </h5>
  </div>

  <div class="index ui fluid small borderless vertical menu">
    @foreach ($plots as $plot)
      <a class="link item" href="{{ route('account.edit', $plot->id) }}">
        <div class="content">
          <div class="header">{{ $plot->name }} </div>
        </div>
      </a>
    @endforeach
  </div>
</div>
@endsection
