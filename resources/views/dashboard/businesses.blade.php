@extends('dashboard')

@section('content')
<div class="ui basic segment">
  <div id="bottom" class="ui basic clearing segment">
    <h5 class="ui right floated header">
      <a href="{{ route('account.create') }}" class="ui olive button"> Register Business </a>
    </h5>
    <h5 class="ui left floated header">
      <div class="ui basic index button"> {{$businesses->count()}} Business Account(s)  </div>
    </h5>
  </div>

  @if ($businesses->count() > 0)
  <div class="index ui fluid small borderless vertical menu">
    @foreach ($businesses as $business)
      <a class="link item" href="{{ route('account.edit', $business->id) }}">
        <div class="content">
          <div class="header">{{ $business->name }} </div>
        </div>
      </a>
    @endforeach
  </div>
  @else
  <div class="ui basic segment">
    <p>
      You currently haven't registered any business.  </br>
      Click the link above to add a business account. </br>
      Note that the application will be reviewed. Therefore be truthful with the information you provide.
    </p>
    <p>
      Once your application is approved, your business will be issued a permit, accessible from the dashboard menu to the left. </br>
      You may then use the business account to apply for any valid service from this portal.
    </p>
  </div>
  @endif


</div>
@endsection
