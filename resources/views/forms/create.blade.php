@extends('config')

@section('content')
  <div class="ui basic segment">
    <h5 class="ui olive dividing header"> <i class="ui settings icon"></i>  Service Domain Forms </h5>
    <div class="ui segment">
      <div class="ui basic segment">
        <div class="ui fluid vertical accordion menu">
          <div class="item">
            <a class="title">
              <i class="dropdown icon"></i>
              New Form
            </a>
            <div class="content">
              {!! Form::open(['url' => 'form', 'class' => 'ui form']) !!}
                <div class="field">
                  {!! Form::label('name') !!}
                  {!! Form::text('name', 'Form Name') !!}
                </div>
                {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        @widget('formIndex')
      </div>

    </div>
  </div>
@endsection
