<nav class="navbar navbar-default" role="navigation">


    <div class='col-sm-4'>

        <ul class="nav navbar-nav navbar-left">
            @foreach(config('app.nav'.Auth::check()) as $link => $label)
                @if( $label == 'About' or $label == 'Contact' or $label == 'User')
                    @if( $label == 'User')
                        <li><a href=''
                               class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $user->name }}
                                <span class="glyphicon glyphicon-user"></a>
                    @else
                        <li><a href='{{ $link }}'
                               class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $label }}</a>
                    @endif
                @endif
            @endforeach

        </ul>

    </div>

    <div class='col-sm-4'>
        <a class='navbar-brand' href='/'><img id='logo' src='/images/p4Logo.png'></a>
    </div>

    <div class='col-sm-4'>

        <ul class="nav navbar-nav navbar-right">
            @foreach(config('app.nav'.Auth::check()) as $link => $label)
                @if( $label == 'Saved'or $label == 'Search' or $label == 'Register' or $label == 'Login')

                    <li><a href='{{ $link }}'
                           class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $label }}</a>
                @endif

            @endforeach

            @if(Auth::check())
                <li>
                    <form method='POST' id='logout' action='/logout'>
                        {{ csrf_field() }}
                        <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    </form>
                </li>
            @endif
        </ul>

    </div>
    </div>
</nav>