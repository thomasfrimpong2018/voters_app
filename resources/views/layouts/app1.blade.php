<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    My Voting App
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">Result Page</div>
            
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
            
                                <div class="container-fluid">
                                        <div class="row">
                                        
                                  
                                          <main role="main" class="col-md-11 ml-sm-auto col-lg-11 px-4">
                                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                              <h1 class="h2">Display the Voting Results </h1></div> 
                                            
                                             @if(Auth::user()->admin == 0)
                                            <div class="alert alert-success">You Have Completed the Voting Processes</div>
                                              @else
                                              
                                              @endif
                                            
                                            
                                            <div class="btn-toolbar mb-2 mb-md-0">
                                            
                                                  <div class="btn-group mr-2">
                                                  <a class="btn btn-sm btn-outline-secondary " href="/presidentvotes">
                                                    <span data-feather="calendar"></span>
                                                    President's Voting Results
                                                  </a>
                                                </div>
                                                <div class="btn-group mr-2">
                                                  <a class="btn btn-sm btn-outline-primary " href="/secretaryvotes">
                                                        <span data-feather="calendar"></span>
                                                       Secretary's Voting Results
                                                  </a>
                                                </div>
                                                <div class="btn-group mr-2">
                                                    <a class="btn btn-sm btn-outline-secondary " href="/organiservotes">
                                                            <span data-feather="calendar"></span>
                                                            Organiser's Voting Results
                                                    </a>
                                                </div>
                                                <div class="btn-group mr-2">
                                                        <a class="btn btn-sm btn-outline-warning" href="/treasurervotes">Treasurer's  Results</a>
                                                        
                                                      </div>
                                              </div> <br>
                                               @yield('content')
                                              @if(Auth::user()->admin == 1)<a class="btn btn-sm btn-default " href="/home">Return to Home Page</a> @endif
                                             
                                              
                                              
                                            </main>
                                           
                                        </div>
                                        
                                     
                                      </div>
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
