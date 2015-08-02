@extends('app')

@section('rightsidebar')
  @widget('dockets')
@endsection

@section('leftsidebar')
  @widget('departments')
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
