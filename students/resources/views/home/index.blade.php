@extends('layouts.app-master')

@section('content')
    <div class="p-4 rounded align-content-center">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated user can see this section</p>
        @endauth
        @guest
            <img class="mb-4" src="{!! url('images/Students-logo.png') !!}" alt="" width="500" height="500">
            <p class="lead">Welcome to Students - your online education platform</p>
        @endguest
    </div>
@endsection
