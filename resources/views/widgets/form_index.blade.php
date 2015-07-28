@if($forms->count() > 0)
  <div class="ui attached segment">
    <div class="index ui fluid small borderless vertical menu">
      @foreach ($forms as $form)
        <a class="link item" href="{{ route('form.edit', $form->id) }}">
          <div class="content">
            <div class="header">{{ $form->name }}</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
