
<!-- Authentication Links -->
@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Войти</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
        </li>
    @endif
@else
    <li class="nav-item"><a class="dropdown-item"  href="{{ route('admin')}}">Личный кабинет</a></li>
    <li class="nav-item dropdown">
        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

            <a class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Выйти</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest
