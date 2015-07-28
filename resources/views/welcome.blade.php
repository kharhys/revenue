@extends('app')

@section('rightsidebar')
  @widget('dockets')
@endsection

@section('content')
  <div class="ui segment">
		default content
	</div>
@endsection

@section('leftsidebar')
	@widget('departments')
@endsection


@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
