@extends('dashboard')

@section('content')
<div class="ui basic segment">
    {!! Form::model($account, ['route' => ['account.update', $account->id], 'method' => 'PUT', 'class' => 'ui form', 'enctype' => 'multipart/form-data']) !!}
      {!! Form::hidden('type', 'business') !!}

    <h5 class="ui teal dividing header"> Business Registration Details </h5>
    <div class="ui basic segment">
      <div class="required field">
        {!! Form::label('name') !!}
        {!! Form::text('name') !!}
      </div>
      <div class="two fields">
        <div class="required field">
          {!! Form::label('krapin', 'KRA PIN') !!}
          {!! Form::file('krapin') !!}
        </div>
        <div class="required field">
          {!! Form::label('certificate', 'Registration Certificate') !!}
          {!! Form::file('certificate') !!}
        </div>
      </div>
      <div class="ui accordion field">
        <div class="title">
          <i class="icon dropdown"></i>
          Already have a permit?
        </div>
        <div class="content field">
          {!! Form::label('permit', 'Business Permit') !!}
          {!! Form::file('permit') !!}
        </div>
      </div>
    </div>

    <h5 class="ui teal dividing header"> Business Activity Details </h5>
    <div class="ui basic segment">
      @widget('selectDepartment')
      @widget('selectService')
    </div>

    <h5 class="ui teal dividing header"> Business Contact Details </h5>
    <div class="ui basic segment">
      <div class="required field">
        {!! Form::label('phone', 'Phone Number') !!}
        {!! Form::text('phone') !!}
      </div>
      <div class="required field">
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::text('email') !!}
      </div>
      <div class="field">
        {!! Form::label('website', 'Website Address') !!}
        {!! Form::text('website') !!}
      </div>
      <div class="required field">
        {!! Form::label('address', 'Postal Address') !!}
        {!! Form::text('address') !!}
      </div>
      @widget('selectCode')
    </div>


    <h5 class="ui teal dividing header"> Business Contact Details </h5>
    <div class="ui basic segment">
      @widget('selectLocation')
    </div>

      {!! Form::submit('Update', ['class' => 'ui basic fluid button']) !!}
    {!! Form::close() !!}
</div>
@endsection
