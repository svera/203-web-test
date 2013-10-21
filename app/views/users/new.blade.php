@extends('layouts.base')

@section('body')
<div class="container"> 
  {{ Form::open(['url' => 'registration']) }}
      {{-- Email address field. -------------------}}
      {{ Form::label('email', 'Email address') }}
      {{ Form::email('email', null, ['class' => 'form-control']) }}

      {{-- Password field. ------------------------}}
      {{ Form::label('password', 'Password') }}
      {{ Form::password('password', ['class' => 'form-control']) }}

      {{-- Password confirmation field. -----------}}
      {{ Form::label('password_confirmation', 'Password confirmation') }}
      {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

      {{-- Form submit button. --------------------}}
      {{ Form::submit('Register', ['class' => 'btn btn-primary btn-lg']) }}
  {{ Form::close() }}
</div>
@stop