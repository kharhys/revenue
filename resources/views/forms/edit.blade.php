@extends('config')

@section('content')
  <div class="ui basic segment">
    <h5 class="ui olive dividing header"> <i class="ui settings icon"></i>  Domain Form Details  </h5>

    <div class="ui top attached tabular menu">
      <a class="item active" data-tab="first">Form Details</a>
      <a class="item" data-tab="second">Form Sections</a>
      <a class="item" data-tab="third">Form Fields</a>
    </div>
    <div class="ui bottom attached tab segment active" data-tab="first">
      {!! Form::model($domainForm, ['route' => ['form.update', $domainForm->id ], 'method' => 'PUT', 'class' => 'ui form']) !!}
        <div class="field">
          {!! Form::label('name') !!}
          {!! Form::text('name', null) !!}
        </div>
        @widget('selectDomain')
        {!! Form::submit('Update', ['class' => 'ui basic button']) !!}
      {!! Form::close() !!}
    </div>
    <div class="ui bottom attached tab segment" data-tab="second">
      @widget('sectionCreate', ['form' => $domainForm ])
    </div>
    <div class="ui bottom attached tab segment" data-tab="third">
      @widget('fieldIndex', ['form' => $domainForm ])
    </div>

  </div>
@endsection
