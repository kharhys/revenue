{!! Form::open(['url' => 'rulemessage', 'class' => 'ui form']) !!}
  {!! Form::hidden('field_id', $field) !!}
  <div class="field">
    {!! Form::label('rule') !!}
    {!! Form::text('rule') !!}
  </div>
  <div class="field">
    {!! Form::label('message') !!}
    {!! Form::text('message') !!}
  </div>
  {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
{!! Form::close() !!}
