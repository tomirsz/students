@extends('layouts.app-master')

@section('content')

    <div class="container p-4 rounded">
        <h1>Users - only for admin role</h1>
        <div class="lead">
            <a href="{{ route('users.create') }}" class="btn btn-dark btn-sm">Add new user</a>
        </div>
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col" width="1%">Id</th>
                <th scope="col" width="10%">Username</th>
                <th scope="col" width="10%">First Name</th>
                <th scope="col" width="10%">Last Name</th>
                <th scope="col" width="10%">Role</th>
                <th scope="col" width="10%">Email</th>
                <th scope="col" width="10%"></th>
                <th scope="col" width="10%"></th>
                <th scope="col" width="10%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td style="text-align:center;">{{ $user->username }}</td>
                    <td style="text-align:center;">{{ $user->firstname }}</td>
                    <td style="text-align:center;">{{ $user->lastname }}</td>
                    <td style="text-align:center;">{{ $user->role }}</td>
                    <td style="text-align:center;">{{ $user->email }}</td>
                    <td style="text-align:center;"><a href="{{ route('users.show', $user->id) }}"
                                                      class="btn btn-outline-light btn-sm">Details</a></td>
                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-light btn-sm">Edit</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $users->links() !!}
        </div>
    </div>
@endsection
