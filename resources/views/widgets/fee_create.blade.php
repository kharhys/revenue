{!! Form::open(['url' => 'fee', 'class' => 'ui form']) !!}
  {!! Form::hidden('service_id', $service->id) !!}
  <div class="field">
    {!! Form::label('municipality') !!}
    {!! Form::number('municipality') !!}
  </div>
  <div class="field">
    {!! Form::label('subcounty') !!}
    {!! Form::number('subcounty') !!}
  </div>
  {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
{!! Form::close() !!}
