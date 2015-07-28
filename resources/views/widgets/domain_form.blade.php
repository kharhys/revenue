<div class="ui basic segment">
  <h5 class="ui subheader">
    @if($domain->form)
       Current Form :<a href="{{route('form.edit', $domain->form->id)}}"> {{$domain->form->name}} </a>
    @else
      Form
    @endif
  </h5>

  <div class="ui fluid vertical accordion menu">
    <div class="item">
      <a class="title">
        <i class="dropdown icon"></i>
        New Form
      </a>
      <div class="content">
        {!! Form::model($domain->form, ['url' => 'form', 'class' => 'ui form']) !!}
          <div class="field">
            {!! Form::label('name') !!}
            {!! Form::text('name', 'Form Name') !!}
          </div>
          {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  @if (App\DomainForm::all()->count() > 0)
    <div class="ui divider"> </div>
    {!! Form::open(['route' => ['domain.update', $domain->id ], 'method' => 'PUT', 'class' => 'ui form']) !!}
      @widget('formSelect')
      {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
    {!! Form::close() !!}
  @endif

</div>
