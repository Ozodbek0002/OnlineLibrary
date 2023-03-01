
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><h2> Iqro <em>Books</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item {{ Route::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/')}}"> Asosiy  </a>
                    </li>
                    <li class="nav-item {{ Route::is('products') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('products')}}"> Kitoblar </a>
                    </li>
                    <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('about')}}">Biz haqimizda</a>
                    </li>
                    <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('contact')}}">Aloqa</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

