@extends('app')

@section('rightsidebar')
  @widget('dockets')
@endsection

@section('content')
<div class="ui attached segment">
  <h5 class="ui header"> careful </h5>
</div>
@endsection

@section('leftsidebar')
  @include('setupmenu')
@endsection
