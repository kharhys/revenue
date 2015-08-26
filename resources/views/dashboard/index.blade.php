@extends('dashboard.layout')

@section('menu')
  <a class="active item" data-tab="first"> Alerts  </a>
  <a class="item" data-tab="second">  Applications </a>
  <a class="item" data-tab="third">  Profile </a>
  <a class="item" data-tab="four">  Accounts </a>
@endsection

@section('viewport')
  This is the Dashboard for the logged in user
  <div class="ui basic active tab segment" data-tab="first">
    Alerts
  </div>
  <div class="ui basic tab segment" data-tab="second">
    Applications
  </div>
  <div class="ui basic tab segment" data-tab="third">
    Profile
  </div>
  <div class="ui basic tab segment" data-tab="four">
    Accounts
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#dashboard-anchor').addClass('active');
    });
  </script>
@endsection
