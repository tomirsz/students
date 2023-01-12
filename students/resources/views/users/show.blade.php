@extends('layouts.app-master')

@section('content')
    <div class="container p-4 rounded">
        <div class="mt-4">
            <div>
                First name: {{ $user->firstname }}
            </div>
            <div>
                Last name: {{ $user->lastname }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
            <div>
                Role: {{ $user->role }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('users.index') }}" class="btn btn-dark">Back</a>
    </div>
@endsection
