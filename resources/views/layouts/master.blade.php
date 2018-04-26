<!doctype html>
<html>
<head>
    <title>@yield('title', 'Foobooks')</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='/css/p4Style.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>



<header>
    Filipino Verb Dictionary
    @include('modules.nav')
</header>

<section id='main'>
    @yield('content')
</section>

<footer>
    <a href='http://github.com/mfaldas/p4'><i class='fa fa-github'></i> View on Github</a>
</footer>

{{--<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>--}}

@stack('body')

</body>
</html>