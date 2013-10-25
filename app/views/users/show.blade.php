@extends('layouts.base')

@section('body')
<div class="container"> 
    <h2>User data</h2>
    <dl>
        <dt>Name</dt>
        <dd>{{ $user->email }}</dd>
        <dt>Interests</dt>
        <dd>
            @if (count($user->interests) > 0)
                <ul>
                @foreach ($user->interests as $interest)
                    <li>{{ $interest->name }}</li>
                @endforeach
                </ul>
            @else
                No interests
            @endif
        </dd>
    </dl>
</div>
@stop