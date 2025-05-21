<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="">
    <link href=" "
        </head>

<body>

    <ul class=" nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('student.index')}}">Students All</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Create</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('student.create')}}">New Student</a></li>
                <li><a class="dropdown-item" href="#">New User</a></li>

                <li>
                    <hr class="dropdown-divider">
                </li>

            </ul>
        </li>

    </ul>

    @if(session('success'))
    <div class="ml-1 mt-4 mr-1 mb-4 alert alert-success  alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @yield('content')

    <footer class="footer bg-blue text white">
        <div class="container text-center mb-5 mt-5">
            <small>Juan Hernandez, 2025. All rights reserved</small>

        </div>


    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>