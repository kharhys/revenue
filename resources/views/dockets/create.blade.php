@extends('config')

@section('content')
  <div class="ui basic segment">
    <h5 class="ui olive dividing header"> <i class="ui settings icon"></i> Service Dockets </h5>
    <div class="ui segment">
        <h5 class="ui dividing header">  Add Docket </h5>
        {!! Form::open(['url' => 'docket', 'class' => 'ui form']) !!}
          <div class="field">
            {!! Form::label('name', 'Docket Name') !!}
            {!! Form::text('name', null) !!}
          </div>
          {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
        {!! Form::close() !!}
    </div>
    @widget('docketIndex')
  </div>
@endsection
