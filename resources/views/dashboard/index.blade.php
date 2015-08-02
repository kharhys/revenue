@extends('dashboard')

@section('content')
<div class="ui basic segment">
  @if (count($applications) > 0)
  <table class="ui small table">
    <thead>
      <tr>
        <th>Service Name</th>
        <th>Submissionn Date</th>
        <th>Service Status </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($applications as $application)
      <tr>
        <td>{{$application->ServiceName}}</td>
        <td>{{$application->SubmissionDate}}</td>
        <td>{{$application->ServiceStatusName}}</td>
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
