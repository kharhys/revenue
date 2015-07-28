@extends('dashboard')

@section('content')
<div class="ui segment">
    {!! Form::open(['url' => 'account', 'class' => 'ui form']) !!}
      {!! Form::hidden('account_id', $agentaccount) !!}

      <h5 class="ui olive dividing header"> Plot Registration Details </h5>
      <div class="ui basic segment">
        <div class="required field">
          {!! Form::label('plotnumber', 'Plot Number') !!}
          {!! Form::text('plotnumber') !!}
        </div>
        <div class="required field">
          {!! Form::label('area', 'Area in square meters') !!}
          {!! Form::text('area') !!}
        </div>
        <div class="field">
          {!! Form::label('use', 'Land Use') !!}
          {!! Form::text('use') !!}
        </div>
      </div>


      <h5 class="ui olive dividing header"> Plot Location Details </h5>
      <div class="ui basic segment">
        @widget('selectLocation')
      </div>

      {!! Form::submit('Save', ['class' => 'ui basic fluid button']) !!}
    {!! Form::close() !!}
</div>
@endsection
