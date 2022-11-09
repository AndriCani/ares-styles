<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        <h1>{{ $response['author'] }}</h1>
        <h3>{{ $response['quote'] }}</h3>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>