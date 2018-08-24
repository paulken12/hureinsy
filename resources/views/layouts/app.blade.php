<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hureinsy') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.app = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Hureinsy') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main" style="margin-top: 80px; margin-bottom: 50px">
            <div class="container-fluid">
                <div class="row">
                    @auth()
                        <div class="col-sm-3">
                            <div class="card">
                                {{--<img class="rounded-circle ml-auto mr-auto mt-4" src="{{asset(Auth::user()->avatar_path)}}" alt="User Avatar" width="100" height="100">--}}
                                <avatar-form :user="{{ Auth::user() }}"></avatar-form>

                                <div class="card-body text-center">
                                    <p class="card-title">
                                        <a href="{{route('profiles',Auth::user()->name)}}">{{Auth::user()->email}}</a>
                                    </p>
                                    <small class="text-muted" style="text-transform: uppercase;">
                                        @foreach (Auth::user()->roles as $role)
                                            {{$role->label}}
                                        @endforeach
                                    </small>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                        <li class="list-group-item"><a href="{{route('employees.index')}}">Personnel List</a></li>
                                        @can('admin_view')
                                            <li class="list-group-item"><a href="{{route('register.create')}}">New employee</a></li>
                                            <li class="list-group-item">
                                                <a href="#adminSetting" data-toggle="collapse" aria-expanded="false">
                                                    Admin Setting
                                                </a>
                                                <ul class="collapse" id="adminSetting">
                                                    <li><a href="{{route('users')}}">Users</a></li>
                                                    <li><a href="{{route('authorization')}}">Permissions</a></li>
                                                </ul>
                                            </li>
                                        @endcan
                                        <li class="list-group-item">
                                            <a href="#userSetting" data-toggle="collapse" aria-expanded="false">
                                                User Setting
                                            </a>
                                            <ul class="collapse" id="userSetting">
                                                <li><a href="{{route('changePassword')}}">Change password</a></li>
                                            </ul>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#personnelActionManagement" data-toggle="collapse" aria-expanded="false">
                                                Personnel Action Management
                                            </a>
                                            <ul class="collapse" id="personnelActionManagement">
                                                @can('manager_view')
                                                    <li><a href="{{route('paf.index')}}">Request Personnel Action Form</a></li>
                                                    <li><a href="{{route('paf.list.reassess')}}">Request PAF lists</a></li>
                                                @endcan

                                                @can('hr_view')
                                                    <li><a href="{{route('paf.list')}}">Pending Personnel Action Form</a></li>
                                                @endcan
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endauth
                    <div class="col">
                        @yield('content')
                    </div>

                    <flash message="{{ session('flash') }}"></flash>
                </div>
            </div>
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
