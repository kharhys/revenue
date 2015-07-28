@extends('dashboard')

@section('content')
<div class="ui segment">
    <h5 class="ui olive dividing header"> <i class="ui settings icon"></i> Account Settings </h5>
    <div class="ui basic segment">
      {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT', 'class' => 'ui form']) !!}
        <div class="field">
          {!! Form::label('name', 'User Name:') !!}
          {!! Form::text('name', null, ['readonly'])!!}
        </div>
        <div class="field">
          {!! Form::label('email', 'Email Address:') !!}
          {!! Form::text('email', null)!!}
        </div>
        <div class="field">
          {!! Form::label('password', 'Password:') !!}
          {!! Form::password('password', null)!!}
        </div>
        {!! Form::submit('Update', ['class' => 'ui basic button']) !!}
      {!! Form::close() !!}
    </div>
</div>
@endsection
