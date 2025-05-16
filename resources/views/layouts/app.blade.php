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
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>

    @yield('content')

    <footer class="footer bg-blue text white">
        <div class="container text-center mb-5 mt-5">
            <small>Juan Hernandez, 2025. All rights reserved</small>

        </div>


    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>