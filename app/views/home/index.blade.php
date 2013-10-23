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
                            <input name="email" type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password" class="form-control">
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

        <h2>Search for products</h2>
        {{ Form::open(['route' => 'search.index', 'method' => 'get', 'id' => 'search-form']) }}
            <div class="form-group">
                <input type="text" name="search" placeholder="Product name or description" class="form-control input-lg">
            </div>
            <div class="form-group pull-right">
                <input type="submit" class="btn btn-primary btn-lg" value="Search">
            </div>
        {{ Form::close() }}

        <div id="wrapper" class="table-responsive">
        </div>
    </div>
</main>

@stop