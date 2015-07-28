@extends('dashboard')

@section('content')
  <div class="ui basic segment">
    <h5 class="ui olive dividing header"> {{ $service->department->name }} </h5>

    <div class="ui attached segment">
      <div id="bottom" class="ui basic clearing segment">
        <h5 class="ui right floated header">
          <a href="{{ route('account.create') }}" class="ui olive button"> Apply </a>
        </h5>
        <h5 class="ui left floated header">
          <div class="ui basic index button">  {{$service->name}}  </div>
        </h5>
      </div>

      <div class="ui padded basic segment">
        {{$service->synopsis}}
      </div>

      <div class="ui padded basic segment">
        <table class="ui very basic celled table">
          <thead>
            <tr>
              <th>Financial Year</th>
              <th>Municipality</th>
              <th>Subcounties</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                2015/2106
              </td>
              <td>
                22
              </td>
              <td>
                22
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
@endsection
