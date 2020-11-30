<!DOCTYPE doctype html>
<html>
    <head>
        @include('includes.head')
        @include('includes.modal')
        @include('includes.loader')
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @include('includes.sidebar')
        <div class="container-fluid container-left-margin" style="padding: 0px">
            <div class="loader" id="topLoader" style="display: none;">
                <div class="bar"></div>
            </div>
            <div id="body">
                @yield('content')
            </div>
        </div>
    </body>
</html>