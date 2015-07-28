@extends('app')

@section('rightsidebar')
  @widget('dockets')
@endsection

@section('leftsidebar')
  @include('dashboard.sidebar')
@endsection


@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
