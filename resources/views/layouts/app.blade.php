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
    <!-- {{session()->get('locale')}} -->

    <div class="d-flex flex-row justify-content-between">

        <ul class=" nav nav-tabs">
            <li class="nav-item">
                @auth
                <a class="nav-link active" aria-current="page" href="{{route('student.index')}}">{{trans('lang.students_all')}}</a>
                @endauth
            </li>
            <li class="nav-item">
                @auth
                <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">{{trans('lang.users_all')}}</a>
                @endauth
            </li>
            <li class="nav-item dropdown">
                @auth
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{trans('lang.create')}}</a>
                @endauth
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('student.create')}}">{{trans('lang.new_student')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('user.create')}}">{{trans('lang.new_user')}}</a></li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                </ul>
            </li>

        </ul>

        <ul class="nav-tabs nav">

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lang</a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('lang', 'fr')}}">Francais</a></li>
                    <li><a class="dropdown-item" href="{{route('lang', 'en')}}">English</a></li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                </ul>
            </li>

            <li class="nav nav-item">
                @guest
                <a class="nav-link active" aria-current="page" href="{{route('login')}}">{{trans('lang.login')}}</a>
                @else
                <a class="nav-link active" aria-current="page" href="{{route('logout')}}">{{trans('lang.logout')}}</a>
                @endguest
            </li>
        </ul>



    </div>

    @if(session('success'))
    <div class="ml-1 mt-4 mr-1 mb-4 alert alert-success  alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif



    @auth

    <div class="mt-5 ps-5">
        <p>{{trans('lang.hello')}}: <strong>{{Auth::user()->name}}</strong>!</p>
    </div>
    @else

    <div class="mt-5 text-center">
        <p>{{trans('lang.login_creds')}}</p>
    </div>
    @endauth

    @yield('content')

    <footer class="footer bg-blue text white">
        <div class="container text-center mb-5 mt-5">
            <small>Juan Hernandez, 2025. {{trans('lang.all_rights')}}</small>

        </div>


    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>