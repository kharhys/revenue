@if($fields->count() > 0)
  <div class="ui basic segment">
    <h5 class="ui dividing header"> {{$fields->count()}} Field(s) <h5/>
    <div class="ui basic segment">
      <div class="ui fluid  accordion">
        @foreach ($fields as $field)
          <div class="title">
            <i class="dropdown icon"></i>
            {{ $field->name }}
          </div>
          <div class="content">
            <div class="ui padded segment">
              <table class="ui very basic borderless selectable table">
                <tbody>
                  <tr>
                    <td>  Field Type </td>
                    <td>{{ $field->type }}</td>
                  </tr>
                  <tr>
                    <td>  Validation Ruleset </td>
                    <td>{{ $field->ruleset }}</td>
                  </tr>
                </tbody>
              </table>

              <div class="ui basic segment">
                <h5 class="ui dividing header"> Field Validation Messages </h5>
                <div class="accordion">
                  <div class="title">
                    <i class="plus icon"></i>
                    Add Validation Message
                  </div>
                  <div class="content">
                    <p>@widget('rulemessageCreate', ['field' => $field->id])</p>
                  </div>
                </div>

                @widget('rulemessageIndex', ['field' => $field->id])
              </div>
            </div>
          </div>
          <div class="ui hidden divider"></div>
        @endforeach
      </div>
    </div>
  </div>
@endif
