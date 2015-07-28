<div class="field">
  {!! Form::label('department_id', 'Business Activity') !!}
  {!! Form::select('department_id', $departments, null, ['class' => 'ui dropdown']) !!}
</div>

@section('scripts')
  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
  </script>
@stop
