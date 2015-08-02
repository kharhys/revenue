@extends('dashboard')

@section('content')
<div class="ui basic segment">
  @if ($plots->count() > 0)
  <table class="ui small table">
    <thead>
      <tr>
        <th>Plot Number</th>
        <th>Area in Hectares </th>
        <th>Submission Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($plots as $plot)
      <tr>
        <td>{{$plot->plotnumber}}</td>
        <td>{{$plot->area}}</td>
        <!-- <td><img class="ui tiny image" src="{{$plot->titledeed->url()}}" ></td> -->
        <td>{{$plot->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div class="ui padded orange segment">
    <h5 class="subheader"> You have not applied for any services yet </h5>
  </div>
  @endif
</div>
@endsection
