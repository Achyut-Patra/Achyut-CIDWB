<html>
    <head>
        <title>@yield('title')</title>
        @include('frontend.include.header')
    </head>
    <body id="items">
        <div class="container-fluid">
            @yield('content')
            
        </div>
        @include('frontend.include.footer')
    </body>
</html>