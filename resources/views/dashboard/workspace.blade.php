@extends('dashboard.layout')

@section('menu')
  <a class="active item" data-tab="first"> Alerts  </a>
  <a class="item" data-tab="second">  System Administration </a>
  <a class="item" data-tab="third">  WorkFlow Administration </a>
  <a class="item" data-tab="fourth">  Applications Supervision </a>
  <a class="item" data-tab="fifth">  Applications Inspection </a>
  <a class="item" data-tab="sixth">  Applications Dispensation </a>
  <a class="item" data-tab="seventh">  Teams </a>
  <a class="item" data-tab="eighth">  Profile </a>
@endsection

@section('viewport')
  <div class="ui basic active tab segment" data-tab="first">
    Alerts
  </div>
  <div class="ui basic tab segment" data-tab="second">
    @include('workspace.tasks')
  </div>
  <div class="ui basic tab segment" data-tab="third">
    Teams: invites | current | switch | leave
  </div>
  <div class="ui basic tab segment" data-tab="fourth">
    Profile: employee since | job position | responsibilities
  </div>
  <div class="ui basic tab segment" data-tab="fifth">
    Profile: employee since | job position | responsibilities
  </div>
  <div class="ui basic tab segment" data-tab="sixth">
    Profile: employee since | job position | responsibilities
  </div>
  <div class="ui basic tab segment" data-tab="seventh">
    Profile: employee since | job position | responsibilities
  </div>
  <div class="ui basic tab segment" data-tab="eighth">
    Profile: employee since | job position | responsibilities
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#workspace-anchor').addClass('active');
    });
  </script>
@endsection
