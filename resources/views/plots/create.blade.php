@extends('dashboard')

@section('content')
<div class="ui basic segment">
    {!! Form::open(['url' => 'plot', 'class' => 'ui form', 'files' => true ]) !!}
      {!! Form::hidden('account_id', $agentaccount->id) !!}

      <h5 class="ui teal dividing header"> Application Details </h5>
      <div class="ui basic segment">
        <div class="required field">
          {!! Form::label('plotnumber', 'LR Number(as it appears on title)') !!}
          {!! Form::text('plotnumber') !!}
        </div>
        <div class="required field">
          {!! Form::label('officialsearch', 'Official Search') !!}
          {!! Form::text('officialsearch') !!}
        </div>
        <div class="required field">
          {!! Form::label('idnumber', 'Owners ID or Passport Number') !!}
          {!! Form::text('idnumber') !!}
        </div>
        <div class="two fields">
          <div class="required field">
            {!! Form::label('krapin', 'Owners KRA PIN') !!}
            {!! Form::file('krapin') !!}
          </div>
          <div class="required field">
            {!! Form::label('passportphoto', 'Owners Passsport Photo') !!}
            {!! Form::file('passportphoto') !!}
          </div>
        </div>
      </div>


      <h5 class="ui teal dividing header"> Registration Details </h5>
      <div class="ui basic segment">
        <div class="required field">
          {!! Form::label('area', 'Area in Hectares') !!}
          {!! Form::text('area') !!}
        </div>
        @widget('selectLocation')
        <div class="required field">
          {!! Form::label('titledeed', 'Land TitleDeed or Allotment Letter') !!}
          {!! Form::file('titledeed') !!}
        </div>
      </div>

      {!! Form::submit('Submit Application', ['class' => 'ui orange fluid button']) !!}
    {!! Form::close() !!}
</div>
@endsection
