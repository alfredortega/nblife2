<!DOCTYPE html>
<html lang="en">
    <head>
        @include('inc.header')
    </head>
    <body>
    <div id="wrapper">
        @include('inc.navbar')
        @include('inc.sidemenu')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @include('inc.message')
                @yield('content')
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
    </div><!-- wrapper -->
    @include('inc.footer')
    @include('inc.footerscript')
</body>
</html>