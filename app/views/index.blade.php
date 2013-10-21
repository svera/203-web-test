@extends('layouts.base')

@section('body')
<div class="container">
    <h1>Form</h1>
    <form action="" method="get">
        <div class="form-group">
            <input type="text" placeholder="Product name or description" class="form-control input-lg">
        </div>
        <div class="form-group pull-right">
            <input type="submit" class="btn btn-primary btn-lg">
        </div>
    </form>
</div>
@stop