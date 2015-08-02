@extends('services')

@section('content')
<div class="ui padded segment">
    <h4 class="ui olive dividing header">
      {{$params['service']->department->domain->form->name}}
    </h4>

    {!! Form::open(['route' => ['service.application.store', $params['service']->id ], 'class' => 'ui form']) !!}
      {!! Form::hidden('user_id', $params['user']->id) !!}
      {!! Form::hidden('account_id', $params['account']->id) !!}
      {!! Form::hidden('service_id', $params['service']->id) !!}

      @foreach($params['service']->department->domain->form->sections as $section)
        @if($section->fields->count() > 0)
          <div class="ui basic segment">
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


      {!! Form::submit('Submit Application', ['class' => 'ui basic button']) !!}
    {!! Form::close() !!}
</div>
@endsection
