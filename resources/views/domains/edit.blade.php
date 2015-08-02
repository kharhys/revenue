@extends('config')

@section('content')
  <div class="ui basic segment">
    <h5 class="ui olive dividing header"> <i class="ui settings icon"> </i> Set Up Domain </h5>

    <div class="ui top attached tabular menu">
      <a class="item active" data-tab="first">Domain Details</a>
      <a class="item" data-tab="second">Domain Form</a>
      <a class="item" data-tab="third">Domain Departments</a>
    </div>

    <div class="ui bottom attached tab segment active" data-tab="first">
      <div class="ui basic segment">
          {!! Form::model($domain, ['route' => ['domain.update', $domain->id], 'method' => 'PUT', 'class' => 'ui form']) !!}
            <div class="field">
              {!! Form::label('name') !!}
              {!! Form::text('name', null) !!}
            </div>
            @widget('selectDocket')
            {!! Form::submit('Update', ['class' => 'ui basic button']) !!}
          {!! Form::close() !!}
      </div>
    </div>
    <div class="ui bottom attached tab segment" data-tab="second">
       @widget('domainForm', ['domain' => $domain ])
    </div>
    <div class="ui bottom attached tab segment" data-tab="third">
      @widget('departmentCreate', [ 'domain' => $domain ])
    </div>

  </div>
@endsection
