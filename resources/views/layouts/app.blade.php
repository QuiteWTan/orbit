<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="antialiased"> 
        @include('partials.navbar')   
        @include('partials.alert')        
        @yield('body')

        @yield('before-script')
        @include('partials.script')
        @yield('after-script')
        @include('partials.footer')
    </body>
</html>