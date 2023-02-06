@extends('layout')
@section('title', $user->name)
@section('content')
    <a class="btn btn-secondary mb-3" href="{{ route('users.index') }}"> Back to users </a>

    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{ $user->id }}</li>
            <li class="list-group-item">Name: {{ $user->name }}</li>
            <li class="list-group-item">Email: {{ $user->email }}</li>
            <li class="list-group-item">Created: {{ $user->created_at }}</li>
            <li class="list-group-item">Updated: {{ $user->updated_at }}</li>
        </ul>

    </div>
    <a class="btn btn-info mt-3" href="{{ route('users.edit', $user) }}"> Edit </a>

@endsection
