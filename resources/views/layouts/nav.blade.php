<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 my-3">
    <a class="navbar-brand" href="{{ route('home.index') }}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.index') }}">会社紹介</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.create') }}">お問い合わせ</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="{{ route('customers.index') }}">顧客一覧</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <button type="button" class="btn btn-light" onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                ">{{ Auth::user()->name }} <span class="caret"></span></button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
    </div>
</nav>
