@extends('app')

@section('content')
<div class="ui segment">
    {!! Form::open(['url' => 'departments', 'class' => 'ui form']) !!}
      <div class="field">
        {!! Form::label('name') !!}
        {!! Form::text('name', 'Domain C') !!}
      </div>
      {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
    {!! Form::close() !!}
</div>
@endsection
