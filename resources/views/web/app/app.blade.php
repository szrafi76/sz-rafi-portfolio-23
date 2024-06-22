<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.inc.head')
    </head>

    <body class="dark">

        <div id="preloader">
            <div class="loader_line"></div>
        </div>

        <div class="sz_rafi_tm_all_wrap" data-magic-cursor="show">
            @include('web.inc.header')

            @yield('main-body')
        </div>
       
        <!-- footer start here -->
        @include('web.inc.footer')
        <!-- footer end here -->

        <!-- jquery -->
        @include('web.inc.script')
        @stack('script')
    </body>
</html>
