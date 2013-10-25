@extends('layouts.base')

@section('body')
<div class="container"> 
    <h2>Login</h2>
    {{ Form::open(['route' => 'sessions.store']) }}
        <div class="form-group">
            {{ Form::label('email', 'Email address') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
            @if ($error = $errors->first("email"))
                <p class="text-danger">{{ $error }}</p>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
            @if ($error = $errors->first("password"))
                <p class="text-danger">{{ $error }}</p>
            @endif
        </div>

        <div class="form-group pull-right">
            <a href="{{ URL::route('home') }}" class="btn btn-danger btn-lg">Cancel</a>        
            {{ Form::submit('Login', ['class' => 'btn btn-primary btn-lg']) }}
        </div>
    {{ Form::close() }}
</div>
@stop