@extends('app')



@section('rightsidebar')
  @widget('dockets')
@endsection

@section('leftsidebar')
  @widget('sidemenu')
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
