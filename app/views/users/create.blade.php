@extends('layouts.base')

@section('body')
<div class="container"> 
    <h2>Register</h2>
    {{ Form::open(['route' => 'users.store']) }}
        <div class="form-group">
            {{ Form::label('email', 'Email address') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password confirmation') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Register', ['class' => 'btn btn-primary btn-lg pull-right']) }}
        </div>
    {{ Form::close() }}
</div>
@stop