@extends('config')

@section('content')
  <div class="ui segment">

    <h5 class="ui olive dividing header">  Service Details  </h5>

    {!! Form::model($service, ['route' => ['service.update', $service->id ], 'method' => 'PUT', 'class' => 'ui form']) !!}
      <div class="field">
        {!! Form::label('name') !!}
        {!! Form::text('name', null) !!}
      </div>
      <div class="field">
        {!! Form::label('synopsis') !!}
        {!! Form::textarea('synopsis', null, ['rows' => '2']) !!}
      </div>
      {!! Form::submit('Update', ['class' => 'ui basic button']) !!}
    {!! Form::close() !!}

  </div>
  <div class="ui segment">

    <h5 class="ui olive dividing header"> Service Fees  </h5>

    @widget('feeCreate', ['service' => $service])

  </div>
@endsection
