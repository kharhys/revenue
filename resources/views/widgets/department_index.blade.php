@if($departments->count() > 0)
  <div class="ui basic segment">
    <div class="index ui fluid small borderless vertical menu">
      @foreach ($departments as $department)
        <a class="link item" href="{{ route('department.edit', $department->id) }}">
          <div class="content">
            <div class="header">{{ $department->name }} </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
