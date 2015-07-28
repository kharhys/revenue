@extends('dashboard')

@section('content')
<div class="ui segment">
    {!! Form::open(['url' => 'account', 'class' => 'ui form']) !!}
      {!! Form::hidden('type', 'business') !!}

    <h5 class="ui olive dividing header"> Business Registration Details </h5>
      <div class="required field">
        {!! Form::label('name', 'Business Name') !!}
        {!! Form::text('name', 'Business Name') !!}
      </div>
      <div class="required inline field">
        {!! Form::label('krapin', 'KRA PIN') !!}
        {!! Form::file('krapin') !!}
      </div>
      <div class="inline field">
        {!! Form::label('permit', 'Business Permit') !!}
        {!! Form::file('permit') !!}
      </div>
      <div class="required inline field">
        {!! Form::label('certificate', 'Registration Certificate') !!}
        {!! Form::file('certificate') !!}
      </div>

      <h5 class="ui olive dividing header"> Business Activity Details </h5>
      @widget('selectDepartment')
      @widget('selectService')

      <h5 class="ui olive dividing header"> Business Contact Details </h5>
      <div class="required field">
        {!! Form::label('phone', 'Phone Number') !!}
        {!! Form::text('phone', 'Business Phone Number') !!}
      </div>
      <div class="required field">
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::text('email', 'Business Email Address') !!}
      </div>
      <div class="required field">
        {!! Form::label('website', 'Website Address') !!}
        {!! Form::text('website', 'Business Website Address') !!}
      </div>
      <div class="required field">
        {!! Form::label('address', 'Postal Address') !!}
        {!! Form::text('address', 'Business Postal Address') !!}
      </div>

      @widget('selectCode')

      <h5 class="ui olive dividing header"> Business Contact Details </h5>
      @widget('selectLocation')

      {!! Form::submit('Save', ['class' => 'ui basic fluid button']) !!}
    {!! Form::close() !!}
</div>
@endsection
