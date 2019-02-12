<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                /* font-family: 'Nunito', sans-serif; */
                font-weight: 200;
                margin: 0;
            }

            .full-height {
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
                /* font-weight: bold; */
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        {{ route('home') }}
        {{ route('store-todo') }}
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
            <form method="POST" action="{{ route('store-todo') }}" class="mb-5 text-center">
                        <div class="row">
                            <div class="col-8">
                                    <div class="form-group mx-sm-3 mb-2">
                                            <label for="inputPassword2" class="sr-only">Password</label>
                                            <input name="todo" type="text" class="form-control" id="inputPassword2" placeholder="Create a Todo">
                                          </div>
                            </div>
                            <div class="col-4">
                                    <button type="submit" class="btn btn-primary mb-2 w-100">Create Todo</button>
                            </div>
                        </div>
                            @csrf
                          </form>
                    <div class="content">
                            <div class="title m-b-md">
                            @foreach ($todos as $todo)
                                {{ $todo->todo }} <hr>
                            @endforeach    
                            </div>
                        </div>
            </div>
        </div>
    </body>
</html>
