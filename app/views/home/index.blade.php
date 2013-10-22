@extends('layouts.base')

@section('body')
<header class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-collapse collapse">
            @if (Auth::check())
                {{ Form::open(array('route' => array('sessions.destroy', 1), 'method' => 'delete')) }}
                    <button type="submit" class="btn btn-sm btn-danger pull-right">Logout</button>
                {{ Form::close() }}
            @else
                {{ Form::open(['route' => 'sessions.store', 'class' => 'navbar-form navbar-right']) }}
                    <div class="row">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                    <div class="row pull-right">
                        <a href="{{ URL::action('UsersController@create') }}">Register</a>
                    </div>
                {{ Form::close() }}
            @endif
        </div><!--/.navbar-collapse -->
    </div>
</header>
<main>
    <div class="container">
        @if (Session::get('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif

        <h1>Search</h1>
        <form action="" method="get">
            <div class="form-group">
                <input type="text" placeholder="Product name or description" class="form-control input-lg">
            </div>
            <div class="form-group pull-right">
                <input type="submit" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>
</main>
@stop