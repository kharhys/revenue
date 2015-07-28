<div class="ui basic segment">
  <h4 class="ui dividing header"> {{$domain->departments->count()}} Departments in this Domain </h4>

  <div class="ui fluid vertical accordion menu">
    <div class="item">
      <a class="title">
        <i class="dropdown icon"></i>
        Add Department
      </a>
      <div class="content">
        <div class="ui divider"></div>
        {!! Form::open(['url' => 'department', 'class' => 'ui form']) !!}
          {!! Form::hidden('domain_id', $domain) !!}
          <div class="field">
            {!! Form::label('name') !!}
            {!! Form::text('name', null) !!}
          </div>
          {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>


  @widget('departmentIndex', [ 'domain' => $domain->id ])

</div>

@section('scripts')
  <script type="text/javascript">
    $('.ui.accordion').accordion();
  </script>
@stop
