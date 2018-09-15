<nav class="navbar is-fixed-top">
    <div class="container">
        <img class="navbar-logo" src="/img/Logo-test-w.png" alt="" width="60" height="60">
        <div class="navbar-brand">
            <div class="navbar-item"></div>
            <div class="navbar-item"></div>
            <a class="navbar-item" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
            <div class="navbar-burger" @click="mobileNavIsActive = !mobileNavIsActive" :class="{ 'is-active' : mobileNavIsActive }">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu" :class="{ 'is-active' : mobileNavIsActive }">
            <div class="navbar-start">
                @auth
                <a class="navbar-item" href="/home">Portal</a> @endauth
                <a class="navbar-item" href="/how-it-works">Hoe het werkt</a>
                <a class="navbar-item" href="/about">Wie zijn wij?</a>
            </div>
            <div class="navbar-end">
                @guest
                <a class="navbar-item" href="{{ route('login') }}">Inloggen</a> @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-hidden-touch" href="#">
                            {{ Auth::user()->first_name }}
                        </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('home') }}">
                                Home
                            </a>
                        <a class="navbar-item" href="/account">
                                Account
                            </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>