<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>@yield('title') - askforWEB</title>
        @include('layouts.cssfile')
    </head>
    <body class="light_header">
        <div id="main_wrapper">
            <header id="site_header">
                @include('layouts.topNav')
                @include('layouts.mainNav')
            </header>
            @yield('content')
            @include('layouts.footer')
        </div>
        
        @include('layouts.jsfiles')
        @yield('pagescript')
    </body>
</html>