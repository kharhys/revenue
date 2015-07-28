{!! Form::open(['url' => 'field', 'class' => 'ui form']) !!}
  {!! Form::hidden('form_id', $section->form->id) !!}
  {!! Form::hidden('section_id', $section->id) !!}
  <div class="field">
    {!! Form::label('name', 'Field Name') !!}
    {!! Form::text('name') !!}
  </div>
  <div class="field">
    {!! Form::label('ruleset', 'Validation Rules') !!}
    {!! Form::text('ruleset') !!}
  </div>
  <div class="field">
    {!! Form::label('type', 'Field Type') !!}
    {!! Form::text('type') !!}
  </div>
  <div class="field">
    {!! Form::label('repo', 'DB Table') !!}
    {!! Form::text('repo') !!}
  </div>
  <div class="field">
    {!! Form::label('repokey', 'Table Column') !!}
    {!! Form::text('repokey') !!}
  </div>
  {!! Form::submit('Save', ['class' => 'ui basic button']) !!}
{!! Form::close() !!}
