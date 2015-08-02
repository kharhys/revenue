@extends('app')

@section('rightsidebar')
  @include('dashboard.sidebar')
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
