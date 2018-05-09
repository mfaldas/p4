{{-- Master Template --}}
{{-- Integrated some Code from Lecture  --}}
{{-- Created By: Marc-Eli Faldas --}}
{{-- Last Modified: 5/8/2018  --}}

    <!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Filipino Verb Dictionary')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='/css/p4Style.css' type='text/css'>

    @stack('head')

</head>

<body>

<header>

    @include('modules.nav')

</header>

<section id='main'>
    @yield('content')
</section>

{{-- Alerts if Edits Made or User has No Auth to Make Edits--}}
@if(session('alertNoAuth'))
    <div class='alert alert-warning' id='noAuth'>{{ session('alertNoAuth') }}</div>
@endif

@if(session('alertEditsSaved'))
    <div class='alert alert-success' id='editsSaved'>{{ session('alertEditsSaved') }}</div>
@endif

@if(session('alertDeletionsMade'))
    <div class='alert alert-success' id='deletionsMade'>{{ session('alertDeletionsMade') }}</div>
@endif

@if(session('alertVerbSaved'))
    <div class='alert alert-success' id='verbSaved'>{{ session('alertDeletionsMade') }}</div>
@endif

<footer>
    <a href='http://github.com/mfaldas/p4'><i class='fa fa-github'></i> View on Github</a>
</footer>

@stack('body')

</body>
</html>