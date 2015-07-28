<div class="ui segment">
  <h4 class="ui dividing header"> Services </h4>

  <div class="ui fluid vertical accordion menu">
    <div class="item">
      <a class="title">
        <i class="dropdown icon"></i>
        Add Service
      </a>
      <div class="content">
        <div class="ui divider"></div>
        {!! Form::open(['url' => 'service', 'class' => 'ui form']) !!}
          {!! Form::hidden('department_id', $department->id) !!}
          {!! Form::hidden('domain_id', $department->domain->id ) !!}
          <div class="field">
            {!! Form::label('name') !!}
            {!! Form::text('name') !!}
          </div>
          <div class="field">
            {!! Form::label('synopsis') !!}
            {!! Form::textarea('synopsis', null, ['rows' => '2']) !!}
          </div>
          {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>


  @widget('serviceIndex', ['department' => $department->id ])

</div>

@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
