@extends('layout')
@section('title', isset($user)  ? 'Update ' . $user->name : 'Create user')
@section('content')
    <a class="btn btn-secondary mb-3" href="{{ route('users.index') }}"> Back to users </a>
    <form method="POST"
          @if(isset($user))
              action="{{ route('users.update', $user) }}"
          @else
              action="{{ route('users.store') }}"
        @endif
    >
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div>
                <input name="name"
                       value="{{ old('name', isset($user) ? $user->name : null) }}"
                       type="text" class="form-control" placeholder="Name" aria-label="name">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3">
                <input name="email"
                       value="{{ old('email', isset($user) ? $user->email : null)  }}"
                       type="text" class="form-control" placeholder="Email" aria-label="email">
                @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button type="submit" class="btn btn-success"> Created user</button>
                </div>
            </div>
        </div>
    </form>
@endsection
