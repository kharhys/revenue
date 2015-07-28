@extends('dashboard')

@section('content')
<div class="ui attached segment">
  <div id="bottom" class="ui basic clearing segment">
    <h5 class="ui right floated header">
      <a href="{{ route('account.create') }}" class="ui olive button"> Register Business </a>
    </h5>
    <h5 class="ui left floated header">
      <div class="ui basic index button"> {{$businesses->count()}} Business Account(s)  </div>
    </h5>
  </div>

  <div class="index ui fluid small borderless vertical menu">
    @foreach ($businesses as $business)
      <a class="link item" href="{{ route('account.edit', $business->id) }}">
        <div class="content">
          <div class="header">{{ $business->name }} </div>
        </div>
      </a>
    @endforeach
  </div>
</div>
@endsection
