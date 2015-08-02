@extends('dashboard')

@section('content')
@include('setupmenu')
<div class="ui segment">
  <h5 class="ui header"> careful </h5>
</div>
@endsection

@section('leftsidebar')
  <div  class="sidebar" id="rightsidebar">
    @include('setupmenu')
  </div>
@endsection
