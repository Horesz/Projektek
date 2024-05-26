<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cica Learning</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <!-- Boxicons link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Css/js/-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>@yield('Title')</title>
</head>
<body>
    <div class="menu-btn">
        <i class='bx bxs-grid'></i>
    </div>
    <!-- The sidebar -->
    <div class="side-bar">
        <header>
            <!-- Bezáro gomb -->
            {{-- <div class="close-btn">
                <i class='bx bx-window-close'></i>
            </div> --}}
            <img  src="{{ asset('images/unnamed.jpg') }}" alt="profilkep" title="profilkep">
            <div class="side-bar_h1">
                <h1>Cica Learning</h1>
            </div>
        </header>
        <div class="menu">
            <!-- Mindig megjelenő elemek -->
            <div class="item">
                <a href="/">
                    <i class='bx bx-home' ></i>
                    <span class="link_name">Kezdőlap</span>
                </a>
            </div>
            <!-- Egyéb navigációs elemek -->
            @guest
                {{-- Ha a felhasználó NINCS bejelentkezve --}}
                <div class="item ">
                    <a href="/login">
                        <i class='bx bx-log-in' ></i>
                        <span class="link_name">Bejelentkezés</span>
                    </a>
                </div>
                <div class="item">
                    <a href="/register">
                        <i class='bx bx-registered' ></i>
                        <span class="link_name">Regisztráció</span>
                    </a>
                </div>
            @else
                {{-- Ha a felhasználó BE van jelentkezve --}}
                <div class="item">
                    <a class="sub-btn" href="#">
                        <i class='bx bxs-book' ></i>
                        <span class="link_name">Kurzusok</span>
                        <!-- leugro menu -->
                        <i class='bx bxs-chevron-down arrow'></i>
                    </a>
                    <div class="sub-menu">
                        <a href="{{ route('Kurzusok.kurzusok') }}">
                            <i class='bx bx-book-reader'></i>
                            Kurzusaim
                        </a>
                        <a href="{{ route('Kurzusok.store') }}">
                            <i class='bx bx-book-reader'></i>
                            Kurzus létrehozása
                        </a>
                        <a href="">
                            <i class='bx bx-book-reader'></i>
                            Elérhető Kurzusok
                        </a>
                        <a href="">
                            <i class='bx bx-book-reader'></i>
                            Kurzus jelentkezés
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a class="sub-btn" href="#">
                        <i class='bx bxs-graduation'></i>
                        <span class="link_name">Hallgatók</span>
                        <!-- leugro menu -->
                        <i class='bx bxs-chevron-down arrow'></i>
                    </a>
                    <div class="sub-menu" style="display: none;">
                        <a href="{{ route('Hallgatok.addHallgato') }}" class="sub-item">
                            <i class='bx bxs-cool'></i>
                            Kurzushoz rendelés
                        </a>
                        <a href="{{ route('Hallgatok.removeHallgato') }}" class="sub-item">
                            <i class='bx bxs-tired' ></i>
                            Kurzusról eltávolítás
                        </a>
                        <a href="{{ route('Hallgatok.orderHallgato') }}" class="sub-item">
                            <i class='bx bxs-laugh' ></i>
                            Hallgatók módosítása
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ route('profile.edit') }}" class="sub-item">
                        <i class='bx bxs-id-card'></i>
                        Profil
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class='bx bxs-log-out' ></i>
                        <span class="link_name">Kijelentkezés</span>
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <div class=" footer__header md-3 mb-4">
                    <p class="text-white">
                        <code> &copy; 2024 AFP2 beadando  <kbd>Cica</kbd> csapata. Minden jog fenntartva.</code>
                    </p>
                </div>

            @endguest
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Az oldalsáv alapértelmezetten látható legyen
            $('.side-bar').addClass('active');

            // A menü megnyitásához
            $('.menu-btn').click(function(){
                $('.menu-btn').removeClass('active');
                $('.side-bar').css("visibility", "visible");
            });

            // A bezárás eseménykezelője
            $('.close-btn').click(function(){
                $('.menu-btn').addClass('active');
                $('.side-bar').css("visibility", "hidden");
            });

            // Az almenük megjelenítése
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });
        });
    </script>
</body>
</html>
