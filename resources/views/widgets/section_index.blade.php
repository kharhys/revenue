@if($sections->count() > 0)
  @foreach ($sections as $section)
    <div class="ui basic segment">
        <h5 class="ui dividing header"> {{ $section->name }} : {{$section->fields()->count()}} Field(s) </h5>
        <div class="ui attached fluid vertical accordion menu">
          <div class="item">
            <a class="title">
              <i class="dropdown icon"></i>
              Add Field
            </a>
            <div class="content">
              <div class="ui divider"></div>
              @widget('fieldCreate', ['section' => $section])
            </div>
          </div>
        </div>
        @widget('fieldList', ['form' => $section->form])

    </div>
  @endforeach

@endif
