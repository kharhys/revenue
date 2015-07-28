@extends('app')

@section('content')
<div class="ui basic segment">
    <h3 class="ui dividing header">
      {{$params['service']->name}} Application Form
    </h3>

    {!! Form::open(['route' => ['service.application.store', $params['service']->id ], 'class' => 'ui form']) !!}
      {!! Form::hidden('user_id', $params['user']->id) !!}
      {!! Form::hidden('account_id', $params['account']->id) !!}
      {!! Form::hidden('service_id', $params['service']->id) !!}

      @foreach($params['service']->sections as $section)
        @if($section->fields->count() > 0)
          <div class="ui attached segment">
            <h5 class="ui dividing header">{{$section->name}}</h5>
            @foreach($section->fields as $field)
              <div class="field">
                @widget('formField', ['field' => $field])
              </div>
            @endforeach
          </div>
          <div class="ui hidden divider"></div>
        @endif
      @endforeach


      {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
    {!! Form::close() !!}
</div>
@endsection
