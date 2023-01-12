@extends('layouts.app-master')

@section('content')
    <div class="container p-4 rounded">
        <div class="mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">First name</label>
                    <input value="{{ $user->firstname }}"
                           type="text"
                           class="form-control"
                           name="firstname"
                           placeholder="First name" required>

                    @if ($errors->has('firstname'))
                        <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Last name</label>
                    <input value="{{ $user->lastname }}"
                           type="text"
                           class="form-control"
                           name="lastname"
                           placeholder="Last name" required>

                    @if ($errors->has('lastname'))
                        <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ $user->username }}"
                           type="text"
                           class="form-control"
                           name="username"
                           placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}"
                           type="email"
                           class="form-control"
                           name="email"
                           placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" name="role">
                        <option value="admin">Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark">Update</button>
                <a href="{{ route('users.index') }}" class="btn btn-outline-dark">Cancel</a>
            </form>
        </div>
    </div>
@endsection
