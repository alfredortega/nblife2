<html>
    <head>
        <meta charset="utf-8">
        <title>Todo List</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.message')
            @yield('content')
        </div>

        <footer id="footer" class="text-center">
            <p>Copyright &copy; 2019 Me</p>        
        </footer>
    </body>
</html>