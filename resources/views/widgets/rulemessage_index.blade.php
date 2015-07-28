@if($rulemessages->count() > 0)
  <table class="ui very basic selectable definition table">
    <tbody>
      @foreach ($rulemessages as $rulemessage)
      <tr>
        <td class="collapsing"> {{ $rulemessage->rule }}</td>
        <td>{{ $rulemessage->message }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endif
