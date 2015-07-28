{!! Form::open(['url' => 'sections', 'class' => 'ui form']) !!}
  <div class="field">
    {!! Form::label('name') !!}
    {!! Form::text('name', 'Section Name') !!}
  </div>
  {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
{!! Form::close() !!}
