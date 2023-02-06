@extends('layout')
@section('title', 'Users')
@section('content')

    <a type="button" class="btn btn-primary" href=" {{ route('users.create') }}"> Create user</a>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row"> {{ $user->id }} </th>
            <td>
                <a href="{{ route('users.show', $user) }}"> {{ $user->name }} </a>
             </td>
            <td> {{ $user->email }}</td>
            <td>
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('users.edit', $user) }}"> Edit </a>
                    @method('DELETE')
                    @csrf
                        <button class="btn btn-danger" type="submit">
                            Delete
                        </button>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
    </table>
@endsection
