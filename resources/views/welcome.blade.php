@extends('portal')

@section('contact')
  @widget('contact')
@endsection

@section('content')
  <div id="window">
    @widget('carousel')
    @widget('overview')
  </div>
@endsection
