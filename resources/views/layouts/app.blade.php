<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student CGPA System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <header>
        <div class="header-left">
            <h1 class="title">STUDENT CGPA SYSTEM</h1>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('students.index') }}"
                       class="nav-btn {{ request()->routeIs('students.index') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('students.create') }}"
                       class="nav-btn {{ request()->routeIs('students.create') ? 'active' : '' }}">
                        Add Student
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

</div>

</body>
</html>