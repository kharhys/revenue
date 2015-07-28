<h5 class="ui dividing header"> {{$form->sections->count()}} Section(s) </h5>
<div class="ui fluid vertical accordion menu">
  <div class="item">
    <a class="title">
      <i class="dropdown icon"></i>
      Add Section
    </a>
    <div class="content">
      <div class="ui divider"></div>
      {!! Form::open(['url' => 'section', 'class' => 'ui form']) !!}
        {!! Form::hidden('form_id', $form->id) !!}
        <div class="field">
          {!! Form::label('name') !!}
          {!! Form::text('name') !!}
        </div>
        {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
      {!! Form::close() !!}
    </div>
  </div>
</div>

@widget('sectionIndex', ['form_id' => $form->id])
