<header class="navber navber-expand-lg navber-light bg-light fixed-top">
    <a href="/" class="navbar-brand">TODO App</a>
    <button
       class="navbar-toggler"
       type="button"
       date-toggle="collapse"
       data-target="#navbarSupportedContent"
       aria-controls="navbarSuppprtedContent"
       aria-expanded="false"
       aria-label="Toggle navigation"
    >
       <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="navbar-item">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementVyId('logout-form').submit();">{{_('logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ _('Register') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ _('Login') }}</a>
            </li>
            @endauth
            
            
        </ul>
    </div>
</header>