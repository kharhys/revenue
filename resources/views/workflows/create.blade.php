
{!! Form::open(['url' => 'role', 'class' => 'ui form']) !!}
  <div class="field">
    {!! Form::label('name') !!}
    {!! Form::text('name', 'Job Group') !!}
  </div>
  {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
{!! Form::close() !!}
