@if($fields->count() > 0)
  <div class="ui basic segment">
    <div id="field" class="index ui fluid small borderless vertical menu">
      @foreach ($fields as $field)
        <a class="link item" href="{{ route('field.edit', $field->id)}}">
          <div class="content">
            <div class="header">{{ $field->name }}</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('#field').click(function(e){
      e.preventDefault();
      $.tab('change tab', 'third');
      $("a[data-tab='second']").removeClass('active');
      $("a[data-tab='third']").addClass('active');
    })
  })
</script>

@endsection
