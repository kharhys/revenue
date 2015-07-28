@extends('config')

@section('content')
  <div class="ui basic segment">
    <h5 class="ui olive dividing header"> <i class="ui settings icon"></i> Service Domains </h5>
    <div class="ui segment">
        <h5 class="ui dividing header">  Add Domain </h5>
        {!! Form::open(['url' => 'domain', 'class' => 'ui form']) !!}
          <div class="field">
            {!! Form::label('name', 'Domain Name') !!}
            {!! Form::text('name', null) !!}
          </div>
          @widget('selectDocket')
          {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
        {!! Form::close() !!}
    </div>
    @widget('domainIndex')
  </div>
@endsection
