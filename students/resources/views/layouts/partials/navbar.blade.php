<header class="text-dark">
    <div class="navbar-container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"/>
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-dark">Home</a></li>
                @can('isAdmin')
                    <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-dark">Users</a></li>
                @endcan
                @can('isTeacher')
                    <li><a href="{{ route('students.index') }}" class="nav-link px-2 text-dark">Students</a></li>
                @endcan
                @can('isStudent')
                    <li><a href="{{ route('subjects.index') }}" class="nav-link px-2 text-dark">Subjects</a></li>
                @endcan
            </ul>
            @auth
                <div class="text-end">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-dark me-2">Logout</a>
                </div>
            @endauth
            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-dark me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-dark">Sign-up</a>
                </div>
            @endguest
        </div>
    </div>
</header>
