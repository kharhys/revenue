{!! Form::label($field->name) !!}
@if($field->type == 'text')
  {!! Form::text($field->id, old($field->id)) !!}
@elseif($field->type == 'textarea')
  {!! Form::textarea($field->id, old($field->id), [ 'rows' => 2 ]) !!}
@elseif($field->type == 'select')
  {!! Form::select($field->id, DB::table($field->repository)->lists($field->key, 'id'), old($field->name) ? old($field->name) : null, ['class' => "ui dropdown"]) !!}
@endif

@section('scripts')
  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
  </script>
@stop
