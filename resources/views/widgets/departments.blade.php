<div class="ui fluid vertical pointing menu">
  <div class="item">
    <div class="menu">
      @foreach($departments as $department)
        <a href="{{ route('service.index', [ ('department='.$department->id) ])}}" class="item">
          {{ $department->name }}
        </a>
      @endforeach
    </div>
  </div>
</div>
