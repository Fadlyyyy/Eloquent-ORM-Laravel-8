<!DOCTYPE html>
<html>
    <head>
        @include('includes.meta')
        <title>@yield('title') | Landing page</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="">
        <link rel="shotcut icon" type="image/x-icon" href="">


        @stack('before-style')

        <!-- style -->
        @include('includes.style')
        
        @stack('after-style')
    </head>

    <body>
        
        @include('includes.header')
             @yield('content')
        @include('includes.footer')


        @stack('before-script')
        <!-- Script -->
        @include('includes.script')

        @stack('after-script')
    </body>
</html>

